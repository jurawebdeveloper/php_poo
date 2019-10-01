<?php
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/api/Record.php';
require_once 'classes/model/Produto.php';
print '<p>Teste...</p>';
try{
	


}catch (Exception $e){
	Transaction::rollback();
	print $e->getMessage();
}