<?php
$funcionarios = [
    ["nome" => "Carlos", "cargo" => "Programador", "salario" => 500],
    ["nome" => "Ana", "cargo" => "Designer", "salario" => 3500],
    ["nome" => "Pedro", "cargo" => "Analista", "salario" => 3000],
    ["nome" => "Marina", "cargo" => "Gerente", "salario" => 1500]
];

    $totalFuncionarios = count($funcionarios);
    $somaSalarios = 0;

echo "=== Informações dos Funcionários ===<br>";

foreach ($funcionarios as $funcionario) {
    echo "Nome: " . $funcionario['nome'] . "  <br>";
    echo "Cargo: " . $funcionario['cargo'] . "  <br>";
    echo "Salário:" . number_format($funcionario['salario'], 2, ',', '.');
    
    $somaSalarios += $funcionario['salario'];
}

echo "-----------------------------------<br>";

echo "Total de funcionários cadastrados: " . $totalFuncionarios;

echo "Soma total dos salários: R$ " . number_format($somaSalarios, 2, ',', '.');
?>


