<?php
  session_start();


	if (isset($_SESSION['numLogin'])) {
      $n1 = $_GET['num1'];
      $n2 = $_SESSION['numLogin'];

  if ($n1 == null or $n2 == null) {
      echo "<a href='index.php'>Login não efetuado, volte aqui</a>";
      header("Location: index.php");

  } else if ($n1 != $n2) {     
      echo "<a href='index.php'>Login não efetuado, volte aqui</a>";
      header("Location: index.php");    
  }

  } else {
      echo "<a href='index.php'>Login não efetuado, volte aqui</a>";
      header("Location: index.php");
  }

	



?>