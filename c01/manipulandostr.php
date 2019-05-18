<?php
	$fruta = 'maçã';
	print "como $fruta";
	
	print '<br>';
	/*
	$texto = <<<CHAVE
	linha1
	nesta área
	
	CHAVE;
	echo $texto;
	*/ //não funcionou
	print '<br>';
	$fruta = 'maçã';
	echo $fruta . ' é a fruta de Adão' . PHP_EOL;
	print '<br>';
	echo "{$fruta} é a fruta de Adão" . PHP_EOL;
	
	
	print '<br>';
	$a = 1234;
	echo "O salário é $a";
	print '<br>';
	echo "Seu nome é \"Paulo\".<br>";
	echo 'Seu nome é "Paulo".';
	print '<br>';
	echo strtoupper('Convertendo para maiúsculas.').'<br>';
	echo strtolower('CONVERTENDO PARA MINUSCULAS');
	print '<br>';
	$string = 'Americana';
	print substr($string,1). '<br>';
	print substr($string,1,3). '<br>';
	print substr($string,0,-1). '<br>';
	print substr($string,-2). '<br>';
	print '<br>';
	
	$texto = 'The Beatles';
	print str_pad($texto, 20,"*", STR_PAD_LEFT) . "<br>\n";
	print str_pad($texto, 20,"*", STR_PAD_BOTH) . "<br>\n";
	print str_pad($texto, 20,"*") . "<br>\n";
	print '<br>';
	$txt = ".oO00Oo.";
	print str_repeat($txt,5) ."<br>";
	print "O comprimento da string é " . strlen($txt)."<br>";
	print '<br>';
	print str_replace('Rato', 'Leão', 'O Rato roeu a roupa do rei de roma');
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
	print '<br>';
?>























