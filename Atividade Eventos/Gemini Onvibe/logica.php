<?php
/**
 * ============================================================================
 * ONVIBE EVENTOS - Lógica de Processamento da Compra
 * ============================================================================
 */

// 1. RECEBIMENTO E SANITIZAÇÃO DOS DADOS
$nome            = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Cliente';
$eventoEscolhido = filter_input(INPUT_POST, 'evento', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$tipoIngresso    = filter_input(INPUT_POST, 'ingresso', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$quantidade      = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);
$pagamento       = filter_input(INPUT_POST, 'pagamento', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';

if (!$quantidade || $quantidade < 1) {
    $quantidade = 1;
}

// 2. TABELA DE PREÇOS BASE (Sincronizada com o index.php)
$eventos = [
    "Festival ONVIBE" => 120.00,
    "ONVIBE Music"    => 90.00,
    "ONVIBE Night"    => 150.00
];

// 3. FUNÇÕES DE CÁLCULO
function calcularTotal($preco, $quantidade)
{
    return $preco * $quantidade;
}

function calcularDesconto($total, $pagamento)
{
    if ($pagamento === "PIX") {
        return $total * 0.10; // 10% de desconto no PIX
    }
    return 0.00;
}

// 4. LÓGICA DE PREÇOS POR TIPO DE INGRESSO
$precoBase = $eventos[$eventoEscolhido] ?? 0.00;

if ($tipoIngresso === "Meia") {
    $preco = $precoBase * 0.5; // 50% de desconto
} elseif ($tipoIngresso === "VIP") {
    $preco = $precoBase * 1.5; // 50% de acréscimo
} else {
    $preco = $precoBase; // Inteira
}

// 5. CÁLCULO DOS VALORES FINAIS
$total      = calcularTotal($preco, $quantidade);
$desconto   = calcularDesconto($total, $pagamento);
$valorFinal = $total - $desconto;

// 6. CARREGA A VIEW DO RELATÓRIO
require_once "view_relatorio.php";