<?php
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/api/Record.php';
require_once 'classes/model/Produto.php';
print '<p>Teste...</p>';
try{
	Transaction::open('estoque');
	Transaction::setLogger(new LoggerTXT('tmp/log_update.txt'));
	Transaction::log('Alterando um produto');

	$p1 = Produto::find(2);
	//echo "<pre>"; print_r($p1);print '<br>'; //exit;
	$p2 = clone $p1;
	//echo "<pre>"; print_r($p2); exit;
	
	$p2->store();
	
	Transaction::close();


}catch (Exception $e){
	Transaction::rollback();
	print $e->getMessage();
}