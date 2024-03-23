<?php require_once "conexao.php";
//listagem de Produtos

 $sql = "select * from produto";
 
 $resultado = mysqli_query($con,$sql);
 
 $dados = mysqli_fetch_array($resultado);
 
  while($dados = mysqli_fetch_array($resultado)){
 $id= $dados['id'];
 $quantidade= $dados['quantidade']; 
 $marca= $dados['marca'];
 $preco= $dados['preco'];
 
  echo"ID: $id 
   Quantidade: $quantidade
   Marca: $marca 
    preco: $preco <br />";
  }
?>