<?php

include 'servicos/mensagem.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inscrição</title>
</head>

<body>

    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <?php
    $mensagemDeSucesso = getMensagemSucesso();
    if (!empty($mensagemDeSucesso)) {
        echo $mensagemDeSucesso;
    }
    $mensagemDeErro = getMensagemErro();
    if (!empty($mensagemDeErro)) {
        echo $mensagemDeErro;
    }
    ?>

    <form action="script.php" method="POST">
        <p>Seu nome: <input type="text" name="nome"> </p>
        <p>Sua idade: <input type="text" name="idade"> </p>
        <p> <input type="submit"> </p>
    </form>

</body>

</html>