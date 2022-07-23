<?php

session_start();

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
    $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
    if (!empty($mensagemDeErro)) {
        echo $mensagemDeErro;
    }
    ?>

    <form action="script.php" method="POST">
        <p>Seu nome: <input type="text" name="nome"> </p>
        <p>Sua idade: <input type="text" name="idade"> </p>
        <p> <input type="submit"> </p>
    </form>

    <?php
    $mensagemDeSucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
    if (!empty($mensagemDeSucesso)) {
        echo $mensagemDeSucesso;
    }
    ?>

</body>

</html>