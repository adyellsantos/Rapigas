<?php
require_once "conexao.php";

//campos recebidos pelo formulario
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$login = $_POST['login'];
$senha = $_POST['senha'];

	  $query = mysqli_num_rows(mysqli_query($con,"select * from cliente where cpf = '$cpf'"));
	if($query > 0){
		echo "<script>alert('Cliente já existe.'); history.back();</script>";
		}else{
			mysqli_query($con, "insert into cliente (nome, cpf, endereco, telefone, login, senha) values ('$nome', '$cpf', '$endereco', '$telefone', '$login', '$senha')");
			echo "<script>alert('Cliente cadastrado com suscesso.');</script>";
			header("localhost:home.php");
	 }
 
?>