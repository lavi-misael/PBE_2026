<?php
    class Conta{

        public $titular;
        public $numero;
        public $saldo;
        public $tipo;

        function depositar($valor){
            $this->saldo = $this->saldo + $valor;
            echo "O saldo aumentou para $this->saldo  <br>";
        }
         function sacar($valor){
            $this->saldo = $this->saldo - $valor;
            echo "O saldo resultou em $this->saldo  <br>";
        }
        function consultarSaldo(){
            echo "O valor do saldo é de $this->saldo <br>";
        }
    }

     $contaBancaria1 = new Conta();

    $contaBancaria1->titular = "Lavinia";
    $contaBancaria1->numero = 123;
    $contaBancaria1->saldo= 20000;
    $contaBancaria1->tipo = "Conta Corrente";
    

    echo "Titular: " . $contaBancaria1->titular . "<br>";
    echo "Numero da conta: " . $contaBancaria1->numero . "<br>";
    echo "Saldo: " . $contaBancaria1->saldo . "<br>";
    echo "Tipo da conta: " .$contaBancaria1->tipo . "<br>";

    $contaBancaria1->depositar(500);
    $contaBancaria1->sacar(100);
    $contaBancaria1->consultarSaldo(); 
   

       $contaBancaria1 = new Conta();

    $contaBancaria1->titular = "NIcoli";
    $contaBancaria1->numero = 123;
    $contaBancaria1->saldo= 60000;
    $contaBancaria1->tipo = "Conta Conjunta";
    

    echo "Titular: " . $contaBancaria1->titular . "<br>";
    echo "Numero da conta: " . $contaBancaria1->numero . "<br>";
    echo "Saldo: " . $contaBancaria1->saldo . "<br>";
    echo "Tipo da conta: " .$contaBancaria1->tipo . "<br>";

    $contaBancaria1->depositar(800);
    $contaBancaria1->sacar(1000);
    $contaBancaria1->consultarSaldo(); 
?>