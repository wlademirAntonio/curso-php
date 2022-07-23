<?php

include 'servicos/mensagem.php';
include 'servicos/validacao.php';
include 'servicos/categoria.php';

$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];

defineCategoria($nome, $idade);

header('location: index.php');