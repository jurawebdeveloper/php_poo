<DOCTYPE html>
<html>
 
 <h3>Associacao</h3>
<?php
include 'classes/Produto.php';
include 'classes/Fabricante.php';
include 'classes/Caracteristica.php';
include 'classes/Cesta.php';

$p1 = new Produto('Cacau', 10, 7);
$f1 = new Fabricante ('Fábrica de Chocolate', 'Willy Wonka Street', '123456');

$p1->setFabricante($f1);

echo '<pre>';
print_r($p1);
print '<br>';




print '<h2>Composicao</h2>';

$p3 = new Produto('Chocolate', 10, 7);
$p3->addCaracteristica('Cor', 'branco');
$p3->addCaracteristica('Peso', '2.6 kg');
$p3->addCaracteristica('Potencia', '20w');
print_r($p3);
print '<br>';

print 'Produto: ' . $p3->getDescricao()."<br>";
foreach($p3->getCaracteristicas() as $c) {
    print ' Caracteristica: '.$c->getNome(). ' - '.$c->getValor(). "<br>";
}
print '<br>';
print '<br>';

print '<h2>Agregacao</h2>';

$c1 = new Cesta;

$c1->addItem($p1);
$c1->addItem($p2 = new Produto('Café', 100, 7));
$c1->addItem($p3);
print_r($c1);

print '<br>';
print '<br>';

?>

</html>