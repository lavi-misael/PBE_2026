<?php
    function calcularPrecoFinal($preco, $qtd, $desconto){
        $total = $preco * $qtd;
        return $total - ($total * ($desconto/100));
    }
     
    $preco = 5;
    $qtd = 3;
    $desconto = 10;

    $resultado = calcularPrecoFinal($preco, $qtd, $desconto);
    echo "Preço: $preco";
    echo "<br>";
    echo "Quantidade: $qtd";
    echo "<br>";
    echo "Desconto: $desconto";
    echo "<br>";
    echo "Preço Final: R$ $resultado";
?>