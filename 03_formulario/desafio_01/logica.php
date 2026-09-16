<?php
$nome_funcionario = $_POST['nome_funcionario'];
$salario_bruto = $_POST['salario_bruto'];
$horas_extras = $_POST['horas_extras'];
$beneficios= $_POST['beneficios'];
$desconto = $_POST['descontos'];

echo "Nome: " . $nome_funcionario . "<br>";
echo "Salário bruto:" . $salario_bruto . "<br>";
echo "Horas extras:" . $horas_extras . "<br>";
echo "Benefícios:" . $beneficios . "<br>";
echo "Desconto:" . $desconto . "<br>";


$valor_horas = $salario_bruto / 160 ;
$valor_horas_extras = $valor_horas * 1.5 ;
// valor que ganhei por fazer horas extras
$total_horas_extras = $horas_extras * $valor_horas_extras; 

// o valor total bruto sem nenhum desconto
$salario_bruto_sem_desconto = $salario_bruto + $total_horas_extras + $beneficios;

    if ($salario_bruto_sem_desconto >= 5000){
        $imposto = $salario_bruto_sem_desconto * 10/100;
    }elseif($salario_bruto_sem_desconto >= 3000){
        $imposto = $salario_bruto_sem_desconto * 5/100;
    }else{
        $imposto = 0;
    }

    $salario_liquido = $salario_bruto_sem_desconto - $imposto;

    if($salario_liquido > 4000){
        $remunerado = "Bem remunerado";
    }else{
        $remunerado = "Médio";
    }

?>
