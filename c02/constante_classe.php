<DOCTYPE html>
<html>
 Constante</h2>
<?php
class Pessoa {
	private $nome;
	private $genero;
	const GENEROS = array('M'=>'Masculino', 'F'=>'Feminino');
	
	public function __construct($nome, $genero){
		$this->nome = $nome;
		$this->genero = $genero;
	}
	
	public function getNome() {
		return $this->nome;
	}
	public function getNomeGenero() {
		return self::GENEROS[$this->genero];
	}
}

print '<br>';
print '<br>';
$p1 = new Pessoa('Ana Santos', 'F');
$p2 = new Pessoa('João Santos', 'M');

print $p1->getNome(). '<br>';
print $p1->getNomeGenero(). '<br>';
print $p2->getNome(). '<br>';
print $p2->getNomeGenero(). '<br>';

print '<br>';
print '<br>';
print '<br>';
print '<br>';

?>

</html>