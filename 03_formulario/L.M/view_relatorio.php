<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.M</title>
</head>
<body>
    <h1 style="color:purple;font-family:Comic Sans MS,cursive;;">Sua Inscrição foi feita!</h1>
    <ol style="background:#f3e5f5; padding: 15px; border-radius:8px; width:350px">
        <li style="background-color:#f3e5f5"><b>Nome: <?= $nome ?></b></li>
        <li style="background-color:#f3e5f5"><b>Tipo do Ingresso: <?= $ingresso ?></b></li>
        <li style="background-color:#f3e5f5"><b>Data: <?= $data?></b></li>
        <li style="background-color:#f3e5f5"><b>Hora: <?= $hora?></b></li>
    </ol>
</body>
</html>