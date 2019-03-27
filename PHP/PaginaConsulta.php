<?php
	SESSION_start();
	include "funcoes.php";
	$dados = ConsultaGeral();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Resultado Consulta</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/table_ultil.css">
	<link rel="stylesheet" type="text/css" href="css/filter.css">
	<!--===============================================================================================-->
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand btn btn-outline-info" href="#"><i class="fas fa-home"></i> Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link btn btn-outline-success" role="button" href="testeRetorno.php"><i class="fas fa-user-circle"></i> Perfil</a>
				</li>
				<!--<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>-->
			</ul>
			<a class="btn btn-outline-danger" href="index.php" role="button"> Logout <i class="fas fa-sign-out-alt"></i>	</a>
			<!--<button type="button" class="btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#modalExemplo" style="margin-left: 1%;z-index:999;">Cadastrar-se</button>-->

		</div>
	</nav>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver2 m-b-110">
					<div class="panel panel-primary filterable">
						<div class="panel-heading">
							<div class="pull-right">
								<button class="btn-filter login100-form-btn">Filtrar</button>
							</div>
						</div>

						<table data-vertable="ver2">
							<thead>						
								<tr class="filters">
								<form class="login100-form validate-form " action="consultaPorNome.php" method="GET">
									<th><input type="text" class="input100" name="Nome" placeholder="NOME" disabled></th>
									<th><button class="btn login200-form-btn" type="submit"
											data-column="column2">Consultar</button></th>
								</form>
								<form class="login100-form validate-form " action="consultaPorSetor.php" method="GET">
									<th><input type="text" class="input100" name="Setor" placeholder="SETOR" disabled></th>
									<th><button class="btn login200-form-btn" type="submit"
											data-column="column3">Consultar</button></th>
								</form>
								<form class="login100-form validate-form " action="consultaPorRamal.php" method="GET">
									<th><input type="text" class="input100" name="ramal" placeholder="RAMAL" disabled></th>
									<th><button class="btn login200-form-btn" type="submit"
											data-column="column4">Consultar</button></th>
								</form>
								</tr>								
							</thead>

							
							<tbody>
							<tr class="row100 head">								
								<th class="column100 column2" data-column="column2">Matricula</th>
								<th class="column100 column3" data-column="column3">Nome</th>
								<th class="column100 column4" data-column="column4">Email</th>
								<th class="column100 column5" data-column="column5">Funçao</th>
								<th class="column100 column6" data-column="column6">Setor</th>								
								<th class="column100 column8" data-column="column8">Ramal</th>
							</tr>
							<?php foreach ($dados as $lista) { ?> 	
							<tr class="row100">
								<td class="column100 column1" data-column="column1"> <?= $lista['matricula'] ?> </td>
								<td class="column100 column2" data-column="column2"> <?= $lista['nome'] ?> </td>
								<td class="column100 column3" data-column="column3"> <?= $lista['email'] ?> </td>
								<td class="column100 column4" data-column="column4"> <?= $lista['Função'] ?> </td>
								<td class="column100 column5" data-column="column5"> <?= $lista['Setor'] ?> </td>
								<td class="column100 column6" data-column="column6"> <?= $lista['ramal'] ?> </td>								
							</tr>
							<?php } ?>
							</tbody>
						</table>						
					</div>
				</div>
			</div>
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
	<!--===============================================================================================-->
	<script src="js/filter.js"></script>

</body>
</html>