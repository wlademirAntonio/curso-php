<?php

function defineCategoria(string $nome, string $idade) :?string {
    
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    if (validaNome($nome) && validaIdade($idade)) {

        removeMensagemErro();

        if ($idade >= 6 && $idade <= 12) {

            for ($i = 0; $i <= count($categorias); $i++) {
        
                if ($categorias[$i] == 'Infantil') {
        
                    setMensagemSucesso(mensagem: 'O competidor '.$nome.' pertence a categoria '.$categorias[$i]);
                    return null;
                }
        
            }
        
        }
        
        elseif ($idade >= 13 && $idade <= 18) {
        
            for ($i = 0; $i <= count($categorias); $i++) {
        
                if ($categorias[$i] == 'Adolescente') {
        
                    setMensagemSucesso(mensagem: 'O competidor '.$nome.' pertence a categoria '.$categorias[$i]);
                    return null;
                }
        
            }
        
        }
        
        elseif ($idade >= 19 && $idade <= 60) {
        
            for ($i = 0; $i <= count($categorias); $i++) {
        
                if ($categorias[$i] == 'Adulto') {
        
                    setMensagemSucesso(mensagem: 'O competidor '.$nome.' pertence a categoria '.$categorias[$i]);
                    return null;
                }
        
            }
        
        }
        
        elseif ($idade >= 61) {
        
            for ($i = 0; $i <= count($categorias); $i++) {
        
                if ($categorias[$i] == 'Idoso') {
        
                    setMensagemSucesso(mensagem: 'O competidor '.$nome.' pertence a categoria '.$categorias[$i]);
                    return null;
                }
        
            }
        
        }

    }

    else {

        removeMensagemSucesso();
        return getMensagemErro();

    }

}
