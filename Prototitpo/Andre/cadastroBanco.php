<?php

require 'funcoes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['name'];
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['password'];
  $matricula = $_POST['matricula'];
  $ramal = $_POST['ramal'];
  $setor = $_POST['setor'];
  $funcao = $_POST['funcao'];
  $turno = $_POST['turno'];

  if(insert($matricula,$login,$senha,$nome,$email,$ramal,$setor,$funcao,$turno)){
    echo 'Cadastro realizado com sucesso!';
  }

  //header('location: #');
}

