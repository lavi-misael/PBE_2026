<?php
    class Pedido{
        public $numero;
        public $cliente;
        public $valor;
        public $status;

        function adicionar($valor){
            if($this->status == "Aguardando"){
                $this->valor = $this->valor + $valor;
            }else{
                echo "Não podemos adicionar nada ao pedido.
                    O pedido está $this->status <br>";    
            }
        }

        function cancelar(){
            $this->status = "Cancelado";
            echo "Status alterado para $this->status <br>";
        }

        function finalizar(){
            $this->status = "Finalizado";
            echo "Status alterado para $this->status <br>";
        }

        function exibirResumo(){
            echo "Número $this->numero <br>";
            echo "Cliente $this->cliente <br>"; 
            echo "Valor R$ $this->valor <br>";
            echo "Satus R$ $this->status <br>";
        }
    }

    //criando pedido1
    $pedido1 = new Pedido();

        $pedido1->numero = 1000;
        $pedido1->cliente = "Lavinia";
        $pedido1->valor = 0;
        $pedido1->status = "Aguardando";

        $pedido1->exibirResumo();
        echo "<hr>";
        $pedido1->adicionar(34);
        $pedido1->adicionar(20);
        $pedido1->exibirResumo();
        echo "<hr>";
        $pedido1->finalizar();
        $pedido1->exibirResumo();


    //criando pedido2
    $pedido2 = new Pedido();

        $pedido2->numero = 1000;
        $pedido2->cliente = "Vitoria";
        $pedido2->valor = 0;
        $pedido2->status = "Aguardando";

        $pedido2->exibirResumo();
        echo "<hr>";
        $pedido2->adicionar(78);
        $pedido2->adicionar(9);
        $pedido2->exibirResumo();
        echo "<hr>";
        $pedido2->finalizar();
        $pedido2->exibirResumo();

?>