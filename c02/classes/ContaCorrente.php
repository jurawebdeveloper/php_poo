<?php
class ContaCorrente extends Conta {
    protected $limite;
    
    public function __construct($agencia, $conta, $saldo, $limite) {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    
}?>