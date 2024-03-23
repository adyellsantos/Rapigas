<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Documento sem título</title>
</head>
<body>
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
                                     <input id="btn-signup" class="btn btn-info" type="submit" value="alterar" name="enviar"/>   <a id="btn-login"  href="home.php" class="btn btn-success">Voltar  </a>
                                       <!-- <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>-->
                                    </div>
                                </div>
                           							
</form>
</div>
</body>
</html>