<?php
class Produto {
	private $descicao;
	private $estoque;
	private $preco;
	
	
	public function setDescricao($descricao) {
		if (is_string($descricao)) {
			$this->descricao = $descricao;
		}
	}	
	public function getDescricao() {
		return $this->descricao;
	}
	
	
	
	
	
	
	public function setPreco($preco) {
		if (is_numeric($preco) AND $preco > 0) {
			$this->preco = $preco;
		}
	}
	public function getPreco() {
		return $this->preco;
	}
	
	
	
	
	
	
	public function setEstoque($estoque) {
		if (is_numeric($estoque) AND $estoque > 0) {
			$this->estoque = $estoque;
		}
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