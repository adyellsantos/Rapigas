<?php
require_once "conexao.php";

//campos recebidos pelo formulario
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$login = $_POST['login'];
$senha = $_POST['senha'];

	  $query = mysqli_num_rows(mysqli_query($con,"select * from fornecedor where cnpj = '$cnpj'"));
	if($query > 0){
		echo "<script>alert('Fornecedor já existe.'); history.back();</script>";
		}else{
			mysqli_query($con, "insert into fornecedor (cnpj, nome, telefone, login, senha) values ('$cnpj', '$nome', '$telefone', '$login', '$senha')");
			echo "<script>alert('Fornecedor cadastrado com suscesso.');</script>";
			header("localhost:home.php");
	 }
 
?>