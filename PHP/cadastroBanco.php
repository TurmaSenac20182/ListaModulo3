<?php

require 'funcoes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['name'];
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['password'];
  $matricula = $_POST['matricula'];
  $ramal = $_POST['ramal'];

  if(insert($nome, $usuario, $email, $senha, $matricula, $ramal)){
    echo 'Cadastro realizado com sucesso!';
  }

  //header('location: #');
}
