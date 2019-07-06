<?php
$dir = opendir('C:\xampp\htdocs\php_poo\c04\c4.4\tmp');//exit;
while($arquivo = readdir($dir)){
	print $arquivo.'<br>'.PHP_EOL;
}
closedir($dir);