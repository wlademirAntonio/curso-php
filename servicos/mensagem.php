<?php

session_start();

function setMensagemSucesso(string $mensagem) :void {

    $_SESSION['mensagem de sucesso'] = $mensagem;

}

function getMensagemSucesso() :?string {

    if (isset($_SESSION['mensagem de sucesso'])) {

        return $_SESSION['mensagem de sucesso'];

    }

    else {

        return null;

    }

}

function setMensagemErro(string $mensagem) :void {

    $_SESSION['mensagem de erro'] = $mensagem;

}

function getMensagemErro() :?string {

    if (isset($_SESSION['mensagem de erro'])) {

        return $_SESSION['mensagem de erro'];

    }

    else {

        return null;

    }

}

function removeMensagemSucesso() :void {

    if (isset($_SESSION['mensagem de sucesso']))

        unset($_SESSION['mensagem de sucesso']);

}

function removeMensagemErro() :void {

    if (isset($_SESSION['mensagem de erro']))

        unset($_SESSION['mensagem de erro']);

}
