<DOCTYPE html>
<html>
 <h2>Interfaces</h2>
<?php

require_once 'classes/OrcavelInterface.php';
require_once 'classes/Orcamento.php';
require_once 'classes/Servico.php';
require_once 'classes/Produto.php';

$o = new Orcamento;
$o->adiciona( new Produto('Máquina de Café', 10, 299),1);
$o->adiciona( new Produto('Barbeador', 10, 170),1);
$o->adiciona( new Produto('Chocolate', 10, 7),3);

$o->adiciona( new Servico('Cabelo', 20),1);
$o->adiciona( new Servico('Barba', 20),1);
$o->adiciona( new Servico('Limpeza', 50),1);

print $o->calculaTotal();
?>

</html>