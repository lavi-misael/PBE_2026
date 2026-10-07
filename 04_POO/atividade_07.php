<?php
    class ContaBancaria{
        
        public $titular;
        public $saldo; 

        public function __construct($nomeTitular, $nomeSaldo){
            $this->titular = $nomeTitular;
            $this->saldo = $nomeSaldo;
        }

        public function depositar($valor){
            $this->saldo += $valor;
        }

        public function sacar($valor){
            $this->saldo -= $valor;
        }

        public function exibirSaldo(){
           echo "Titular: $this->titular Saldo: $this->saldo <br>";
        }
    }

    $conta1 = new ContaBancaria("Lavinia", 0);
    $conta1->depositar(800);
    $conta1->sacar(50);
    $conta1->exibirSaldo();
?>