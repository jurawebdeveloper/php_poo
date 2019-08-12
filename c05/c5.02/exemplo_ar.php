<?php
require_once 'classes/ar/Produto.php';

try{
	$conn = new PDO('mysql:host=localhost;dbname=estoque', 'root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	Produto::setConnection($conn);
	$produtos=Produto::all();
	echo '<pre>'; print_r($produtos);
	foreach($produtos as $produto){
		$produto->delete();
	}
	
	$produto = new Produto;
	$produto->descricao = 'Vinho Tinto Merlot2';
	$produto->estoque = 11;
	$produto->preco_custo = 12;
	$produto->preco_venda = 18;
	$produto->codigo_barras = 135475165472456;
	$produto->data_cadastro = date('Y-m-d');
	$produto->origem = 'N';
	$produto->save();

	$outro = Produto::find(1);
	print 'Descricao:'.$outro->descricao."<br>\n";
	$outro->registraCompra(14,5);
	$outro->save();
}catch(Exception $e) {
	print $e->getMessage();
}