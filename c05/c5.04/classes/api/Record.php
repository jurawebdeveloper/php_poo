<?php
abstract class Record{
	protected $data;
	public function __construct($id = NULL){
		if($id){
			$object = $this->load($id);
			if($object){
				$this->fromArray($object->toArray());
			}
		}
	}
	public function __clone(){
		unset($this->data['id']);
	}

	public function __set($prop, $value) {
		if (method_exists($this, 'set_'.$prop)) {
		// executa o método set_<propriedade>
			call_user_func(array($this, 'set_'.$prop), $value);
		}
		else {
			if ($value === NULL) {
				unset($this->data[$prop]);
			}
			else {
				$this->data[$prop] = $value; // atribui o valor da propriedade
			}
		}
	}
	public function __get($prop){
		if(method_exists($this, 'get_'.$prop)){
			return call_user_func(array($this,'get_'.$prop));
		}else{
			if(isset($this->data[$prop])){
				return $this->data[$prop];
			}
		}
	}
	public function __isset($prop){
		return isset($this->data[$prop]);
	}
	private function getEntity(){
		$class = get_class($this);
		return constant("{$class}::TABLENAME");
	}
	public function fromArray($data){
		$this->data=$data;
	}
	public function toArray(){
		return $this->data;
	}
	public function store(){
		$prepared = $this->prepare($this->data);
		if(empty($this->data['id']) or (!$this->load($this->id))){
			if(empty($this->data['id'])){
				$this->id = $this->getLast()+1;
				$prepared['id']=$this->id;
			}
			$sql = "INSERT INTO {$this->getEntity()}".
			'('.implode(',',array_keys($prepared)).')'.
			'values'.
			'('.implode(','.array_values($prepared)).')';
		}else{
			$sql = "UPDATE {$this->getEntity()}";
			if($prepared){
				foreach($prepared as $column=>$value){
					if($column !=='id'){
						$set[] = "{$column} = {$value}";
					}
				}
			}
			$sql .= 'SET'.implode(',',$set);
			$sql .= 'WHERE id='.(int) $this->data['id'];
		}
		if($conn = Transaction::get()){
			Transaction::log($sql);
			$result = $conn->exec($sql);
			return $result;
		}else{
			throw new Exception('Não há transação ativa!!');
		}
	}





}
