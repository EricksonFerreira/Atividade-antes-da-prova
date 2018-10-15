<?php
require_once('conexao.php');
session_start();
$userId = $_SESSION['id'];
$id = $_GET['id'];
$user = $_SESSION['user'];
$consulta = $conn -> query("SELECT * FROM tasks where user_id='$userId' and id='$id'");
 $linha = $consulta->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $linha['task'];?></title>
</head>
<body>
	<h1>Seu id é: <?=$linha['id'];?></h1>
	<hr>
	<h2>Seu user_id é: <?=$linha['user_id'];?></h2>
	<hr>
	<h3>Seu task é: <?=$linha['task'];?></h2>
	<hr>
	<h4>Seu done é: <?=$linha['done'] == Null ? "O evento ainda vai ser executado" : "Já houve o evento";?></h2>
	<hr>
	<a href="index.php">Voltar</a>
</body>
</html>