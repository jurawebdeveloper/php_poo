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

foreach($contas as $key => $conta) {
    print "Conta: {$conta->getInfo()} <br>";
    print "  Saldo atual: {$conta->getSaldo()} <br>";

    $conta->depositar(200);

    print "Depósito de 200.<br>";
    print "  Saldo atual: {$conta->getSaldo()} <br>";

    if ($conta->retirar(700)) {
        print "Retirada de 700. <br>";
    } else {
        print "Retirada de 700 não permitida.<br>";
    }
    print "  Saldo atual: {$conta->getSaldo()} <br>";
}
print '<br>';
print '<br>';
print '<br>';
print '<br>';
print '<br>';

?>

</html>