<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio_01</title>
</head>
<body>
    <h1>Calculadora de Sálario Líquido</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do funcionário:</label>
        <br>
        <input type="text" name="nome_funcionario">
        <br><br>
        <label for="">Salário Bruto:</label>
        <br>
        <input type="number" name="salario_bruto">
        <br><br>
         <label for="">Horas Extras:</label>
        <br>
        <input type="number" name="horas_extras">
        <br><br>
         <label for="">Benefícios:</label>
        <br>
        <input type="number" name="beneficios">
        <br><br>
         <label for="">Descontos:</label>
        <br>
        <input type="number" name="descontos">
        <br><br>
        <button type="submit">Calcular Salário</button>
        <button type="reset">Limpar</button>
        <br><br>
    </form>
</body>
</html>



