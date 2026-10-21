<?php
    class Carro{
        
        private $modelo;
        private $velocidade;

        public function __construct($modelo, $velocidade = 0){
          $this->modelo = $modelo;
          $this->velocidade = $velocidade; 
        }

        public function acelerar($aumenta){
            $this->velocidade += $aumenta;
        }

        public function frear($diminui){
            $this->velocidade -= $diminui;
        }

        public function verVelocidade(){
           return $this->velocidade;
        }
    }

    $carro1 = new Carro("Tesla", 100);
    $carro1->acelerar(10);
    $carro1->frear(30);
    echo $carro1->verVelocidade(). "Km";
?>