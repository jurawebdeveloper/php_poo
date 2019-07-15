<?php
require_once 'classes/Record.php';

interface ExportInterface{
	public function export($data);
}

class XMLExporter implements ExportInterface {
	public function export($data){
		$data = array_flip($data);
		$xml = new SimpleXMLElement('<record/>');
		array_walk_recursive($data, array($xml,'addChild'));
		return $xml->asXML();
	}
}
class JSONExporter implements ExportInterface{
	public function export($data){
		return json_encode($data);
	}
}

class Pessoa extends Record{
	const TABLENAME = 'produtos';
	public function export(ExportInterface $e) {
		return $e->export($this->data);
	}
}

$p = new Pessoa;
$p->nome = 'Ana Souza';
$p->endereco = 'Rua Nove';
$p->numero = '9';
print $p->export(new XMLExporter);
print '<br>';
print $p->export(new JSONExporter);


