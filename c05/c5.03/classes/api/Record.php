<?php
abstract class Connection{
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
}
