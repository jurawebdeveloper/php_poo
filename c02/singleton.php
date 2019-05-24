<?php
require_once 'classes/Preferencias.php';
//obtem uma instância
$p1 = Preferencias::getInstance();
print 'Linguagem: '. $p1->getData('language'). "<br>";
?>