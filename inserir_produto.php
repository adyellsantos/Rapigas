<meta charset="utf-8"/>
<?php

	require_once "conexao.php";//chamando a page de conexão

	$quantidade = $_POST['quantidade'];
	$marca = $_POST['marca'];
    $preco = $_POST['preco'];
    
	
	$sql = "insert into produto (quantidade, marca, preco) values ('$quantidade', '$marca', '$preco')";
	
	$resultado = mysqli_query($con, $sql);
	
	if(!$resultado){
		echo ("Erro ao inserir dados!!! ".mysql_error());
		
	}else {
		echo "Produto cadastrado com sucesso!";
		
	}
?>
