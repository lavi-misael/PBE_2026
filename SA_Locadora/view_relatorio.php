<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora</title>
</head>
<body>
    <h1>Contrato de Locação</h1>
    <p><strong>Cliente:</strong> <?= $nome ?></p>
    <p><strong>E-mail:</strong> <?= $email ?></p>
    <p><strong>Retirada:</strong> <?= $DataRetirada ?></p>
    <p><strong>Devolução:</strong> </p>
   <br><br>

<h2>Adicionais</h2>
    <p><strong>Seguro Total:</strong> <?= $tipo ?></p>
    <p><strong>GPS:</strong> <?= $tipo ?></p>
    <p><strong>Cadeirinha Infantil:</strong> <?= $tipo ?></p>

    <table border="1">
        <tr>
            <th style="padding: 10px;">Item</th>
            <th style="padding: 10px;">Diária</th>
            <th style="padding: 10px;">Dias</th>
            <th style="padding: 10px;">Subtotal</th>
        </tr>
        <tr>
            <td style="padding: 10px;"><?= $categoriaV?></td>
            <td style="padding: 10px;">R$<?= $categoriaV?></td>
            <td style="padding: 10px;">R$<?= $qtd?></td>
            <td style="padding: 10px;">R$<?= $subAdd?></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Adicionaistd>
            <td style="padding: 10px;">R$<?= $adcionais?></td>
            <td style="padding: 10px;">R$<?= $qtd?></td>
            <td style="padding: 10px;">R$<?= $total?></td>
        </tr>

        <p><strong>Total:</strong> <?= $totalpagar ?></p>
        <p><strong>Desconto:</strong><?= $valorDesconto ?></p>

        <h1>Total a pagar:<?= R$valorDesconto?></h1>

</body>
</html>