<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>

	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body class="bg-secondary">

	<?php 

		include "../functions.php";
		cadastrar();

	 ?>


	<div class="container">

		
			
			<form class="mt-5 bg-dark p-5 rounded text-light" method="POST">

			  <div class="form-group">
			      <label for="inputNome">Nome do usuário</label>
			      <input type="name" class="form-control col-lg-12 col-md-12 col-sm-12 col-xs-12" id="inputNome" placeholder="Seu nome" name="inpNome">
			  </div>

			  <div class="form-row">
			    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="inpEmail">
			    </div>
			  </div>
			  <div class="form-group">
			      <label for="inputPassword4">Senha</label>
			      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="inpSenha">
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-12">
      				<label for="inputPassword4.0">Confirme a senha</label>
			    	<input type="password" class="form-control" id="inputPassword4.0" placeholder="Password" name="inpConfirm">
			    	<button type="submit" class="btn btn-primary mt-3" name="btnCadastro">Cadastrar</button>
			    	<a class="link-light ml-2 mt-2" href="../index.php">Voltar</a>
			    </div>
	
			  
		</form>		
	
	</div>

</body>
</html>