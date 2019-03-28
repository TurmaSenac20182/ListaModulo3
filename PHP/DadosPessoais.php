<!DOCTYPE html>
<?php 

require "conexao.php";

session_Start();
$usuario = $_SESSION['login'];
$query = "select * from funcionario where login = '{$usuario}'";
$result = mysqli_query(conexao(),$query);
$dados = mysqli_fetch_assoc($result); 

$Nome = ($dados['nome']);
$login = ($dados['login']);
$Senha = ($dados['senha']);
$Email = ($dados['email']);
$Função = ($dados['FK_funcao']);
$Setor = ($dados['FK_setor']);
$Turno = ($dados['FK_turno']);
$Matrícula = ($dados['matricula']);
$Ramal = ($dados['ramal']);

?>



<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	<link rel="stylesheet" type="text/css" href="css/cadastro_util2.css">
	<!--===============================================================================================-->

<!--Função para apenas Números-->
	<script>
		function somenteNumeros(num) {
			var er = /[^0-6.]/;
			er.lastIndex = 0;
			var campo = num;
			if (er.test(campo.value)) {
			campo.value = "";
			}
		}
	</script>
</head>
<body>
   
	<form action="cadastroBanco.php" method="POST">
	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(imagens/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Seus dados pessoais
				</span>

				<span class="contact100-form-title-2">
					Atualize os dados incorretos
				</span>
			</div>
			
			<form action="alterarDados.php" class="contact100-form validate-form" method="POST">
			  
			 	<div class="wrap-input100 validate-input" data-validate="Campo Obrigatório">
					<span class="label-input100">Nome Completo:</span>
					<input class="input100" type="text" name="usuario" maxlength="20" value="<?php echo $Nome;?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Campo Obrigatório">
					<span class="label-input100">Usuario:</span>
					<input class="input100" type="text" name="usuario" maxlength="20" value="<?php echo $login;?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Campo Obrigatório">
					<span class="label-input100">Senha:</span>
					<input class="input100" type="password" name="password" maxlength="15" value="<?php echo $senha;?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Insira um Email válido: ex@abc.com">
					<span class="label-input100">Email:</span>
					<input class="input100" type="email" name="email" maxlength="60" value="<?php echo $Email;?>">
					<span class="focus-input100"></span>
				</div>
			

				<div class="wrap-input100 validate-input" data-validate="Campo Obrigatório">
					<span class="label-input100">Função:</span>
					<input class="input100" type="txt" name="funcao" maxlength="50" value="<?php echo $Função;?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Campo Obrigatório">
					<span class="label-input100">Setor:</span>
					<input class="input100" type="text" name="setor" maxlength="50" value="<?php echo $Setor;?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Campo Obrigatório">
					<span class="label-input100">Turno:</span>
					<input class="input100" type="text" name="turno" maxlength="5" value="<?php echo $Turno;?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Campo Obrigatório">
					<span class="label-input100">Matrícula:</span>
					<input class="input100" type="text" name="matricula"  maxlength="6" value="<?php echo $Matrícula;?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Campo Obrigatório">
					<span class="label-input100">Ramal:</span>
					<input class="input100" type="text" onkeyup="somenteNumeros(this);"  maxlength="3" name="ramal" value="<?php echo $Ramal;?>">
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn" style="margin-right: 2%;z-index:999;">
						<span>
							Alterar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>	
					</button>
				</form>
				<form action="PaginaConsulta.php">
					<button class="contact100-form-btn2" type="submit" style="margin-left: 1%;z-index:999;">	
						<span>
							Cancelar
						</span>
					</button>
				</form>
				</div>
			
		</div>
	</div>
	
</form>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	
	<script src="js/main.js"></script>

</body>
</html>
