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
	<title>Login</title>
</head>
<body>
	<form action="auth.php" method="POST">
		<input type="text" name="user" placeholder="Usuario" required="">
		<input type="password" name="password" placeholder="Password" required="">
		<input type="submit">
		<hr>	
		<a href="cadastro.php">Cadastre-se</a>
	</form>
</body>
</html>