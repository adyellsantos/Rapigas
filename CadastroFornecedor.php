<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Cadastrar Fornecedor</title>
</head>
<body><center><h1>Cadastrar Fornecedor</h1></center>
  <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="inserir_fornecedor.php" method="post">
  
								<div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">CNPJ</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="cnpj" placeholder="CNPJ" required>
                                    </div>
									</div>
									
									 <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Nome</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
                                    </div>
									</div>
									
                               <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Telefone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
                                    </div>
									</div>
									
								  <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Login</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="login" placeholder="login" required>
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Senha</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="senha" placeholder="senha" required>
                                    </div>
                                </div>
 
                                <div class="form-group">                                      
                                    <div class="col-md-offset-3 col-md-9">
                                     <input id="btn-signup" class="btn btn-info" type="submit" value="Cadastrar" name="enviar"/>  <a id="btn-login"  href="home.php" class="btn btn-success">Voltar</a>
                                    </div>
                                </div>
                           
</div>						
</form>
</center>
</body>
</html>