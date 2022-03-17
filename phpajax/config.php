<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "R2";

$connect = mysqli_connect($host, $user, $password);

if (!$connect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

$db = mysqli_select_db($connect, $db);

?>