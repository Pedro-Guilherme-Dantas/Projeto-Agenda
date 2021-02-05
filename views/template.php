
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</head>
	<body class="bg-light">


		<?php 

			include "../validaLogin.php";
			include "../functions.php";
			include "../estruturas.php";
			sair();
			
		 ?>

		<header>
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
		</header>	


	