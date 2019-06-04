<?php
require_once 'CSVParser.php';
$csv = new CSVParser('clientes.csv', ';');
if($csv->parse()){
    while ($row = $csv->fetch()) {
        print $row['Cliente'] . " - ";
        print $row['Telefone'] . " - ";
        print $row['Endereço'] . " - ";
        print $row['Idade'] . " - ";
        print $row['Sexo'] . " - ";
        print $row['Cidade'] . "<br>\n";
    }
}else{
    print "Erro ao ler o arquivo<br>\n";
}