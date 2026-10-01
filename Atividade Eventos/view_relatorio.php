<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>ONVIBE - Relatório</title>
</head>

<body style="background-color: #f8f0ff; text-align: center;">

    <br>

    <img src="logo.png" width="250">

    <h1 style="color: #8A168F;">Compra realizada!</h1>

    <p style="color: #6A0DAD;">Confira os dados da sua compra: </p>

    <h2 style="color: #8A168F;">Relatório da Compra</h2>

    <p style="color: #5E0B8A;"><b>Nome:</b><?= $nome; ?></p>

    <p style="color: #5E0B8A;"><b>Evento:</b><?= $eventoEscolhido; ?></p>

    <p style="color: #5E0B8A;"><b>Tipo de ingresso:</b><?= $tipoIngresso; ?></p>

    <p style="color: #5E0B8A;"><b>Quantidade:</b><?= $quantidade; ?></p>

    <p style="color: #5E0B8A;"><b>Forma de pagamento:</b><?= $pagamento; ?></p>
    <br>

    <div style="display: flex; justify-content: center; align-items: center;">

    <table border="1" style="background-color: #F8F0FF; color: #5E0B8A; text-align: center;">
        <tr>
            <th style="padding: 10px;">Valor por Ingresso</th>
            <th style="padding: 10px;">Total</th>
            <th style="padding: 10px;">Desconto</th>
        </tr>
        <tr>
            <td style="padding: 10px;">R$<?= $preco?></td>
            <td style="padding: 10px;">R$<?= $total?></td>
            <td style="padding: 10px;">R$<?= $desconto?></td>
        </tr>
    </table>

</div>



    <h2 style="color: #8A168F;">Valor final:R$ <?= number_format($valorFinal, 2, ',', '.'); ?></h2>
    <br>

    <p style="color: #6A0DAD;"> 🎉 Obrigado por escolher a ONVIBE EVENTOS! 🎉</p>

</body>

</html>
