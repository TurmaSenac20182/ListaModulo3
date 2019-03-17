<?php

require "conexao.php";

function create($matricula,$login,$senha,$nome,$email,$ramal,$setor,$funcao,$turno)
{ $link=getConnection;
  $query =" insert into funcionario
  (matricula,login,senha,nome,email,ramal,FK_setor,FK_funcao,FK_turno)
   values('{$matricula}','{$login}', md5('{$senha}'),'{$nome}','{$email}','{$ramal}','{$setor}','{$funcao}','{$turno}')"

   if(mysqli_query($link, $query))
   {
     return true;
   }
   
   mysqli_close($link);
  
 } ; 