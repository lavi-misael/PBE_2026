
<?php
//Lavinia misael e Manuela Carvalho
$nome = $_POST['nome'];
$email = $_POST['email'];
$DataRetirada = $_POST['data'];
$qtd = $_POST['qtd'];
$categoriaV= $_POST['categoria'];
$gps = $_POST['tipo'];
$infantil = $_POST['tipo'];
$Seguro = $_POST['tipo'];


function calcularSubtotal($diaria, $dias){
    $subtotal = $diaria * $dia;
}

function calcularPercentualDesconto($dias){
    if($dias <=6){
        $desconto="Sem descontos";
    }
    elseif ($dias<=7){
        $desconto = $dias * $qtd;
        $desconto - ($desconto * (10/100));
    }else{
        $desconto = $dias * $qtd;
        $desconto - ($desconto * (20/100));
    }
}
    
    if ($categoriaV == "economico") {
        $diaria = 100;
    } elseif ($categoria == "intermediario") {
        $diaria = 150;
    }else{
        $diaria= 250;
    }

   $adicionais= 0;
   if($gps == "sim"){
    $adicionais += 15;
   }

   if($infantil == "sim"){
    $adicionais += 80;
   }

   if($Seguro == "sim"){
    $adicionais += 80;
   }
   
   

   $subAdd = calcularSubtotal($adicionais, $diaria);

   $total = $subAdd + $subtotal;

   $valorDesconto =  calcularPercentualDesconto($desconto);

   $totalpagar = $total - $valorDesconto;

    require_once "view_relatorio.php";
?>