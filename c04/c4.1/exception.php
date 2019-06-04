<?php
require_once 'CSVParser.php';
$csv = new CSVParser('clientes.csv', ';');
try{
    $csv->parse();
    while ($row = $csv->fetch()) {
        print $row['Cliente'] . " - ";
        print $row['Cidade'] . "<br>\n";
    }
}catch(Exception $e){
    print $e->getMessage();
}