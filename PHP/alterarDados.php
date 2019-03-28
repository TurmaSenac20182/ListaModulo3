<?php

require 'funcoes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['name'];
  $login = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['password'];
  $matricula = $_POST['matricula'];
  $ramal = $_POST['ramal'];
  $setor = $_POST['setor'];
  $funcao = $_POST['funcao'];
  $turno = $_POST['turno'];

  if(atualizar($matricula, $login, $senha, $nome, $email, $ramal, $setor, $funcao, $turno)) {
    header('location: PaginaConsulta.php');
    die;
  } else {
    echo "Não foi possível realizar a atualização";
    die;
  }

}

