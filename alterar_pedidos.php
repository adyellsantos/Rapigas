<?php
require_once "conexao.php";
$quantidade =$_REQUEST['quantidade'];
$marca =$_REQUEST['marca'];
$preco =$_REQUEST['preco'];

 $sql = "insert into produto
            (quantidade, marca, preco)
 values('$quantidade', '$marca', '$preco')			
 ";
    mysqli_query($con, $sql);
	
	//
	header('location: lista.php');
?>