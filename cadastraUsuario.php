+<?php
require_once('conexao.php');
$users =$_POST['user'];
$password1 =$_POST['password1'];
$password2 =$_POST['password2'];

		if ($password2 == $password1) {
			
			$checking = ("SELECT * FROM users WHERE username=?");
			$queryOne = $conn->prepare($checking);
			$queryOne->bindParam(1,$users);
			$queryOne->execute();

			$stmt = $queryOne->fetchAll();	

			if($queryOne->rowCount() > 1){
				echo "Já existe um usúario com esse nome cadastrado";
				echo "<hr>";
				echo "<a href= cadastro.php> Voltar ao Cadastro</a>";
				echo "<br>";
				echo "<a href= login.php> Ir para o Login</a>";


			}else{
				$sql = "INSERT INTO Users(username, PASSWORD) VALUES(:u, :p)";
				$query = $conn->prepare($sql);
				$query->bindParam(':u',$users);
				$query->bindParam(':p',$password1);
				$query->execute();

				header('location: login.php');
			}
		}else{
			echo "As Senhas estão diferentes";
			echo "<hr>";
			echo "<a href= cadastro.php> Voltar ao Cadastro</a>";
			echo "<br>";
			echo "<a href= login.php> Ir para o Login</a>";
		}		

?>