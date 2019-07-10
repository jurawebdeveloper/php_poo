<?php
$path = 'C:\xampp\htdocs\php_poo\c04\c4.4\tmp';
foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path,RecursiveDirectoryIterator::SKIP_DOTS)) as $item){
	print( (string) $item . '<br>' . PHP_EOL);
}