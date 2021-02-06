<!DOCTYPE html>
<html>
<head>

	<title>Editar Evento</title>

	<?php
	    include "template.php";
	    modEvento();
	?>

	<div class="container">
		
		<div class="row p-3">

			<div class="col-md-2 col-sm-2 col-sm-0 col-xs-0"></div>
			
			<form class="col-md-8 " method="POST">
			  <div class="form-row">
			    <div class="form-group col-md-12">
			      <label for="inputTitle">Título do evento</label>
			      <input type="text" class="form-control" id="inputTitle" value="<?php echo valueEditEvento(1); ?>" name="inpTitulo">
			    </div>

			  </div>
			  <div class="form-group">
			  	<label>Descrição do evento</label>
			    <textarea style="resize: none" class="form-control col-md-12 mt-2 mb-2" id="exampleFormControlTextarea1" rows="3" placeholder="escreva aqui" name="inpDesc"><?php echo valueEditEvento(2);?></textarea>
			  </div>
			  
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputCity">Data de Início</label>
			      <input type="date" class="form-control" name="dataInicio" value="<?php echo valueEditEvento(3); ?>">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputCEP">Data de fim</label>
			      <input type="date" class="form-control" name="dataFim" value="<?php echo valueEditEvento(4); ?>">
			    </div>
			  </div>
			  <div class="form-group">
	
			  </div>
			  <button type="submit" class="btn btn-success" name="btnEditar">Editar</button>
			  <button type="submit" class="btn btn-danger" name="btnExcluir">Excluir</button>
			</form>

			<div class="col-md-2 col-sm-0 col-xs-0"></div>

		</div>

	</div>	


</body>
</html>