<?php


	require_once "conexao.php";//chamando a page de conexão

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
   $cartao = $_POST['cartao'];
	
	$sql = "insert into venda (nome, telefone, cartao) values ('$nome', '$telefone', 'cartao')";
	
	$resultado = mysqli_query($con, $sql);
	
	if(!$resultado){
		echo ("Erro ao inserir dados!!! ".mysql_error());
		
	}else {
		echo "Venda  com sucesso!";
		
	}
?>