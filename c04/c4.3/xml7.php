<?php 
$xml = simplexml_load_file('paises4.xml');
echo "*** Estados ***<br>\n";
foreach($xml->estados->estado as $estado){
    echo str_pad('Estado: '.$estado['nome'],30).'Capital: '.$estado['capital']."</br>";
}