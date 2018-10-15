<?php 
session_start();
require_once('conexao.php');
$id = $_SESSION['id'];
$evento = $_POST['evento'];

$sql = "INSERT INTO tasks(user_id, task) VALUES(:u, :t)";
$query = $conn->prepare($sql);
$query->bindParam(':u',$id);
$query->bindParam(':t',$evento);
$query->execute();

 header('location: index.php');
