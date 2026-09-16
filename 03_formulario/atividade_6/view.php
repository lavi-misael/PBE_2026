<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <h1>Compra de Ingressos</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do cliente:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
        <label for="">Filme:</label>
        <br>
        <input type="text" name="filme">
        <br><br>
         <label for="">Quantidade de ingressos:</label>
        <br>
        <input type="number" name="qtd">
        <br><br>

        <p>Selecione o tipo de ingresso:</p>

        <input type="radio" id="inteira" name="tipo" value="Inteira" checked>
        <label for="inteira">Inteira</label>
        <br><br>

        <input type="radio" id="meia" name="tipo" value="Meia">
        <label for="meia">Meia-entrada</label>
        <br><br>

        <button type="submit">Comprar ingressos</button>
        <button type="reset">Limpar</button>
        <br><br>
    </form>
</body>