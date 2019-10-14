<?php
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Criteria.php';
require_once 'classes/api/Repository.php';
require_once 'classes/api/Record.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/model/Produto.php';
print 'Teste...';
try{
	Transaction::open('estoque');
	print 'Teste2...';
	Transaction::setLogger(new LoggerTXT('tmp/log_collection_get.txt'));
	$criteria = new Criteria;
	$criteria->add('estoque','>',10);
	$criteria->add('origem','=','N');


	$repository = new Repository('Produto');
	$produtos = $repository->load($criteria);
	//echo '<pre>';print_r($produtos); exit;
	if($produtos){
		echo "Produtos <br>";
		foreach ($produtos as $produto) {
			echo ' ID: '.$produto->id;
			echo ' Descricao: '.$produto->descricao;
			echo ' Estoque: '.$produto->estoque;
			echo '<br>';
		}
	}
		print "Quantidade: " . $repository->count($criteria);
		Transaction::close(); // fecha a transação
}
	catch (Exception $e) {
	echo $e->getMessage();
	Transaction::rollback();
}
