<?php

require 'conexao.php';

function insert($matricula,$login,$senha,$nome,$email,$ramal,$setor,$funcao,$turno)
{
   $link = conexao();
   $query =" insert into funcionario(matricula,login,senha,nome,email,ramal,FK_setor,FK_funcao,FK_turno)
   values( {$matricula},'{$login}', md5('{$senha}'),'{$nome}','{$email}','{$ramal}', {$setor}, {$funcao}, {$turno} )";
   
   if(mysqli_query($link, $query))
   {
     return true;
   }
   
   mysqli_close($link);
  
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
 $query = "select * from VW_CONSULTA_GERAL where  Setor '%{$Setor}%'";
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