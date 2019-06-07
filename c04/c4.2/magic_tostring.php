<?php 
class Auth { //classe instanciada em outra classe  
    protected static $_dbObject = null;  
    public static function setDb($dbAdapter) {
             self::$_dbObject = $dbAdapter;  
    }  
    public function authenticate ($username, $password) {
                /* @stub		  verificar login utilizando o $this->getDb para retornar o objeto de abstração com o banco		*/	    
    }  
    protected function getDb () {   return self::$_dbObject;  }}