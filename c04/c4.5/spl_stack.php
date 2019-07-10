<?php
$ingredientes = new SplStack();
$ingredientes->push('Peixe');
$ingredientes->push('Sal');
$ingredientes->push('Limão');

foreach($ingredientes as $item){
	print 'Item: '.$item.'<br>'.PHP_EOL;
}

print PHP_EOL;
print $ingredientes->pop().'<br>'.PHP_EOL;
print 'Contagem: '.$ingredientes->count().'<br>'.PHP_EOL;