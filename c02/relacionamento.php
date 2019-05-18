<DOCTYPE html>
<html>
 
 <h3>Associacao</h3>
<?php
include 'classes/Produto.php';
include 'classes/Fabricante.php';

$p1 = new Produto('Cacau', 10, 7);
$f1 = new Fabricante ('Fábrica de Chocolate', 'Willy Wonka Street', '123456');

$p1->setFabricante($f1);

echo '<pre>';
print_r($p1);
print '<br>';

?>


<h3>Composicao</h3>

<?php

print '<br>';

?>

</html>