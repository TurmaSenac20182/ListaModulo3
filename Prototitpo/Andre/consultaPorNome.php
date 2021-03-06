<?php
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
	<link rel="stylesheet" type="text/css" href="/Prototitpo/vendor/bootstrap/css/bootstrap-grid.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Prototitpo/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Prototitpo/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Prototitpo/vendor/perfect-scrollbar/perfect-scrollbar.min.js">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Prototitpo/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Prototitpo/css/table.css">
	<link rel="stylesheet" type="text/css" href="/Prototitpo/css/table_ultil.css">
<!--===============================================================================================-->
</head>
<body>
    
<?php foreach ($dados as $linha) { ?>

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
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"> <?= $linha['matricula'] ?> </td>
								<td class="column100 column2" data-column="column2"> <?= $linha['nome'] ?> </td>
								<td class="column100 column3" data-column="column3"> <?= $linha['email'] ?> </td>
								<td class="column100 column4" data-column="column4"> <?= $linha['Função'] ?> </td>
								<td class="column100 column5" data-column="column5"> <?= $linha['Setor'] ?> </td>
								<td class="column100 column6" data-column="column6"> <?= $linha['ramal'] ?> </td>								
                            </tr>
                            
						</tbody>
					</table>
				</div>				
			</div>
		</div>
	</div>

    <?php
    }
    ?>
	

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