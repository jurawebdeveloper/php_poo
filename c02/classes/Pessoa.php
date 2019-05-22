<?php
class Pessoa {
    private $nome;
    private $endereco;
    private $nascimento;

    public function __construct($nome, $endereco) {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function setNascimento($nascimento) {
        $partes = explode('-', $nascimento);
        if(count($partes)==3) {
            if(checkdate($partes[1], $partes[2], $partes[0])) {
                $this->nascimento = $nascimento;
                    return true;
            }
            return false;
        }
        return false;
    }
}
?>