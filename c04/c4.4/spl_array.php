<?php
$dados = ['salmao','tilápia','sardinha','badejo','pescada','dourado','corvina','cavala','bagre'];
$objarray=new ArrayObject($dados);
$objarray->append('bacalhau');
print 'Posição 2: '.$objarray->offsetGet(2).'<br>'.PHP_EOL;
$objarray->offsetSet(2,'linguado');
print 'Posicao 2 atualizado: '.$objarray->offsetGet(2).'<br>'.PHP_EOL;