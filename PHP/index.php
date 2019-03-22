<?php
  SESSION_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/login_util.css">


</head>

<body>
  <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand btn btn-outline-secondary" href="index.php"><i class="fas fa-home"></i> Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <button type="button" class="btn btn-secondary my-2 my-sm-0" data-toggle="modal" data-target="#modalExemplo" style="margin-left: 1%;z-index:999;">Login</button>
        <button type="button" class="btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#modalExemplo" style="margin-left: 1%;z-index:999;">Cadastrar-se</button>
        
      </div>
      </nav>
    -->

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(imagens/bg.jpg);">
          <span class="login100-form-title-1">
            Página de Acesso
          </span>
          <span class="login100-form-title-2">
            Bem - vindo <small>(a)</small> !
          </span>
        </div>

        <form class="login100-form validate-form" action="consultaLogin.php" method="POST">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Campo Obrigatório">
            <span class="label-input100">Usuário</span>
            <input class="input100" type="text" name="usuario" placeholder="Insira seu usuário.">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate="Campo Obrigatório ">
            <span class="label-input100">Senha</span>
            <input class="input100" type="password" name="senha" placeholder="Insira sua senha.">
            <span class="focus-input100"></span>
          </div>

          <!--<div class="flex-sb-m w-full p-b-30">
                <div class="contact100-form-checkbox">
                  <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                  <label class="label-checkbox100" for="ckb1">
                    Remember me
                  </label>
                </div>-->

          <!--<div>
                  <a href="#" class="txt1">
                    Forgot Password?
                  </a>
                </div>
              </div>-->

          <div class="container-login100-form-btn" style="margin-top: 10%;z-index:999;">

            <button class="login100-form-btn">
              Login
            </button>
            <a class="login100-form-btn2" href="cadastro.php" role="button" style="margin-left: 2%;z-index:999;">
              Cadastrar </a>
          </div>
        </form>
      </div>
    </div>
  </div>

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