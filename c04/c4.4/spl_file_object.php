<?php 
$file = new SplFileInfo('index.html');
print 'Nome: '.$file->getFileName().'<br>'.PHP_EOL;
print 'Extansão: '.$file->getExtension().'<br>'.PHP_EOL;

$file2 = new SplFile

