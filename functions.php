<?php 
	
		

	function addAgenda()
	{

		include "config.php";
		
		$usuCodigo = $_SESSION['codUser'];

		if (isset($_POST['addAgenda'])) {

		    $nomeAgenda = $_POST['inpNome'];
			

			$insertAgenda = "INSERT INTO TB_AGENDA (AGE_NOME,AGE_USU_CODIGO) VALUES ('$nomeAgenda', $usuCodigo)";

			$queryInsere = mysqli_query($conect,$insertAgenda);

			header('Refresh:0');

		}

	}


	function login()
	{

		include "config.php";

		if (isset($_POST['entrar'])) {
			
		$erros = array();
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$senha = md5($senha);

		if (empty($login) or empty($senha)) {
			$erros[] = "<li>Preencha tudo(login/senha)</li>";
			echo '<script type="text/javascript">
							function funcao1()
							{
							alert("Preencha tudo(login/senha)!");
							}
							funcao1();
					  </script>';
			
		} else {
			//mysql - string
			$sql = "SELECT * FROM TB_USUARIOS WHERE USU_EMAIL = '$login'";
			$resultado = mysqli_query($conect, $sql);
			
			while ($res = mysqli_fetch_array($resultado)) {
				$codigo = $res['USU_CODIGO'];
				$nome = $res['USU_NOME'];
			}

			if (mysqli_num_rows($resultado) > 0) {
				
				$sql2 = "SELECT * FROM TB_USUARIOS WHERE USU_EMAIL = '$login' AND USU_SENHA = '$senha' ";
				$resultado = mysqli_query($conect, $sql2);
				if (mysqli_num_rows($resultado) == 1) {
					$num = rand(100000,10000000);
					
					$_SESSION['numLogin'] = $num;
					$_SESSION['login'] = $login;
					$_SESSION['codUser'] = $codigo;
					$_SESSION['name'] = $nome;
					
					
					
					header("Location: views/inicial.php?num1=$num");					
					       
				} else {
					$erros[] = "<li>Usuário e senha não conferem </li>";
					echo '<script type="text/javascript">
							function funcao1()
							{
							alert("Usuário e senha não conferem!");
							}
							funcao1();
					  </script>';
				}

			} else {
				$erros[] = "<li>Usuário nao existente</li>";
				echo '<script type="text/javascript">
							function funcao1()
							{
							alert("Usuário não existente!");
							}
							funcao1();
					  </script>';
			}
 		}

		}

	}


	function cadastrar()
	{

		include "config.php";

		if (isset($_POST['btnCadastro'])) {

			$nome = $_POST['inpNome'];
		    $email = $_POST['inpEmail'];
		    $senha = $_POST['inpSenha'];
		    $confirm = $_POST['inpConfirm'];

		    if ($senha != $confirm) {

		    	echo "<script>alert('Senhas não conferem!!');</script>";

		    } else if (empty($nome) or empty($email) or empty($senha) 
		    	or empty($confirm)) {

		    	echo "<script>alert('preencha todos os campos!!');</script>";

		    } else {
		    	$senha = md5($senha);

		    	$sql = "INSERT INTO TB_USUARIOS (USU_NOME,USU_EMAIL,USU_SENHA) 
		    	VALUES ('$nome','$email','$senha')  ";
		    	$query = mysqli_query($conect,$sql);

		    	header("Location: ../index.php");

		    }
		}


	}


	function sair()
	{

		if (isset($_POST['btnSair'])) {

			$_SESSION['numLogin'] = rand(100000,10000000);

			header("Location: ../index.php");


		}

	}


	function addEvento()
	{

		if (isset($_POST['btnAddEve'])) {

			include "config.php";

			$titulo = $_POST['inpTitulo'];
			$agenda = $_POST['selectAg'];
			$descricao = $_POST['inpDesc'];
			$dtInicio = $_POST['dataInicio'];
			$dtFim = $_POST['dataFim'];

			$insertEvento = "INSERT INTO TB_EVENTOS (EVE_TITULO, EVE_DESCRICAO, EVE_DT_INICIO, EVE_DT_FIM, EVE_AGE_CODIGO) VALUES ('$titulo','$descricao','$dtInicio','$dtFim',$agenda)";

			$queryEvento = mysqli_query($conect,$insertEvento);

			header("Location: relatorio.php?num1=".$_SESSION['numLogin']);
	}
	}


	function modAgenda()
	{

		include "config.php";
		$getAgenda = $_GET['agenda'];

		if (isset($_POST['btnExcluir'])) {

			$sql = "DELETE FROM TB_AGENDA WHERE AGE_NOME = '$getAgenda' ";
			$query = mysqli_query($conect,$sql);
			header("Location:inicial.php?num1=".$_SESSION['numLogin']);
		}


		if (isset($_POST['btnEditar'])) {

			$inputNome = $_POST['inpNome'];

			$sql = "UPDATE TB_AGENDA SET AGE_NOME = '$inputNome' 
			WHERE AGE_NOME = '$getAgenda' ";
			$query = mysqli_query($conect,$sql);
			header("Location:inicial.php?num1=".$_SESSION['numLogin']);

		}


	}


	function modEvento()
	{

		include "config.php";
		$getEvento = $_GET['evento'];

		if (isset($_POST['btnExcluir'])) {

			$sql = "DELETE FROM TB_EVENTOS WHERE EVE_TITULO = '$getEvento' ";
			$query = mysqli_query($conect,$sql);
			header("Location:relatorio.php?num1=".$_SESSION['numLogin']);
		}


		if (isset($_POST['btnEditar'])) {

			$inputTitulo = $_POST['inpTitulo'];
			$inputDesc = $_POST['inpDesc'];
			$inputDtIncio = $_POST['dataInicio'];
			$inputDtFim = $_POST['dataFim'];

			$sql = "UPDATE TB_EVENTOS SET EVE_TITULO = '$inputTitulo', EVE_DESCRICAO = '$inputDesc', EVE_DT_INICIO = '$inputDtIncio', EVE_DT_FIM = '$inputDtFim'
			WHERE EVE_TITULO = '$getEvento' ";
			$query = mysqli_query($conect,$sql);
			header("Location:relatorio.php?num1=".$_SESSION['numLogin']);

		}


	}


	function eventosRestantes()
	{

		include "config.php";
		
		$usuCodigo = $_SESSION['codUser'];

		$sql = " SELECT COUNT(EVE_DT_FIM) as total FROM TB_EVENTOS JOIN TB_AGENDA ON EVE_AGE_CODIGO = AGE_CODIGO
 		WHERE AGE_USU_CODIGO = $usuCodigo AND YEAR(EVE_DT_FIM) = YEAR(now()) AND DAY(EVE_DT_FIM) >= DAY(NOW()) ";

 		$query = mysqli_query($conect,$sql);

 		while ($res = mysqli_fetch_array($query)) {
 			
 			$count = $res['total'];

 		}

 		echo $count;


	}

 ?>