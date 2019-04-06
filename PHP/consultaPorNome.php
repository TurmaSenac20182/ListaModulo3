<?php


SESSION_start();
if(!$_SESSION{'login'})
{
	header("location: index.php ");
}
include "funcoes.php";

if($_SERVER['REQUEST_METHOD'] === 'GET') 
{
    $dados = consutaNome($_GET['Nome']) ;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Resultado Consulta</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-grid.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.min.js">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/table_ultil.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">				
				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">								
								<th class="column100 column2" data-column="column2">Matricula</th>
								<th class="column100 column3" data-column="column3">Nome</th>
								<th class="column100 column4" data-column="column4">Email</th>
								<th class="column100 column5" data-column="column5">Funçao</th>
								<th class="column100 column6" data-column="column6">Setor</th>								
								<th class="column100 column8" data-column="column8">Ramal</th>
							</tr>
						</thead>
						<?php foreach ($dados as $lista) { ?> 
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"> <?= $lista['matricula'] ?> </td>
								<td class="column100 column2" data-column="column2"> <?= $lista['nome'] ?> </td>
								<td class="column100 column3" data-column="column3"> <?= $lista['email'] ?> </td>
								<td class="column100 column4" data-column="column4"> <?= $lista['Função'] ?> </td>
								<td class="column100 column5" data-column="column5"> <?= $lista['Setor'] ?> </td>
								<td class="column100 column6" data-column="column6"> <?= $lista['ramal'] ?> </td>								
                            </tr>
						</tbody>
						<?php
							}
						?>
					</table>
				</div>				
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>