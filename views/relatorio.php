<!DOCTYPE html>
<html>
<head>

	<title>Relatório</title>

	<?php
	    include "template.php";
	?>

	<div class="container">
		
		<div class="row">

			<div class="col-2"></div>

			<div class="table mt-4 col-8">
				<table>

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

		</div>

		<div class="row">

			<div class="col-2"></div>

			<div class="table col-4 mt-4">
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

			<div class="table col-4 mt-4">
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

		<div class="row d-flex justify-content-around mt-4 mb-4">
			
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