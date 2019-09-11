<?php
require_once 'classes/ar/Produto_OLD.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';
print 'Teste...';
try{
	Transaction::open('estoque');
	$conn = Transaction::get();
	Produto_OLD::setConnection($conn);

	$p1 = new Produto_OLD;
	$p1->descricao = 'Vinho Brasileiro';
	$p1->estoque = 10;
	$p1->preco_custo = 12;
	$p1->preco_venda = 18;
	$p1->codigo_barras = '13523453234234';
	$p1->data_cadastro = date('Y-m-d');
	$p1->origem = 'N';
	$p1->save();

	//throw new Exception('Exceção proposital');
	$p2 = new Produto_OLD;
	$p2->descricao = 'Vinho Importado';
	$p2->estoque = 10;
	$p2->preco_custo = 18;
	$p2->preco_venda = 29;
	$p2->codigo_barras = '73450345423423';
	$p2->data_cadastro = date('Y-m-d');
	$p2->origem = 'I';
	$p2->save();
	Transaction::close();
}
catch (Exception $e) {
	Transaction::rollback();
	print $e->getMessage();
}