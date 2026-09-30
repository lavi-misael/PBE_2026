<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.M</title>
</head>
<body>
    <h2 style="color:purple;font-family:Comic Sans MS,cursive;;">Inscrição em Evento</h2>
    <form action="logica.php" method="POST" style="background:#f3e5f5; padding: 15px; border-radius:8px; width:350px">
    <label for="nome">Nome Completo: </label>
			<input type="text" id="nome" name="nome", style="width:100%; margin-bottom:10px;color:purple;font-family:Arial;">
    <label for="tipo">Tipo de ingresso: </label>
    <br>
			<select name="ingresso" id="ingressso", style="width:100%; margin-bottom:10px; color:purole; font-family:Arial;">
				<option value="">Tipo de ingresso</option>
				<option value="Estudante">Estudante</option>
				<option value="Profissional">Profissional</option>
                <option value="Vip">Vip</option>
			</select>
			<br><br>
    <label for="data">Data do evento: </label>
    <br>
			<input type="date" id="data" name="data" style="color:purple;font-family:Arial;">
			<br><br>
     <label for="hora">Hora do evento: </label>
    <br>
			<input type="time" id="hora" name="hora" style="color:purple;font-family:Arial;">
			<br><br>
    
    <input style="background:purple; color:white; padding:5px" type="submit" value="Inscrever-se">
    </form>
</body>