<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="Stylesheet" type="text/css" href="stylle/styll.css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Documento sem título</title>
</head>
<body>
<center>
<center><h1>Cadastrar Produto</h1></center></br></br>
 <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="inserir_produto.php" method="post">
								<div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Quantidade:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" required>
                                    </div>
                                </div>
								
								  <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Marca:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="marca" placeholder="Marca" required>
                                    </div>
									</div>
									
									 <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Preço:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="preco" placeholder="Preço" required>
                                    </div>
									</div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                     <input id="btn-signup" class="btn btn-info" type="submit" value="Cadastrar" name="enviar"/>   <a id="btn-login"  href="home.php" class="btn btn-success">Voltar  </a>
                                       <!-- <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>-->
                                    </div>
                                </div>
                           							
</form>
</div></center>
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

</body>
</html>