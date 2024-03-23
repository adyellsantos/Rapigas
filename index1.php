<meta charset="utf-8"/>
<?php
/*login do usuario */

require_once "conexao.php";
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "select * from cliente where login='$login' and senha='$senha'";
	$resultado = mysqli_query($con, $sql);
	
	$linha = mysqli_num_rows($resultado);
	
		if($linha==0){
			echo "Login e/ou senha invalido!!!";	
		}else{
		 $usuario = mysqli_fetch_array($resultado);
			
			session_start();
			
			$_SESSION['id'] = $usuario["id"];
			$_SESSION['nome'] = $usuario["nome"];
			
			header("location:home.php");
			
		}


?>