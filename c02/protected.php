<DOCTYPE html>
<html>
 
 <h2>protected</h2>
<?php
class Pessoa {
	private $nome;
	
	public function __construct($nome){
		$this->nome = nome;
	}
}

class Funcionario extends Pessoa {
	private $cargo, $salario;
	
	public function contrata($c, $s){
		if(is_numeric($s) and $s > 0) {
			$this->cargo = $c;
			$this->salario = $s;
		}
	}
	
	public function getInfo() {
		return "Nome: {$this->nome} , Salário:  {$this->salario}";
	}
}

$f1 = new Funcionario('Maria da Silva');
$f1->contrata("Gerente", 1600);


echo '<pre';
print_r($f1);


print '<br>';
print '<br>';
print '<br>';
print '<br>';

?>

</html>