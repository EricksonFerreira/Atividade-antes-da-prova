<?php 
require_once('conexao.php');
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM tasks WHERE id=?");
$stmt->execute([$id]);
header('location: index.php');
