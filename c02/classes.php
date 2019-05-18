<?php
include 'classes/Produto.php';

$p1 = new Produto('Chocolate',10,5);
$p2 = new Produto('Café',20,4);




var_dump($p1);
print '<br>';
var_dump($p2);

print '<br>';
print '<br>';

print "O estoque de {$p1->getDescricao()} é {$p1->getEstoque()}<br>";
print "O preco de {$p1->getDescricao()} é {$p1->getPreco()}<br>";

$p1->aumentarEstoque(11);
$p1->reajustarPreco(20);

print "O estoque de {$p1->getDescricao()} é {$p1->getEstoque()}<br>";
print "O preco de {$p1->getDescricao()} é {$p1->getPreco()}<br>";


unset($p1);
unset($p2);

$prod1 = new StdClass;
$prod1->descricao = 'Chocolate Amargo';
$prod1->estoque = 100;
$prod1->preco = 7;

print_r($prod1);
?>