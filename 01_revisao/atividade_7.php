<?php
$dados = [
    "Ana"=> 8.5,
    "Bruno"=> 7.0,
    "Carlos"=> 9.2,
    "Diana" => 6.8,
    "Eduardo"=> 8.0
];

$soma = 0;

foreach ($dados as $nome => $nota){
    echo "O aluno $nome tirou nota $nota <br>";
    $soma = $soma + $nota;
}
$media = $soma/5;

echo "A média é $media";
?>