<?php

require 'conexao.php';

function insert($matricula,$login,$senha,$nome,$email,$ramal,$setor,$funcao,$turno)
{
   $link = conexao();
   $query =" insert into funcionario(matricula,login,senha,nome,email,ramal,FK_setor,FK_funcao,FK_turno)
   values({$matricula},'{$login}', ('{$senha}'),'{$nome}','{$email}','{$ramal}', {$setor}, {$funcao}, {$turno})";

   mysqli_query($link, $query);
   
   return true;

   mysqli_close($link);

 }

 function ConsultaGeral()
 {
  $link = conexao();
  $query = "select * from VW_CONSULTA_GERAL";
  $result = mysqli_query($link, $query);
  $registroGeral = array();
  while($registro = mysqli_fetch_assoc($result)) {
    array_push($registroGeral, $registro);
  }
  if(!$link) {
    mysqli_close($link);
  }
  return $registroGeral;
}

 function consutaNome($nome)
 {
  $link = conexao();
  $query = "select * from VW_CONSULTA_GERAL where nome like '%{$nome}%'";
  $result = mysqli_query($link, $query);
  $dados = array();
  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }
  if(!$link) {
    mysqli_close($link);
  }
  return $dados;
}

 function consutaRamal($Ramal)
 {
  $link = conexao();
  $query = "select * from VW_CONSULTA_GERAL where ramal={$Ramal}";
  $result = mysqli_query($link, $query);
  $dados = array();
  while($registro = mysqli_fetch_assoc($result)) {
    array_push($dados, $registro);
  }
  if(!$link) {
    mysqli_close($link);
  }
  return $dados;
}


function consutaSetor($Setor)
{
 $link = conexao();
 $query = "select * from VW_CONSULTA_GERAL where  Setor like '%{$Setor}%'";
 $result = mysqli_query($link, $query);
 $dados = array();
 while($registro = mysqli_fetch_assoc($result)) {
   array_push($dados, $registro);
 }
 if(!$link) {
   mysqli_close($link);
 }
 return $dados;
}


function atualizar($matricula, $login, $senha, $nome, $email, $ramal, $setor, $funcao, $turno)
{
   $link = conexao();
   $query ="update  funcionario set
   login = '{$login}',senha = ('{$senha}'), nome = '{$nome}', email = '{$email}',
   ramal = '{$ramal}', FK_setor = {$setor}, FK_funcao = {$funcao}, FK_turno = {$turno} where matricula  =  $matricula";

   mysqli_query($link, $query);

   return true;

   mysqli_close($link);

 }
