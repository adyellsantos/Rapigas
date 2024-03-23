<?php
$local = "localhost";
$usuario = "root";
$senha = "root";
$nome_banco = "rapigas"; 

$con = mysqli_connect($local, $usuario, $senha, $nome_banco);

if(!$con){
	
	die("Erro na conexao com banco!!! Erro:".mysqli_error());
	
}

?>