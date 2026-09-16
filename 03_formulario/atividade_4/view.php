<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio_01</title>
</head>
<body>
    <h1>Calcular Média do Aluno</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do aluno:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
        <label for="">Nota 1:</label>
        <br>
        <input type="number" name="nota1">
        <br><br>
         <label for="">Nota 2:</label>
        <br>
        <input type="number" name="nota2">
        <br><br>
         <label for="">Nota 3:</label>
        <br>
        <input type="number" name="nota3">
        <br><br>
        <button type="submit">Calcular Salário</button>
        <button type="reset">Limpar</button>
        <br><br>
    </form>
</body>