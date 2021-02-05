<!DOCTYPE html>
<html>
<head>

	<title>Sua agenda</title>

	<?php
	    include "template.php";
	    modAgenda();
	?>

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