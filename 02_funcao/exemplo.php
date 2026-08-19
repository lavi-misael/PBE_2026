<?php
    $frequencia1 = 10;
    $nota = 6;
    $frequencia2 = 90; 
    $nota = 9;
    $frequencia3 = 70;
    $nota = 3;

    echo "Lavinia - ";
    if($frequencia1 <= 75){
        echo "Reprovado por falta";
    }
    elseif($nota >= 9 ){
        echo "Aprovado";
    }
    elseif($nota >= 5 ){
        echo "Recuperação";
    }
    else{
        echo "Reprovado";
    }

    echo "<br>";

     echo "Mafer- ";
    if($frequencia2 <= 75){
        echo "Reprovado por falta";
    }
    elseif($nota >= 9 ){
        echo "Aprovado";
    }
    elseif($nota >= 5 ){
        echo "Recuperação";
    }
    else{
        echo "Reprovado";
    }

    echo "<br>";

     echo "Nicoli - ";
    if($frequencia3 <= 75){
        echo "Reprovado por falta";
    }
    elseif($nota >= 9 ){
        echo "Aprovado";
    }
    elseif($nota >= 5 ){
        echo "Recuperação";
    }
    else{
        echo "Reprovado";
    }

    echo "<br>";
?>
 