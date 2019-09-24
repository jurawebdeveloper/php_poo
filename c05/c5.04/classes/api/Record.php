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






}
