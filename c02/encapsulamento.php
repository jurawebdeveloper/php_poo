<DOCTYPE html>
<html>
 
 <h2>Encapsulamento</h2>
<?php
print '<h3>Public</h3>';
require_once 'classes/Pessoa.php';
/*
$p1 = new Pessoa;

$p1->nome = 'Maria Silva';
$p1->endereco = ' Rua Bento';
$p1->nascimento = ' 01 de maio de 2015';
$p1->telefone = '(51) 1234-5678';

echo '<pre';
print_r($p1);
*/
print '<h3>Private</h3>';
$p2 = new Pessoa('maria Silva', 'Rua Bento Goncalves');
if($p2->setNascimento('01 de maio de 2015')) {
    print "Attr 01 de maio <br>";
} else {
    print 'nao attr <br>';
}
if($p2->setNascimento('2015-12-30')) {
    print 'Atribuiu 2015-12-30';
} else {
    print 'Não atribuiu';
}


echo '<pre';
print_r($p2);

print '<h3><a href="protected.php">protected.php</a></h3>';
print '<br>';
print '<br>';
print '<br>';
print '<br>';

?>

</html>