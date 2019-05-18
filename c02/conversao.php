<?php
include 'classes/Produto.php';



$prod1 = new StdClass;
$prod1->descricao = 'Chocolate Amargo';
$prod1->estoque = 100;
$prod1->preco = 7;

print_r($prod1); print '<br>';

$vetor1 = (array) $prod1;
//echo '<pre>';
print_r($vetor1); print '<br>';

$prod2 = (object) $vetor1;
print_r($prod2); 
print '<br>';
$prod3 = array();
$prod3['descricao'] = 'Cacau';
$prod3['estoque'] = 100;
$prod3['preco'] = 7;
print '<br>';
print '<br>';
print '<br>';
print '<br>';
print '<br>';
print '<br>';


?>