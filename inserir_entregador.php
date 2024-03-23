<?php

	require_once "conexao.php";//chamando a page de conexão

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
    $login = $_POST['login'];
     $senha= $_POST['senha'];
	
	$sql = "insert into produto (nome, telefone, login, senha) values ('$nome', '$telefone', '$login', '$senha')";
	
	$resultado = mysqli_query($con, $sql);
	
	if(!$resultado){
		echo ("Erro ao inserir dados!!! ".mysql_error());
		
	}else {
		echo "entregador cadastrado com sucesso!";
		
	}
?>
