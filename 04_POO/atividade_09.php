<?php
    class Produto{
         
        private $nome;
        private $preco;
        private $estoque;

        public function __construct($nome, $preco, $estoque){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->estoque = $estoque;
        }

        public function vender($quantidade){
            if ($quantidade <= $this->estoque){
                $this->estoque -= $quantidade;
                echo "A venda de $quantidade unidade(s) de $this->nome foi realizada! <br> ";
                
            }else{ 
                echo "Estoque insuficiente! <br>";
            }
        }

        public function reajustarPreco($percentual){
            $this->preco += $percentual;
        }

        public function exibirInfo(){
            echo "$this->nome -> R$ $this->preco . number_format($this->salario, 2,',','.') | Estoque: $this->estoque";
        }
    }

    $produto = new Produto("Computador", 500, 5);
    $produto->vender(2);
    $produto->reajustarPreco(10);
    $produto->exibirInfo();

?>