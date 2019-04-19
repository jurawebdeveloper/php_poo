<?php
	echo 'Hello world!' . '<br>' . PHP_EOL;
	echo 'Hello world 2!' . '<br>' . PHP_EOL;
	print 'ABC' . '<br>';
	$vetor = array('Palio','Gol','Fiesta','Corsa');
	var_dump($vetor);
	print '<br>';
	echo '<pre>';
	print_r($vetor);
	print '<br>';
	$variavel = 'nome';
	$$variavel = 'maria';
	echo $nome;
	print '<br>';
	
	$a = 5;
	$b = $a;
	$b = 10;
	echo $a;
	echo ' ';
	echo $b;
	
	print '<br>';
	
	$c = 5;
	$d = &$c;
	$d = 10;
	echo $c;
	print '<br>';
	print '<br>';
	
	$umidade = 91;
	$vaiChover = ($umidade > 90);
	if($vaiChover){
		echo 'Vai chover';
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'/>
		<title>index php poo</title>
	</head>
</html>