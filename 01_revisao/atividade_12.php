<?php
    $idade = [15, 14, 13, 12, 11, 10, 16, 17];
    $maior = 0; 
    $soma = 0;

    foreach ($idade as $idades){
         $soma = $soma +$idades

         if($idades > 18){
            $maior = $maior +1;
         }
        
    }
    $media = $soma/8

    echo "A média é =" . $media

    echo "A maior idade é =" . $maior
?>