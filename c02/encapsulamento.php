<DOCTYPE html>
<html>
 
 <h2>Encapsulamento</h2>
<?php
require_once 'classes/Pessoa.php';
$p1 = new Pessoa;
$p1->nome = 'Maria Silva';
$p1->endereco = ' Rua Bento';
$p1->nascimento = ' 01 de maio de 2015';
$p1->telefone = '(51) 1234-5678';

echo '<pre';
print_r($p1);

print '<br>';
print '<br>';
print '<br>';
print '<br>';

?>

</html>