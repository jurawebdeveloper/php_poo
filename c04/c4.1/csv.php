<?php
require_once 'CSVParser.php';
$csv = new CSVParser('clientes.csv', ';');
$csv->parse();
while ($row = $csv->fetch()) {
    print $row['Cliente'] . " - ";
    print $row['Cidade'] . "<br>\n";
}