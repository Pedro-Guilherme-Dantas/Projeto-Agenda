<!DOCTYPE html>
<html>
<head>

	<title>Login</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body style="" class="bg-secondary">
<?php 

	include "functions.php";

	login();


?>
<form method="POST">
	<div class="container-fluid">

		<div class="row mb-3">
			<h1 class="text-light" style="position: absolute;left: 40%;text-shadow: 1px 1px black;">System Agenda</h1>
		</div>

		<div class="row">
			<div class="col-md-4 ">

				
			</div>
	
			<div class="col-md-4 text-light float-right mt-5 bg-dark p-4" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Endereço de email</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="login">

			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Senha</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
			  </div>

			  <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
			  <span class="ml-2 mr-2">ou</span>
			  <a href="views/cadastro.php">Cadastre-se</a>
			</div>	
	
			<div class="col-md-4"></div>
	</div>
	</div>



</form>



</body>
</html>