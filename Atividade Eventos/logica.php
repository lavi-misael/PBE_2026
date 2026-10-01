<?php

$nome = $_POST["nome"];
$eventoEscolhido = $_POST["evento"];
$tipoIngresso = $_POST["ingresso"];
$quantidade = $_POST["quantidade"];
$pagamento = $_POST["pagamento"];


$eventos = [
    "Festival ONVIBE" => 100,
    "ONVIBE Music" => 80,
    "ONVIBE Night" => 60
];


function calcularTotal($preco, $quantidade)
{
    return $preco * $quantidade;
}


function calcularDesconto($total, $pagamento)
{
    if ($pagamento == "PIX") {
        return $total * 0.10;
    } else {
        return 0;
    }
}


$preco = 0;

foreach ($eventos as $evento => $valor) {

    if ($evento == $eventoEscolhido) {
        $preco = $valor;
    }

}


if ($tipoIngresso == "Meia") {

    $preco = $preco / 2;

} elseif ($tipoIngresso == "VIP") {

    $preco = $preco + 50;

} else {

    $preco = $preco;

}


$total = calcularTotal($preco, $quantidade);

$desconto = calcularDesconto($total, $pagamento);

$valorFinal = $total - $desconto;


require_once "view_relatorio.php"

?>