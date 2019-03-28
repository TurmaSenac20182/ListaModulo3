<?php

SESSION_start();
 include ('conexao.php');

  if(empty($_POST['login']) || empty($_POST['senha']))
  {
    header("location: index.php");
    exit();
  }

$usuario= mysqli_real_escape_string(conexao(),$_POST['login']);
$senha= mysqli_real_escape_string(conexao(),$_POST['senha']);

$query= "select * from funcionario where login='{$usuario}' and senha='{$senha}'";

$result=mysqli_query(conexao(),$query);

$row=mysqli_num_rows($result);

if($row>0)
{
  $_SESSION['login'] = $usuario;
   header('location:PaginaConsulta.php');
   exit();
}
else
{    
   $_SESSION['nao_autenticado']=true;
  header('location:index.php');
  exit();
}