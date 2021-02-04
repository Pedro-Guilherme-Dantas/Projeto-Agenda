<?php 

	function mostraAgendas()
	{

		$usuCodigo = $_SESSION['codUser'];

		$stringOption = "";

		include "config.php";

		$selectAgendas = "SELECT * FROM TB_AGENDA WHERE AGE_USU_CODIGO = $usuCodigo";

		$queryAgendas = mysqli_query($conect,$selectAgendas);

		while ($res = mysqli_fetch_array($queryAgendas)) {
			$stringOption = $stringOption."<a class='dropdown-item' href='agenda.php?num1=".$_SESSION['numLogin']."&agenda=".$res['AGE_NOME']."''>".$res['AGE_NOME']."</a>";
		}

		echo $stringOption;

	}

	function selectAgendas()
	{
		
		$usuCodigo = $_SESSION['codUser'];

		$stringOption = "";

		include "config.php";

		$selectAgendas = "SELECT * FROM TB_AGENDA WHERE AGE_USU_CODIGO = $usuCodigo ORDER BY AGE_CODIGO";

		$queryAgendas = mysqli_query($conect,$selectAgendas);

		while ($res = mysqli_fetch_array($queryAgendas)) {
			$stringOption = $stringOption."<option value='".$res['AGE_CODIGO']."'>".$res['AGE_NOME']."</option>";
			
		}

		echo $stringOption;		

	}

	function criarTabelas()
	{

		include "config.php";
		$stringTabela = "";
		$usuCodigo = $_SESSION['codUser'];
		$numLogin = $_SESSION['numLogin'];
		
		$sqlDadosTabela = "SELECT AGE_NOME,EVE_TITULO,EVE_DESCRICAO,DATE_FORMAT((EVE_DT_INICIO),'%d %m %Y') as EVE_DT_INICIO,DATE_FORMAT((EVE_DT_FIM),'%d %m %Y') as EVE_DT_FIM FROM TB_AGENDA JOIN TB_EVENTOS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE AGE_USU_CODIGO = $usuCodigo ORDER BY EVE_DT_INICIO DESC";

		$queryTabela = mysqli_query($conect,$sqlDadosTabela);

		while($res = mysqli_fetch_array($queryTabela)){

			$nomeAgenda = $res['AGE_NOME'];
			$nomeEve = $res['EVE_TITULO'];
			$descricao = $res['EVE_DESCRICAO'];
			$dtInicio = $res['EVE_DT_INICIO'];
			$dtFim = $res['EVE_DT_FIM'];

			$stringTabela = $stringTabela.'	
				<tr>
					<td class="border">'.$nomeAgenda.'</td>
					<td class="border"> <a href="editEvento.php?num1='.$numLogin.'&evento='.$nomeEve.'">'.$nomeEve.'</a></td>
					<td class="border">'.$descricao.'</td>
					<td class="border">'.$dtInicio.'</td>
					<td class="border">'.$dtFim.'</td>
				</tr>';
			

		}

		echo $stringTabela;


	}

	function proximosEventos()
	{

		include "config.php";
		$stringTabela = "";
		$usuCodigo = $_SESSION['codUser'];

		$sql7dias = "SELECT EVE_TITULO,DATE_FORMAT((EVE_DT_INICIO),'%d %m %Y') as EVE_DT_INICIO,DATE_FORMAT((EVE_DT_FIM),'%d %m %Y')
 		as EVE_DT_FIM FROM TB_EVENTOS JOIN TB_AGENDA ON EVE_AGE_CODIGO = AGE_CODIGO
 		WHERE AGE_USU_CODIGO = $usuCodigo AND (TIMESTAMPDIFF(DAY,NOW(),EVE_DT_FIM)+1) <=7 AND (TIMESTAMPDIFF(DAY,NOW(),EVE_DT_FIM)+1) >= 1";

		$query7dias = mysqli_query($conect,$sql7dias);

		while ($res = mysqli_fetch_array($query7dias)) {

			$nome = $res['EVE_TITULO'];
			$dataEvento = $res['EVE_DT_FIM'];

			$stringTabela = $stringTabela.'
	


			    <tr>
			      
			      <td class="border">'.$nome.'</td>
			      <td class="border">'.$dataEvento.'</td>

			      
			    </tr>
			   
			  
			';
		}

		echo $stringTabela;

	}



	function tabelaDeAgenda()
	{

	    include "config.php";
		$stringTabela = "";
		$usuCodigo = $_SESSION['codUser'];
		$aagenda = $_GET['agenda'];

		$sql = "SELECT AGE_NOME,EVE_TITULO,EVE_DESCRICAO,EVE_DT_INICIO,EVE_DT_FIM FROM TB_AGENDA JOIN TB_EVENTOS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE AGE_NOME = '$aagenda' AND AGE_USU_CODIGO = $usuCodigo ";	

		$queryTable = mysqli_query($conect,$sql);

		$stringTabela = $stringTabela.'
			<tr  align="center" class="border-left border-right bg-info ageCab">
				<th colspan="4">'.$aagenda.'</th>
			</tr>

		  	<tr>
		      
		      <th scope="col" class="border">Evento</th>
		      <th scope="col" class="border">Descrição</th>
		      <th scope="col" class="border">Data início</th>
		      <th scope="col" class="border">Data fim</th>
		      
		    </tr>';

		while ($res = mysqli_fetch_array($queryTable)) {

		    $nomeAgenda = $res['AGE_NOME'];
			$nomeEve = $res['EVE_TITULO'];
			$descricao = $res['EVE_DESCRICAO'];
			$dtInicio = $res['EVE_DT_INICIO'];
			$dtFim = $res['EVE_DT_FIM'];

			$stringTabela = $stringTabela.'

		    <tr>
		      
		      <td class="border">'.$nomeEve.'</td>
		      <td class="border">'.$descricao.'</td>
		      <td class="border">'.$dtInicio.'</td>
		      <td class="border">'.$dtFim.'</td>
		      
		    </tr>';
		

		}

		echo $stringTabela;	




	}


	function ultimosEventos()
	{

		include "config.php";
		$stringTabela = "";
		$usuCodigo = $_SESSION['codUser'];

		$sql3dias = "SELECT EVE_TITULO,DATE_FORMAT((EVE_DT_INICIO),'%d %m %Y') as EVE_DT_INICIO,DATE_FORMAT((EVE_DT_FIM),'%d %m %Y')
 		as EVE_DT_FIM FROM TB_EVENTOS JOIN TB_AGENDA ON EVE_AGE_CODIGO = AGE_CODIGO
 		WHERE AGE_USU_CODIGO = $usuCodigo AND TIMESTAMPDIFF(DAY,NOW(),EVE_DT_FIM+1) < 0 AND TIMESTAMPDIFF(DAY,NOW(),EVE_DT_FIM+1) >= -3";

		$query3dias = mysqli_query($conect,$sql3dias);

		while ($res = mysqli_fetch_array($query3dias)) {

			$nome = $res['EVE_TITULO'];
			$dataEvento = $res['EVE_DT_FIM'];

			$stringTabela = $stringTabela.'
	


			    <tr>
			      
			      <td class="border">'.$nome.'</td>
			      <td class="border">'.$dataEvento.'</td>

			      
			    </tr>
			   
			  
			';
		}

		echo $stringTabela;

	}

	function eventosConflito()
	{

		$stringTabela = "";
		$contador = 0;
		$arrayConflitos = array();
		$usuCodigo = $_SESSION['codUser'];

		include "config.php";

		$sql = "SELECT AGE_NOME,EVE_TITULO,EVE_DESCRICAO, EVE_DT_INICIO, EVE_DT_FIM FROM TB_AGENDA JOIN TB_EVENTOS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE AGE_USU_CODIGO = $usuCodigo ORDER BY AGE_NOME";

		$query = mysqli_query($conect,$sql);

		while ($res = mysqli_fetch_array($query)) {
			
			array_push($arrayConflitos, $res['EVE_DT_INICIO']);

		}

		function getDuplicates($array) 
		{
	    	return array_unique( array_diff_assoc( $array, array_unique( $array ) ) );
		}

		$duplicates = getDuplicates($arrayConflitos);

		foreach ($duplicates as $i => $value) 
		{ 

			$buscaConflito = "SELECT * FROM TB_EVENTOS JOIN TB_AGENDA ON EVE_AGE_CODIGO = AGE_CODIGO WHERE EVE_DT_INICIO = '$duplicates[$i]' AND AGE_USU_CODIGO = $usuCodigo";

			$queryConflito = mysqli_query($conect,$buscaConflito);

			while ($resultado = mysqli_fetch_array ($queryConflito)) {
			
			$stringTabela = $stringTabela.'				<div class=">
					<h3 class="d-flex justify-content-center mt-3">'.$resultado["EVE_TITULO"].';</h3>
					
				</div>';

			}
			$stringTabela = $stringTabela."<hr>";

		}

		echo $stringTabela;


	}


	function porcentagem()
	{

		$usuCodigo = $_SESSION['codUser'];

		include "config.php";

		$sql1 = "SELECT COUNT(EVE_TITULO) as TOTAL1 FROM TB_EVENTOS JOIN TB_AGENDA ON EVE_AGE_CODIGO
 		= AGE_CODIGO WHERE YEAR(EVE_DT_FIM) = YEAR(NOW()) and AGE_USU_CODIGO = $usuCodigo AND YEAR(EVE_DT_FIM) = YEAR(NOW())";

 		$query1 = mysqli_query($conect,$sql1);

 		$sql2 = "SELECT COUNT(EVE_TITULO) as TOTAL2 FROM TB_EVENTOS JOIN TB_AGENDA ON EVE_AGE_CODIGO
 		= AGE_CODIGO WHERE DAY(EVE_DT_FIM) < DAY(NOW()) AND AGE_USU_CODIGO = $usuCodigo AND YEAR(EVE_DT_FIM) = YEAR(NOW())";

 		$query2 = mysqli_query($conect,$sql2);

 		$totais1 = mysqli_fetch_assoc($query1)['TOTAL1'];
 		$totais2 = mysqli_fetch_assoc($query2)['TOTAL2'];



 		echo '<h3 class="d-flex justify-content-center mt-3">'.$totais2.'</h3>				
				<h3 class="d-flex justify-content-center mt-3">dos '.$totais1.' eventos realizados no ano</h3>';  	





	}	





 ?>