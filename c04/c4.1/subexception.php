<?php
require_once 'classes/CSVParser.php';
class FileNotFoundException extends Exception{}
class FilePermissionException extends Exception{}


$csv = new CSVParser('clientes2.csv', ';');
try{
    $csv->parse();
    while ($row = $csv->fetch()) {
        print $row['Cliente'] . " - ";
        print $row['Cidade'] . "<br>\n";
    }
}catch(FileNotFoundException $excessao){
    echo '<pre>';print_r($excessao->getTrace());
    die("Arquivo não encontrado.");
}catch(FilePermissionException $excessao){
    echo $excecao->getFile().':'.$excecao->getLine().'#'.$excecao->getMessage();
}