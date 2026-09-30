<?php
    $nomecliente = $_POST['nomecliente'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $quantidade = $_POST['quantidade'];
    $produto2 = $_POST['produto2'];
    $preco2 = $_POST['preco2'];
    $qtd2 = $_POST['qtd2'];
    $produto3 = $_POST['produto3'];
    $preco3 = $_POST['preco3'];
    $qtd3= $_POST['qtd3'];

    $produtos = [
        ['nome'=> $produto1, 'preco' => $preco1,'qtd' => $qtd1,  'subtotal' => $preco1 * $qtd1],
        ['nome'=> $produto2, 'preco' => $preco2,'qtd' => $qtd2,  'subtotal' => $preco2 * $qtd2],
        ['nome'=> $produto3, 'preco' => $preco3,'qtd' => $qtd3,  'subtotal' => $preco3 * $qtd3]
    ];

    $total = 0;
    foreach ($produtos as $produto){
        $total +=  $produto['subtotal'];
    }

    $desconto= 0;
    if($total > 500){
        $desconto = 10;
    }
    $valorDesconto = $total * ($desconto/100);
    $total = $total - $valorDesconto;

require_once "view_relatorio.php"
?>