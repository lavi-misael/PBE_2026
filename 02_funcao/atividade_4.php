<?php
    function analisarNotas($nota1, $nota2, $nota3){
        $media = ($nota1 + $nota2 + $nota) /3;
        $notas = [$nota1, $nota2, $nota3];
        $maior = $notas[0];
        $menor = $notas [0];

        foreach ($notas as $nota){
            if($nota > $maior){
                $maior = $nota; 
            }
            else{
                $menor = $nota;
            }
        }
    }

    if ($media >= 7){
        $situacao = "Aprovado";
    }
    elseif ($media >= 5 && $media < 7){
        $situacao = "Recuperação";
    }
    else{
        $situacao = "Reprovado";
    }

    return [
        "Média" => $media,
        "Maior nota" => $maior, 
        "Menor nota" => $menor,
        "Situação" => $situcao
    ];
    $nota1 = 7;
    $nota2 = 5;
    $nota3 = 8;

    $resultado = analisarNotas ($nota1, $nota2, $nota3);
    echo "A média do aluno foi: " . $resultado["Média"] . "<br>";
    echo "A maior nota do aluno foi: " . $resultado["Maior nota"] . "<br>";
    echo "A menor nota do aluno foi: " . $resultado["Menor nota"] . "<br>";
    echo "A situação do aluno foi: " . $resultado[ "Situação"] . "<br>";

?>