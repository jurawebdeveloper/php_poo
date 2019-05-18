<?php
include 'classes/Produto.php';

$p1 = new Produto;
$p1->setDescricao('Chocolate');
$p1->setEstoque(10);
$p1->setPreco(7);

$p2 = new Produto;
$p1->setDescricao('Cafe');
$p1->setEstoque(20);
$p1->setPreco(4);



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


?>