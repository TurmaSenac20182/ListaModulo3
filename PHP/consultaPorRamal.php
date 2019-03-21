<?php

require 'funcoes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ramal = $_POST['ramal'];

    if(consutaRamal($ramal)) {
        echo 'Ramal encontrado';
        die;
    } else {
        echo 'Ramal inexistente';
        die;
    }
}