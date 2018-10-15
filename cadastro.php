<?php 
session_start();
if (isset($_SESSION['user'])) {
	echo "Você está logado";
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadastro</title>
	<style>
	.a1{
		margin: auto;
		width: 50%	;
		}	
	</style>  
</head>
<body>
	<form action="cadastraUsuario.php" method="POST" class="a1">
		<input type="text" name="user" placeholder="usuario" required=""><br>
		<input type="password" name="password1" placeholder="Password" required="">
		<input type="password" name="password2" placeholder="Repeat Password" required=""><br>
		<input type="submit" value="cadastrar">
	</form>
<a href="login.php">login</a>
</body>
</html>