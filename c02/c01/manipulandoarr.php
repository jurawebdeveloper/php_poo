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

	print_r($frutas);
	print '<br>';

	$carros = array('Palio' => array('cor'=>'azul',
									 'potencia'=>'1.0',
									 'opcionais'=>'Ar cond.'),
					'Corsa' => array('cor'=>'cinza',
									 'potencia'=>'1.6',
									 'opcionais'=>'mp3'),

					'Gol' => array('cor'=>'branca',
									 'potencia'=>'1.6',
									 'opcionais'=>'metálica')

	);
	echo $carros['Palio']['opcionais'];
	print '<br>';
	print_r($carros);
	print '<br>';
	foreach ($carros as $modelo => $detalhes) {
		echo"=> modelo $modelo<br>\n";
		foreach ($detalhes as $detalhe => $valor) {
			echo "   - detalhe $detalhe => $valor<br>\n";
		}
	}
	print '<br>';
	array_unshift($cores, "preto");
	array_push($cores, "lilás");
	print_r($cores);
	print '<br>';
	array_shift($cores);
	array_pop($cores);
	print_r($cores);
	print '<br>';

	$coresRev = array_reverse($cores, true);
	print_r($coresRev);
	print '<br>';
	$coresMerg = array_merge($cores, $coresRev);
	print_r($coresMerg);
	print '<br>';
	
	print_r(array_keys($cores));
	print '<br>array_values<br>';
	print_r(array_values($cores));
	print '<br>';
	print 'Quantidade: ' .count($cores);
	print '<br>in_array<br>';
	
	if (in_array('rosa',$cores)) {
		echo 'cor encontrada';
	} else 
		echo 'cor não encontrada';
	
	print '<br>sort<br>';
	
	sort($cores);
	print_r($cores);
	rsort($cores);
	
	print '<br>asort<br>';
	
	asort($cores);
	print_r($cores);
	
	print '<br>ksort<br>';
	
	ksort($cores);
	print_r($cores);
	
	print '<br>explode<br>';
	
	$string2 = "10/05/2019";
	print_r($string2);
	$array2 =(explode("/",$string2)); print '<br>';
	print_r($array2);
	$arrayImplod = (implode('/', $array2));
	print_r($arrayImplod);
	
?>























