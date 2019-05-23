<DOCTYPE html>
<html>
 <h2>Atributos Estáticos</h2>
<?php
class Software {
	private $id;
	private $nome;
	private static $contador;
	
	function __construct($nome){
		self::$contador ++;
		$this->id = self::$contador;
		$this->nome = $nome;
		print "Software {$this->id} - {$this->nome} <br>";
	}
	
	public static function getContador(){
		return self::$contador;
	}
}

new Software('Dia');
new Software('Gimp');
new Software('Gnumeric');

echo 'Quantidade criada = '.Software::getContador();

?>

</html>