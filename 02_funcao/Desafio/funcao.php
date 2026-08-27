<?php

function calcularPedido($produto, $unitario, $qtd, $desconto = 0, $imposto = 0) {
 
    $subtotal = $unitario * $qtd;
    

    $valordesconto = $subtotal * ($desconto / 100);
    $totaldesconto = $subtotal - $valordesconto;
    $valorimposto = $totaldesconto * ($imposto / 100);
    
   
    $totalFinal = $totaldesconto + $valorimposto;

    return [
        "produto" => $produto,
        "subtotal" => $subtotal,
        "desconto" => $valordesconto,
        "imposto" =>  $valorimposto,
        "total" => $totalFinal
    ];
}

function calcularFrete($totalvalor){
     $frete = $totalvalor * (10/100);
     $TotalcomFrete = $frete + $totalvalor;

    return $TotalcomFrete;
}
   

?>

