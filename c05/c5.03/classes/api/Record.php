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
		unset($this->data[id])
	}
	public function __set($prop, $value){
		if(method_exists($this, 'set_'.$prop)){
			call_user_func(array($this, 'set_'.$prop), $value);
		}
	}
	public function __get($prop) {
		if(method_exists($this, 'get_'.$prop)){
			return call_user_func(array($this, 'get_'.$prop));
		}else{
			if (isset($this->data[$prop])){
				return $this->data[$prop];
			}
		}
	}
	public function __isset($prop){
		return isset($this->data[$prop]);
	}
	private function getEntity(){
		$class = getClass($this);
		return constant("{$class}::TABLENAME");
	}
	public function fromArray($data){
		$this->data = $data;
	}
	public function toArray(){
		return $this->data;
	}
}
