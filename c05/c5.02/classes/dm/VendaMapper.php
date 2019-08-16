<?php
class VendaMapper{
	private static $conn;
	public static function setConnection(PDO $conn){
		self::conn = $conn;
	}
	public static function save(Venda, $venda){
		$date = date("Y-m-d");
		$sql = "INSERT INTO venda (data_venda) VALUES($date)";
		print $sql."<br>\n";
		self::$conn->query($sql);
		$id = self::getLastId();
		$venda->setId($id);

		foreach ($venda->getItens() as $item) {
			$quantidade = $item[0];
			$produto  $item[1];
			$preco = $produto->preco;

			$sql = ""
		}
	}
}