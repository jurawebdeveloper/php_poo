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
	Transaction::setLogger(new LoggerTXT('tmp/log_protect.txt'));
	Transaction::log('Protegndo acesso a um produto');

    $p1 = Produto::find(14);
    $p1->estoque = '200';
    $p1->store();
	
    Transaction::close();
	

}catch (Exception $e){
	Transaction::rollback();
	print $e->getMessage();
}