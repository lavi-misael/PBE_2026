<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <h2>Dados do Cliente</h2>
    
    <form action="logica.php" method="POST">
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nomecliente">
        <br><br>

        <h2>Produto 1</h2>
        <br>

        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name="produto1">
        <br><br>
        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco1">
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd1">
        <br><br>

        <h2>Produto 2</h2>
        <br>

        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name="produto2">
        <br><br>
        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco2">
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd2">
        <br><br>

        <h2>Produto 3</h2>
        <br>

        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name="produto3">
        <br><br>
        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco3">
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="qtd3">
        <br><br>

        <button type="submit" style="background-color: blue; color:#FFF;">Finalizar Compra</button>
        <button type="reset" style="background-color: blue; color:#FFF;">Limpar</button>
        <br><br>
    </form>
</body>