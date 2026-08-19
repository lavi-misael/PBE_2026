<?php 
    function verificarMaioridade($idade){
        if($idade <= 18 ){
            return "Maior de idade";
        }
        else{
            "Menor de idade";
        }
    }
    $idade1 = 15
    $idade2 = 20
    $idade3 = 28

    $resultado = verificarMaioridade($idade1);
    return "A idade $idade1 é $resultado";
    
    $resultado = verificarMaioridade($idade2);
    return "A idade $idade2 é $resultado";
    
    $resultado = verificarMaioridade($idade3);
    return "A idade $idade3 é $resultado";
?>