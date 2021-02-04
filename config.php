<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "db_agenda";

$conect = mysqli_connect($servername, $username, $password, $dbName);

mysqli_set_charset($conect,"utf8");




 ?>