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
	
	function fatorial($num){
		if($num == 1){
			return $num;
		} else {
			return $num * fatorial($num - 1);
		}
	}
	echo fatorial(5);
	echo fatorial(1);
	print '<br>';
	//array file (string $filename[,...])
	$arquivo = file ("tmp/file.txt");
	foreach ($arquivo as $linha) {
		print $linha;
	}
	print '<br>';
	print '<br>';
	$origem = "tmp/file.txt";
	$destino = "tmp/file2.txt";
	if (copy($origem, $destino))
		echo "cópia efetuada.";
	else
		echo "cópia não efetuada.";
	print '<br>';
	print '<br>';
	$origem = "tmp/file2.txt";
	$destino = "tmp/file3.txt";
	if (rename($origem, $destino))
		echo "Renomeado com sucesso.";
	else
		echo "não renomeado.";

	print '<br>';
	print '<br>';
/*
	$arquivo = "tmp/file3.txt";
	if (unlink($arquivo))
		echo "arquivo apagado";
	else
		"arquivo não apagado";
*/
	print '<br>';
	print '<br>';

	$arquivo = "tmp/file3.txt";
	if (file_exists($arquivo))
		echo "arquivo existe";
	else
		echo "arquivo não encontrado";

	print '<br>';
	print '<br>';
	$arquivo = "tmp/file3.txt";
	if (is_file($arquivo))
		echo "é arquivo";
	else 
		echo "não é arquivo";

	print '<br>';

	$dir = "tmp/diretorio";
	if(mkdir($dir, 0777))
		echo "diretório criado";
	else 
		"diretório não criado";
	print '<br>';
	$dir = "tmp/diretorio";
	if (rmdir($dir))
		echo "diretório apagado";
	else	
		echo "diretório não apagado";
	print '<br>';
	$diretorio = "C:";
	if (is_dir($diretorio)){
		$linhas = scandir($diretorio);
		foreach ($linhas as $linha){
			print $linha . '<br>' .PHP_EOL;
		}

	}

	print '<br>';
	print '<br>';
	print '<br>';
	print '<br>';
	print '<br>';
	print '<br>';
	print '<br>';
	print '<br>';
	print '<br>';
	print '<br>';
	print '<br>';
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'/>
		<title>index php poo</title>
		<link rel="stylesheet" type="text/css" href="css/index.css" />
	</head>
	<body>
		<h1 id="header"><a href="../../index.html">PHP - Programando com Orientação a Objetos</a></h1>
		<table>
		  <tr>
			<td>1</td>
			<td><a href="c01/index.html">The ABC of Programming</a></td>
		  </tr>
		</table>
	</body>
</html>















