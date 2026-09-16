<?php

$nome = $_POST['nome'];
$filme = $_POST['filme'];
$qtd = $_POST['qtd'];
$tipo = $_POST['tipo'];

if ($tipo == "inteira") {
    $valor_individual = 30;
} elseif ($tipo == "meia") {
    $valor_individual = 15;
}

$total = $valor_individual * $qtd;

if ($qtd > 10) {
    $total = $total - ($total * 0.10);
}

include "view_relatorio.php";

?>
