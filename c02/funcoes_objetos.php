<DOCTYPE html>
<html>
 <h2>Funções para Manipular Objetos</h2>
<?php
print '<h3>get_class_methods</h3>';
require_once 'classes/Produto.php';

print_r(get_class_methods('Produto'));

class Produto2 {
	public $descricao;
	public $estoque;
	public $preco;
	public $fabricante;
	public $caracteristicas;
	
	
	public function __construct($descricao, $estoque, $preco) {
		if (is_string($descricao)) {
			$this->descricao = $descricao;
		}
		if (is_numeric($estoque) AND $estoque > 0) {
			$this->estoque = $estoque;
		}
		if (is_numeric($preco) AND $preco > 0) {
			$this->preco = $preco;
		}
		//print "Construído: Objeto {$descricao} <br>";
	}
	
}

print '<h3>get_object_vars</h3>';
$p1 = new Produto2('Café','22','11');
echo '<pre>';
print_r(get_object_vars($p1));
?>
<h3>get_class</h3>
<h3>get_parent_class</h3>
<h3>is_subclass_of</h3>
<h3>method_exists</h3>
<h3>call_user_func</h3>

<?php

function apresenta($nome) {
	echo "Olá senhor {$nome}! <br>";
}
//execução da função
call_user_func('apresenta', 'Pablo');
//declaraçãode classe
class Pessoa{
	public static function apresenta($nome) {
		echo "Olá senhor {$nome} <br>";
	}
}

//chamada de metodo estático
call_user_func(array('Pessoa', 'apresenta'),'Paulo');

//chamada de método de objeto

$obj = new Pessoa;
call_user_func(array($obj, 'apresenta'),'Pedro');

?>
</html>