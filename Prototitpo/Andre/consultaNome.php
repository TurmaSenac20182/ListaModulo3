<?php

require 'funcoes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['Nnome'];

    if(consutaNome($nome)) {
        echo 'Nome encontrado';
        die;
    } else {
        echo 'Nome não encontrado';
        die;
    }
}