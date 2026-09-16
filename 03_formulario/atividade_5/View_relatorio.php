<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 5</title>
</head>
<body>
    <h1>Resultado do Aluno</h1>

    <p><b>Nome:</b><?=$nome ?></p>
    <p><b>Peso:</b><?=$peso ?></p>
    <p><b>Altura:</b><?=$altura ?></p>
    <p><b>Resultado IMC:</b><?=$imc ?></p>

    <?php
        if($imc >= 30 ):
        ?><h3>Obesidade</h3>
    <?php
        elseif($imc >=25 ):?>
            <h3>Sobrepeso</h3>
    <?php
        elseif($imc <=18.5 ):?>
            <h3>Abaixo do peso</h3>
    <?php
        else:?>
            <h3>peso normal</h3>
    <?php endif ?>
    
</body>
</html>