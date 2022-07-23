<?php

session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];

if (empty($nome)) {

    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio';
    header('location: index.php');

}

elseif (strlen($nome) < 3) {

    $_SESSION['mensagem de erro'] = 'O nome deve ter mais de 3 caracteres';
    header('location: index.php');

}

elseif (strlen($nome) > 40) {

    $_SESSION['mensagem de erro'] = 'O nome é muito extenso';
    header('location: index.php');

}

elseif (!is_numeric($idade)) {

    $_SESSION['mensagem de erro'] = 'Idade deve ser um número';
    header('location: index.php');

}

else {

    $_SESSION['mensagem de erro'] = '';
    header('location: index.php');

}

if ($idade >= 6 && $idade <= 12) {

    for ($i = 0; $i <= count($categorias); $i++) {

        if ($categorias[$i] == 'Infantil') {

            $_SESSION['mensagem de sucesso'] = 'O competidor '.$nome.' pertence a categoria '.$categorias[$i];
            header('location: index.php');

        }

    }

}

elseif ($idade >= 13 && $idade <= 18) {

    for ($i = 0; $i <= count($categorias); $i++) {

        if ($categorias[$i] == 'Adolescente') {

            $_SESSION['mensagem de sucesso'] = 'O competidor '.$nome.' pertence a categoria '.$categorias[$i];
            header('location: index.php');

        }

    }

}

elseif ($idade >= 19 && $idade <= 60) {

    for ($i = 0; $i <= count($categorias); $i++) {

        if ($categorias[$i] == 'Adulto') {

            $_SESSION['mensagem de sucesso'] = 'O competidor '.$nome.' pertence a categoria '.$categorias[$i];
            header('location: index.php');

        }

    }

}

elseif ($idade >= 61) {

    for ($i = 0; $i <= count($categorias); $i++) {

        if ($categorias[$i] == 'Idoso') {

            $_SESSION['mensagem de sucesso'] = 'O competidor '.$nome.' pertence a categoria '.$categorias[$i];
            header('location: index.php');

        }

    }

}

else {

    $_SESSION['mensagem de sucesso'] = '';
    header('location: index.php');

}
