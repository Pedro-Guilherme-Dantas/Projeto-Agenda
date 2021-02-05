<!DOCTYPE html>
<html>
<head>

	<title>Principal</title>

	<?php
	    include "template.php";
	    addAgenda();
	?>

	<div class="container">
		
		<div style="" class="row col-lg-12 col-md-12 bg-light">
			

				
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-3 ml-3">


					<a href="<?php echo 'addEvento.php?num1='.$_SESSION['numLogin']; ?>" class="">
					<img  src="../images/novaAg.png" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					</a>
					<center>
						<label class="">
							Novo Evento
						</label>
					</center>
				</div>

				<div class="col-md-1"></div>

				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-3 rounded ml-3">
					<a href="criarAgenda.php" class="" data-toggle="modal" data-target="#modalAgenda">
					<img  src="../images/edit.png" class="rounded col-lg-12 col-md-12 col-sm-12 col-xs-12">
					</a>
					<center>
						<label class="">
							Nova Agenda
						</label>
					</center>
				</div>

				<div class="col-md-1"></div> 

				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-3 rounded ml-3">
					<a href="<?php echo 'relatorio.php?num1='.$_SESSION['numLogin']; ?>" class="">
					<img  src="../images/relatorio.png" class="rounded col-lg-12 col-md-12 col-sm-12 col-xs-12">
					</a>
					<center>
						<label class="">
							Relatório
						</label>
					</center>
				</div>
				

		<div class="modal fade" id="modalAgenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Nova Agenda</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        
		      	<form method="POST">
				  	<div class="form-group">
					    <label for="inputNome">Nome da agenda</label>
					    <input type="name" class="form-control" id="inputNome" placeholder="" name="inpNome">
				    
				  </div>
			  	
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		        
		        	<button type="submit" class="btn btn-primary" name="addAgenda">Adicionar</button>
		    	</form>
		      </div>
		    </div>
		  </div>
		</div>	
					
				

		</div>

	</div>


</body>
</html>