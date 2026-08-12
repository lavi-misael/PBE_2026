<?php
    $idade = 18; 
    $acompanhado = true;

    if($idade >= 18){
        echo "Você pode entrar sozinha";
    }
    elseif($idade >= 14 && $idade <=17 && $acompanhado == true ){
        echo "Entrada liberada com sucesso";
    }
    else{
        echo "Menores que 14 não pode entrar, mesmo acompanhado";
    }
?>