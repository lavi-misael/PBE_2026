<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora</title>
</head>
<body>
    <h1>Locadora de Veículos</h1>
    <h2>Dados do Cliente</h2>
    <form action="logica.php" methond="POST">
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
        <label for="">E-mail:</label>
        <br>    
        <input type="text" name="email">
        <br>

        <h2>Dados da Locação</h2>
        <label for="">Data de retirada:</label>
        <br>
        <input type="date" name="data">
        <br><br>
        <label for="">Quantidade de dias:</label>
        <br>
        <input type="number" name="qtd">
        <br><br>
        <label for="">Categoria do veículo:</label>
        <br>
        <select name="categoria"  required>
                <option value="economico">Econômico - R$100,00</option>
                <option value="intermediario">Intermediário - R$150,00</option>
                <option value="suv">SUV - R$250,00</option>

        </select>

        <br><br>
        <h2>Adicionais</h2>
        <label for="">Seguro total(R$40,00/dia):</label>
        <br>
        <input type="radio" id="sim" name="tipo" value="Sim" required>
        <label for="">Sim</label>
        <input type="radio" id="nao" name="tipo" value="Nao" >
        <label for="">Não</label>
        <br><br>
        <label for="">GPS(R$15,00/dia):</label>
        <br>
        <input type="radio" id="sim" name="tipo" value="Sim"required>
        <label for="">Sim</label>
        <input type="radio" id="nao" name="tipo" value="Não">
        <label for="">Não</label>
        <br><br>
        <label for="">Cadeirinha infantil(R$20,00/dia):</label>
        <br>
        <input type="radio" id="sim" name="tipo" value="Sim"required>
        <label for="">Sim</label>
        <input type="radio" id="nao" name="tipo" value="Nao">
        <label for="">Não</label>
        <br><br>
        <button type="submit">Gerar Contrato</button>
</body>
</html>