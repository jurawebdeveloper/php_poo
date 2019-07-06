<?php
foreach(new DirectoryIterator('C:\xampp\htdocs\php_poo\c04\c4.4\tmp') as $file){
	print(string) $file.'<br>'.PHP_EOL;
	print 'Nome: '.$file->getFileName().'<br>'.PHP_EOL;
}