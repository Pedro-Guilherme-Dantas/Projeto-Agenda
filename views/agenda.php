<!DOCTYPE html>
<html>
<head>
	  <title>Sua agenda</title>

	  <meta charset="utf-8">

	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	  
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>

	<?php 

		include "../validaLogin.php";
		include "../functions.php";
		include "../estruturas.php";
		sair();	
		modAgenda();
	 ?>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#"><?php echo $_SESSION['name']; ?></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo 'inicial.php?num1='.$_SESSION['numLogin']; ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Agendas
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        	<?php mostraAgendas(); ?>
	        </div>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link " href="#" >Sair</a>
	      </li>
	    </ul>
	    
	  </div>
	</nav>

	<div class="container">
		
		<div class="row row1">
			<div class="col-md-3"></div>


			<form method="POST" class="col-md-6 mt-4">
			  <div class="form-group">
			    <label for="inputNome">Nome da agenda</label>
			    <input type="name" class="form-control" id="inputEditNome" value="<?php echo ''.$_GET['agenda'] ?>" name="inpNome">
			    
			  </div>

			  
			  <button type="submit" class="btn btn-primary" name="btnEditar">Renomear</button>
			  <span>ou ...</span>
			  <button type="submit" class="btn btn-primary" name="btnExcluir">Excluir Agenda</button>

			</form>


			<div class="col-md-3"></div>
			
		</div>

		<div class="row row2">

			<div class="col-md-3"></div>

				<table  class="table col-md-6 col-sm-10 mt-4 ml-3">

			    	<?php tabelaDeAgenda(); ?>

				</table>

			<div class="col-md-3"></div>

		</div>

	</div>


</body>
</html>