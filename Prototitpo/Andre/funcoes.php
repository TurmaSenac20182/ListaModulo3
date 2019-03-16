<?php

require 'conexao.php';

function insert($nome, $usuario, $email, $senha, $matricula, $ramal) {
    $link = conexao();
    $query = "insert into funcionario(nome, login, email, senha, matricula, ramal) values('{$nome}',
    '{$usuario}', '{$email}', '{$senha}', '{$matricula}', '{$ramal}')";
    
    mysqli_query($link, $query);

    return true;

    mysqli_close($link);
}

function consutaNome($nome) {
    $link = conexao();
    $query = "select * from funcionario where nome = $nome";

    $resultado = (mysqli_query($link, $query));   

    $linhas = mysqli_num_rows($resultado);

    if($linhas >= 1) {
        return true;
    } else {
        return false;
    }
    mysqli_close($link);
}