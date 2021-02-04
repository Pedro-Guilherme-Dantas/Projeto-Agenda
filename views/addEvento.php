<!DOCTYPE html>
<html>
<head>
	  <title>Novo Evento</title>
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
		addEvento();

	 ?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand"><?php echo $_SESSION['name']; ?></a>
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
		
		<div class="row p-3">

			<div class="col-md-2 col-sm-2 col-sm-0 col-xs-0"></div>
			
			<form class="col-md-8 " method="POST">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputTitle">Título do evento</label>
			      <input type="text" class="form-control" id="inputTitle" placeholder="Título" name="inpTitulo">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputAg">Escolha a Agenda</label>	
			      <select id="inputAg" class="form-control" name="selectAg">
			        <?php selectAgendas(); ?>
			      </select>
			    </div>
			  </div>
			  <div class="form-group">
			  	<label>Descrição do evento</label>
			    <textarea style="resize: none" class="form-control col-md-12 mt-2 mb-2" id="exampleFormControlTextarea1" rows="3" placeholder="escreva aqui" name="inpDesc"></textarea>
			  </div>
			  
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputCity">Data de Início</label>
			      <input type="date" name="dataInicio" class="form-control">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputCEP">Data de fim</label>
			      <input type="date" class="form-control" name="dataFim">
			    </div>
			  </div>
			  <div class="form-group">
	
			  </div>
			  <button type="submit" class="btn btn-primary" name="btnAddEve">Adicionar</button>
			</form>

			<div class="col-md-2 col-sm-0 col-xs-0"></div>

		</div>

	</div>

</body>
</html>