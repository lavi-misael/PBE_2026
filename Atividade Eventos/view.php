<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>ONVIBE EVENTOS</title>

</head>

<body style="background-color: #f8f0ff; text-align: center;">

    <br>

    <img src="logo.png" width="250">

    <h1 style="color: #8A168F;">
        ONVIBE EVENTOS
    </h1>

    <p style="color: #6A0DAD;">
        Viva grandes momentos!
    </p>
    <h2 style="color: #8A168F;">🎟️ Compra de Ingressos 🎟️ </h2>

    <br>

    <form action="logica.php" method="POST">
        <label style="color: #5E0B8A;" for="">Nome:</label>
        <br>
        <input type="text" name="nome">
        <br><br><br>


        <label style="color: #5E0B8A;" for="">Evento:</label>
        <br>
        <select name="evento">

            <option>Selecione um evento</option>
            <option>Festival ONVIBE</option>
            <option>ONVIBE Music</option>
            <option>ONVIBE Night</option>

        </select>
        <br><br><br>


        <label style="color: #5E0B8A;" for="">Tipo de ingresso: </label>
        <br>
        <select name="ingresso">

            <option>Selecione</option>
            <option>Inteira</option>
            <option>Meia</option>
            <option>VIP</option>

        </select>
        <br><br><br>
        <label style="color: #5E0B8A;" for=""> Quantidade: </label>
        <br>
        <input type="number" min="1"  name="quantidade">
        <br><br><br>

        <label style="color: #5E0B8A;" for="">Forma de pagamento:</label>
        <br>
        <select name="pagamento">

            <option>Selecione</option>
            <option>PIX</option>
            <option>Cartão</option>
            <option>Dinheiro</option>

        </select>
        <br><br><br>
        <input type="submit" value="Comprar ingresso" style="background-color: #8A168F; color: white;">

    </form>

    <br><br>
    <hr>
    <p style="color: #8A168F;">
        ONVIBE EVENTOS
    </p>

    <p style="color: #6A0DAD;">
        Música • Shows • Experiências
    </p>

</body>

</html>