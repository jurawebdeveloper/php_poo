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
//echo '<pre>'; print_r($this->data); exit;
		$prepared = $this->prepare($this->data);
		
//echo '<pre>'; print_r($values); exit;
		if(empty($this->data['id']) or (!$this->load($this->id))){
			if(empty($this->data['id'])){
				$this->id = $this->getLast()+1;
				$prepared['id']=$this->id;
				$values = str_replace(";", "", implode(',',array_values($prepared))) ;
			}
			$sql = "INSERT INTO {$this->getEntity()}".
			'('.implode(',',array_keys($prepared)).')'.
			'values'.
			'('.$values.')'; //tive que tratar os "values" pois o prepare() está colocando ponto e virgula nos valores string exemplo "Cerveja;'
//echo '<pre>'; print_r($sql); exit;
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

	public function load($id){
		$sql = "SELECT * FROM {$this->getEntity()}";
		$sql .= 'WHERE id = '.(int)$id;
		if($conn = Transaction::get()){
			Transaction::log($sql);
			$result = $conn->query($sql);
			if($result){
				$object = $result->fetchObject(get_class($this));
			}
			return $object;
		}else{
			throw new Exception('Não há transação ativa!!');
		}
	}

	public function delete($id = NULL){
		$id = $id ? $id:$this->id;
		$sql = "DELETE FROM {$this->getEntity()}";
		$sql .= 'WHERE id = '.(int)$this->data['id'];

		if($conn = Transaction::get()){
			Transaction::log($sql);
			$result = $conn->exec($sql);
			return $result;
		}else{
			throw new Exception('Não há transação ativa!!');
		}
	}

	public static function find($id){
		$classname = get_called_class();
		$ar = new $classname;
		return $ar->load($id);
	}

	private function getLast(){
		if($conn = Transaction::get()){
			$sql = "SELECT MAX(id) FROM {$this->getEntity()}";
			Transaction::log($sql);
			$result = $conn->query($sql);
			$row = $result->fetch();
			return $row[0];
		}else{
			throw new Exception('Não há transação ativa!!');
		}
	}

	public function prepare($data){
		$prepare = array();
		foreach($data as $key => $value){
			if(is_scalar($value)){
				$prepared[$key] = $this->escape($value);
			}
		}
		return $prepared;
	}

	public function escape($value){
		if(is_string($value) and (!empty($value))){
			$value = addslashes($value);
			return "'$value;'";
		}else if(is_bool($value)){
			return $value ? 'TRUE':'FALSE';
		}else if($value!==''){
			return $value;
		}else{
			return "NULL";
		}
	}


}
