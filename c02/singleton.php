<?php
require_once 'classes/Preferencias.php';
//obtem uma instância
$p1 = Preferencias::getInstance();
print 'Linguagem: '. $p1->getData('language'). "<br>";

$p1->setData('language', 'pt');
print 'A nova linguagem é: '. $p1->getData('language') ."<br>";

$p2 = Preferencias::getInstance();
print 'Linguagem: '. $p2->getData('language'). "<br>";
//DESCOMENTAR PARA GRAVAR
$p1->save();
?>