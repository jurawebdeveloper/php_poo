<?php
require_once 'CSVParser.php';
$csv = new CSVParser('clientes.csv', ';');
$csv->parse();
while ($row = $csv->fetch()) {
    print $row['Cliente'] . " - ";
    print $row['Telefone'] . " - ";
    print $row['Endereço'] . " - ";
    print $row['Idade'] . " - ";
    print $row['Sexo'] . " - ";
    print $row['Cidade'] . "<br>\n";
}