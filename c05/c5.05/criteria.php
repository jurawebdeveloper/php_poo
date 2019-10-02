<?php
require_once 'classes/api/Criteria.php';
//print 'Teste...';

$criteria = new Criteria;
$criteria->add('idade', '<', 16);
$criteria->add('idade', '>', 60, 'or');
print $criteria->dump() . "<br>\n";

$criteria = new Criteria;
$criteria->add('idade','IN', array(24,25,26));
$criteria->add('idade','NOT IN', array(10));
echo "<pre>"; 
print_r($criteria);
print $criteria->dump() . "<br>\n";

$criteria = new Criteria;
$criteria->add('nome', 'like', 'pedro%');
$criteria->add('nome', 'like', 'maria%', 'or');
print $criteria->dump() . "<br>\n";

$criteria = new Criteria;
$criteria->add('telefone', 'IS NOT', NULL);
$criteria->add('sexo', '=', 'F');
print $criteria->dump() . "<br>\n";

$criteria = new Criteria;
$criteria->add('UF', 'IN', array('RS', 'SC', 'PR'));
$criteria->add('UF', 'NOT IN', array('AC', 'PI'));
print $criteria->dump() . "<br>\n";