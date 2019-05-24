<DOCTYPE html>
<html>
 <h2>Interfaces</h2>
<?php
require_once 'classes/Produto.php';
require_once 'classes/Orcamento.php';

$o = new Orcamento;
$o->adiciona( new Produto('Máquina', 10, 299),1);
$o->adiciona( new Produto('Barbeador', 10, 170),1);
$o->adiciona( new Produto('Chocolate', 10, 7),3);
print $o->calculaTotal();
?>

</html>