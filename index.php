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
	print '<br>';
	
	$carro = new stdClass;
	$carro->modelo = 'Palio';
	$carro->ano = '2013';
	$carro->cor = 'Branca';
	
	print_r($carro);
	print '<br>';
	print $carro->modelo;
	
	print '<br> <p> Passagem de parametros: </p>';
	function incrementa(&$variavel, $valor){
		$variavel += $valor;
	}
	
	$a = 10;
	incrementa($a, 20);
	
	echo $a;
	
	print '<br>';
	
	$i = 1;
	switch ($i) {
		case 0:
			print 'i é igual a zero.';
			break;
		case 1:
			print 'i é igual a um.';
			break;
		case 2:
			print 'i é igual a dois.';
			break;
		default:
			print 'i não é 0, nem 1 e nem 2';
	}
	print '<br>';
	function ola(){
		$argumentos = func_get_args();
		$qtd = func_num_args();
		for ($n = 1; $n < $qtd; $n ++){
			echo 'Olá ' . $argumentos[$n] . ' ,';
		}
	}
	ola('Joel','Ana','Bob','Bia');
	print '<br>';
	print '<br>';
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'/>
		<title>index php poo</title>
	</head>
</html>