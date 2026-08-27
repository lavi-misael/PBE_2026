 <?php
    require_once "funcao.php";
    $resultado = calcularPedido("Teclado", 200, 2, 10, 20);

    echo "Produto:  " . $resultado["produto"] . "<br>";
    echo "Subtotal: " . $resultado["subtotal"] . "<br>";
    echo "Desconto: " . $resultado["desconto"] . "<br>";
    echo "Imposto: " . $resultado["imposto"] . "<br>";
    echo "Total Final:  " . $resultado["total"] . "<br>";

    $totalcomfrete = calcularFrete($resultado["total"]);
    echo "Total com Frete: " . $totalcomfrete;

 ?>