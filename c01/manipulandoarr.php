<?php
	$cores = ['vermelho', 'azul', 'verde', 'amarelo'];
	echo $cores[0];
	print '<br>';
	
	$nomes[] = 'Maria';
	$nomes[] = 'Ana';
	$nomes[] = 'Pedro';
	echo $nomes[2];
	
	print '<br>';
	$pessoa = array();
	$pessoa['nome'] = 'Maria Silva';
	$pessoa['rua'] = 'Quinze de Novembro';
	$pessoa['bairro'] = 'Centro';
	$pessoa['cidade'] = 'Curitiba';
	echo '<pre>';
	print_r($pessoa);
	print '<br>';
	$frutas = array();
	$frutas['cor'] = 'vermelha';
	$frutas['sabor'] = 'doce';
	$frutas['formato'] = 'redondo';
	$frutas['nome'] = 'maçã';
	
	foreach($frutas as $chave => $fruta) {
		echo "$chave => $fruta <br>";
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
?>























