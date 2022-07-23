<?php

function validaNome(string $nome) :bool {

    if (empty($nome)) {

        setMensagemErro(mensagem: 'O nome não pode ser vazio');
        return false;
    
    }
    
    else if (strlen($nome) < 3) {
    
        setMensagemErro(mensagem: 'O nome deve ter mais de 3 caracteres');
        return false;
    
    }
    
    else if (strlen($nome) > 40) {
    
        setMensagemErro(mensagem: 'O nome é muito extenso');
        return false;
    
    }

    else {

        return true;

    }

}

function validaIdade(string $idade) :bool {

    if (!is_numeric($idade)) {

        setMensagemErro(mensagem: 'Idade deve ser um número');
        return false;

    }

    else {

        return true;

    }

}

