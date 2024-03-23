<meta charset="utf-8"/>
<?php

	require_once "conexao.php";//chamando a page de conexão


	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$login = $_POST['login'];
    $senha=$_POST['senha'];
	
	$sql = "insert into vendedor (nome, cpf, telefone, login, senha) 
	values ('$nome', '$cpf', '$telefone', '$login', '$senha')";
	
	$resultado = mysqli_query($con, $sql);
	
	if(!$resultado){
		echo ("Erro ao inserir dados!!! ".mysql_error());
		
	}else {
		echo "Usuario cadastrado com sucesso!!!";
		
	}
?>
