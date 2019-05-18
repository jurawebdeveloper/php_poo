<?php
class Produto {
	private $descicao;
	private $estoque;
	private $preco;
	
	
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
		print "Construído: Objeto {$descricao} <br>";
	}
	
	public function __destruct() {
		print "Destruído: Objeto {$this->descricao} <br>";
	}
	
	public function getDescricao() {
		return $this->descricao;
	}
		
	public function getPreco() {
		return $this->preco;
	}	
	
	public function getEstoque() {
		return $this->estoque;
	}
	
	
	
	
	
	
	
	public function aumentarEstoque($unidades) {
		if(is_numeric($unidades) AND $unidades >= 0) {
			$this->estoque += $unidades;
		}
	}
public function diminuirEstoque($unidades) {
		if(is_numeric($unidades) AND $unidades >= 0) {
			$this->estoque -= $unidades;
		}
	}
public function reajustarPreco($percentual) {
		if(is_numeric($percentual) AND $percentual >= 0) {
			$this->preco *= (1+$percentual/100);
		}
	}
}

?>