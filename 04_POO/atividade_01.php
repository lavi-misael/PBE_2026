<?php
    class Celular {

        public $marca;
        public $modelo;
        public $cor;
        public $bateria;
        public $ligado; 

        function ligar(){
            $this->ligado = true;
            echo "O celular foi ligado";
        }

        function desligar(){
            $this->ligado = false;
            echo "O celular foi desligado <br>";
        }

        function usar($consumo){
            $this->bateria = $this->bateria - $consumo;
            if($this->bateria <0){
                $this->bateria = 0;
            }
            echo "A bateria foi consumida em $consumo <br>";
            echo "Sobrando um total de $this->bateria <br>";
        }

         function carregar($carga){
            $this->bateria = $this->bateria + $carga;
            if($this->bateria <100){
                $this->bateria = 100;
            }
            echo "A bateria foi carregada em $carga <br>";
            echo "Aumentando a bateria para $this->bateria <br>";
        }
    }

    $celular1 = new Celular();

    $celular1->marca = "Iphone";
    $celular1->modelo = "17 proMax";
    $celular1->cor = "Lilás";
    $celular1->bateria = 60;
    $celular1->ligado = true;

    echo "Marca: " . $celular1->marca . "<br>";
    echo "Modelo: " . $celular1->modelo . "<br>";
    echo "Cor: " . $celular1->cor . "<br>";
    echo "Bateria: " . $celular1->bateria . "<br>";
    echo "Ligado: " . $celular1->ligado . "<br>";

    $celular1->ligar();
    $celular1->usar(50);
    $celular1->carregar(100); 
    $celular1->desligar(); 

    $celular2 = new Celular();

    $celular2->marca = "Motorola";
    $celular2->modelo = "g9 plus";
    $celular2->cor = "Azul marinho";
    $celular2->bateria = 40;
    $celular2->ligado = true;

    echo "Marca: " . $celular2->marca . "<br>";
    echo "Modelo: " . $celular2->modelo . "<br>";
    echo "Cor: " . $celular2->cor . "<br>";
    echo "Bateria: " . $celular2->bateria . "<br>";
    echo "Ligado: " . $celular2->ligado . "<br>";

    $celular2->ligar();
    $celular2->usar(70);
    $celular2->carregar(23); 
    $celular2->desligar(); 


?>