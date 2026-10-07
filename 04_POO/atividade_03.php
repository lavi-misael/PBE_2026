<?php
    class Aula{

     public $disciplina;
     public $professor;
     public $duracao;
     public $n_sala;
     public $bloco;

     function exibirInformações(){
        echo "Diciplina: $this->disciplina <br>";
        echo "Professor: $this->professor <br>";
        echo "Duração: $this->duracao <br>";
        echo "Numero da sala: $this->n_sala <br>";
        echo "Bloco: $this->bloco <br>";
    }
    
    function trocarProfessor($nome_professor){
        $this->professor = $nome_professor;
        echo "O novo professor é $this->professor <br>";
    }
    function alterarLocal($novo_bloco, $novo_numero_sala){
    $this->n_sala = $novo_numero_sala;
    $this->bloco = $novo_bloco;

    echo "O novo local é $this->bloco $this->n_sala <br>";
    }
}
    $aula1 = new Aula();

    $aula1->disciplina="Matemática";
    $aula1->professor="Ana Paula";
    $aula1->duracao= 50 ;
    $aula1->n_sala= 9;
    $aula1->bloco= "Anexo";

    $aula1->exibirInformações();
    echo "<hr>";
    $aula1->trocarProfessor("Marcia");
    echo "<hr>";
    $aula1->alterarLocal("B", 5);
    echo "<hr>";
    $aula1->exibirInformações();

    $aula2 = new Aula();

    $aula2->disciplina="Portugues";
    $aula2->professor="Michele";
    $aula2->duracao= 2;
    $aula2->n_sala= 10;
    $aula2->bloco= "A";

    $aula2->exibirInformações();
    echo "<hr>";
    $aula2->trocarProfessor("Guilherme");
    echo "<hr>";
    $aula2->alterarLocal("C", 9);
    echo "<hr>";
    $aula2->exibirInformações();
     
?>