<?php
require_once('conexao.php');
session_start();
$id = $_SESSION['id'];
$user = $_SESSION['user'];
$consulta = $conn -> query("SELECT * FROM tasks where user_id=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Minha lista de tarefas</h1>
    <p>Usuário:  <?=$user;?> | <a class="logout" href="logout.php">Sair</a></p>
    <form action="cadastraEvento.php" method="POST" class="addtask">
        <table class="tasks">
            <tbody><tr>
                <th>Tarefa</th>
                <th>Ações</th>
            </tr>
            <?php while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){?>
            <tr class="task">
	                <td class="<?php echo $linha['done'] == 1 ? "done":"todo"; ?>">
	                <a href="visualizarEvento.php?id=<?=$linha['id'];?>"><?=$linha['task'];?></a>
	                </td>
                    <td class="action">
					<a class="taskdone" href="done.php?id=<?=$linha['id'];?>">✔</a>
					<a class="rmtask" href="excluirEvento.php?id=<?=$linha['id'];?>">✗</a>
                    </td>
            </tr>
           <?php }?> 
            <tr>
                    <td><input type="text" name="evento" placeholder="evento" required=""></td>
                    <td class="action"><input type="submit" value="ok"></td>
            </tr>
        </tbody></table>
    </form>

</body>