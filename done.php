<?php
require_once('conexao.php');
$id = $_GET['id'];
$stmt = $conn->prepare("UPDATE tasks SET done = 1 WHERE id = ?");
$stmt->execute([$id]);
header('location: index.php');