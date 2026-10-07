<?php
    class Livro{

        public $titulo;
        public $autor;
        public $paginas;
        public $publicacao;

        public function __construct($titulo, $autor, $paginas, $publicacao = "Desconehecido") {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->paginas = $paginas;
            $this->publicacao = $publicacao; 
        }

        public function exibirDetalhes(){
            echo "Titulo: $this->titulo, Autor: $this->autor, Páginas: $this->paginas, Publicação: $this->publicacao";
            echo "<hr>";
        }
    }

    $livro = new Livro("Programação", "Lavinia", 200, 2026);
    $livro->exibirDetalhes();

    $livro2= new Livro("HTML", "Lavinia", 10);
    $livro2->exibirDetalhes();
?>