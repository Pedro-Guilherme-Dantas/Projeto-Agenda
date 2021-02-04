<!DOCTYPE html>
<html>
<head>
	  <title>Relatório</title>

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

	 ?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" ><?php echo $_SESSION['name']; ?></a>
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
	      	<form method="post">
	        <button class="btn btn-light " name="btnSair">Sair</button>
	    	</form>
	      </li>
	    </ul>
	    
	  </div>
	</nav>

	<div class="container">
		
		<div class="row align-self-stretch">
			<div style="max-height: 300px;overflow-y: scroll;" class="table col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 ml-3 ">
			<table >

				<tr align="center" class="border-left border-right bg-info">
			  		<th colspan="5">Seus Eventos</th>
			  	</tr>

				<tr>
			      <th scope="col" class="border">Agenda</th>
			      <th scope="col" class="border">Evento</th>
			      <th scope="col" class="border">Descrição</th>
			      <th scope="col" class="border">Início</th>
			      <th scope="col" class="border">Término</th>
			    </tr>
			
			    <?php criarTabelas(); ?>

			</table>				
			</div>

		

			<div style="max-height: 300px;overflow-y: scroll;"  class="table col-lg-3 col-md-5 col-sm-5 col-xs-12 mt-4 ml-3">
			<table>

				<tr align="center" class="border-left border-right bg-danger">
			  		<th colspan="4">Proximos 7 dias</th>
			  	</tr>

				<tr>
			      
			      <th scope="col" class="border">Evento</th>
			      <th scope="col" class="border">Dia final</th>
			      
			      
			    </tr>
			
				<?php proximosEventos(); ?>

			</table>
			</div>

			<div style="max-height: 300px;overflow-y: scroll;" class="table col-lg-2 col-md-5 col-sm-5 col-xs-12 mt-4 ml-3">
			<table>

				<tr align="center" class="border-left border-right bg-success">
			  		<th colspan="4">Últimos 3 dias</th>
			  	</tr>

				<tr>
			      
			      <th scope="col" class="border">Evento</th>
			      <th scope="col" class="border">Dia final</th>
			      
			      
			    </tr>
			
				<?php ultimosEventos(); ?>

			</table>			
			</div>
		</div>

 <!-- --------------------------------------2º row---------------------------------------- -->

		<div class="row d-flex justify-content-around mt-4">
			
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 bg-warning border">
				<h3 class="d-flex justify-content-center mt-3">+<?php eventosRestantes(); ?></h3>
				<h3 class="d-flex justify-content-center">eventos no ano</h3>
				
			</div>	

			<div style="max-height: 140px;overflow-y: scroll;" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 bg-secondary text-light border">

				<h3 class="d-flex justify-content-center mt-3 text-dark">Conflitos:</h3>

				<?php eventosConflito(); ?>
				
			</div>			

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 bg-danger border">
				
				<?php porcentagem(); ?>			
						
			</div>								



					

		</div>

	</div>

	

</body>
</html>