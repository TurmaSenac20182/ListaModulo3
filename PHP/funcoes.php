<?php

require 'conexao.php';

function insert($nome, $usuario, $email, $senha, $matricula, $ramal) {
    $link = conexao();
    $query = "insert into funcionario(nome, login, email, senha, matricula, ramal) values('{$nome}',
    '{$usuario}', '{$email}', '{$senha}', '{$matricula}', '{$ramal}')";

    mysqli_query($link, $query);

    return true;
}
