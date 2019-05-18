<?php
include 'classes/Produto.php';

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 7;

$p2 = new Produto;
$p2->descricao = 'Café';
$p2->estoque = 20;
$p2->preco = 4;

var_dump($p1);
print '<br>';
var_dump($p2);


?>