<?php 
class Titulo{
    private $data;
    
    public function __get($propriedade){
        if($propriedade == 'valor'){
            return $this->this->getValor();
        }else{
            return $this->$data[$propriedade];
        }
    }
    public function getValor(){
        $vecto = new DateTime($this->data['dt_vencimento']);
        $agora = new DateTime('now');
        if($vecto < $agora){
            $interval = $vecto->diff($agora);
            $days = $interval->days;
            return $this->data['valor'] + $this->data['multa'] + ($this->data['valor']*$this->data['juros']*$days);
        }
    }

    

}

$titulo = new Titulo;
$titulo->dt_vencimento = '2015-05-20';
$titulo->valor = 12345;
$titulo->juros = 0.1;
$titulo->multa = 2;
print 'O conteúdo do título é: ' .$titulo;