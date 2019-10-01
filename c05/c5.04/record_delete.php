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
	Transaction::setLogger(new LoggerTXT('tmp/log_delete.txt'));
	Transaction::log('Removendo um produto');

	$p1 = Produto::find(15);
	if($p1 instanceof Produto){
        $p1->delete();
    }else{
        throw new Exception('Produto não localizado.');
    }
    Transaction::close();
	

}catch (Exception $e){
	Transaction::rollback();
	print $e->getMessage();
}