<?php
    class Funcionario{

        private $nome;
        private $salario;

        public function __construct($nome, $salario = 1000){
            $this->nome = $nome;
            $this->salario = $salario;
        }
        
        public function aumentarSalario($percentual){
            

            if ($percentual >0 && $percentual <=10){
               $aumento = $this->salario*($percentual/100);
               $this->salario += $aumento;
            }else{
                "percentual de aumento incorreto, o valor precisa estar entre 0 e 10";
            }
        }

        public function exibirSalário(){
            echo "Funcionário: $this->nome - Salário: R$ $this->salario" . number_format($this->salario, 2,',','.');
        }
    }

    $func = new Funcionario("Lavinia", 4000);
    $func->aumentarSalario(30);
    $func->exibirSalário();
?>