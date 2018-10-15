<?php
	require_once('conexao.php');
	$user = $_POST['user'];
	$password = $_POST['password'];
	
	$query = $conn->prepare("SELECT * FROM Users WHERE username=? and PASSWORD=? ");
	$query->bindParam(1,$user);
	$query->bindParam(2,$password);
	$query->execute();

	$selec = $query->fetch();
	$id = $selec['id'];
	
	if ($query->rowCount() >= 1){
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['id'] = $id;
		header('location: index.php');	
	}else{
		header('location: login.php');	
	}