<DOCTYPE html>
<html>
 
 <h2>Herança</h2>
<?php
require_once 'classes/Conta.php';
require_once 'classes/ContaPoupanca.php';
require_once 'classes/ContaCorrente.php';


print '<h3>Polimorfismo</h3>';
$contas = array();
$contas[] =  new ContaCorrente(6677,'CC.1234.56',100,500);
$contas[] =  new ContaPoupanca(6678,'PP.1234.57',100);
$contas[] =  new ContaPoupanca(6678,'PP.2345.78',200);

echo '<pre>';
print_r($contas);
print '<br>';
print '<br>';
print '<br>';
print '<br>';

?>

</html>