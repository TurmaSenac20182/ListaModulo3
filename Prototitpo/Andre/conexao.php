<?php 

function conexao() {
    $link = mysqli_connect('localhost', 'root', '', 'pint3', '3306');
    mysqli_set_charset($link, 'utf8');

    return $link;
}