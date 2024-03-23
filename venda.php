<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Cadastrar Entregador</title>
</head>
<body>
<center><h1>Cadastrar venda</h1></center>
   <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="inserir_venda.php" method="post">
                               
								<div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Nome Completo</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>
                                    </div>
                                </div>
								  <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Telefone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
                                    </div>
									
									<div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Cartão:</label>
                                    <div class="col-md-9">
                                      <td><select name="qtd_pro" id="qtd_pro">
          <option value="mastercard">mastercard</option>
          <option value="visa card">visa card</option>
          <option value="elo">elo</option>
        
        
      </select></td>
                                    </div>
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                     <input id="btn-signup" class="btn btn-info" type="submit" value="vender" name="vender"/>   <a id="btn-login"  href="home.php" class="btn btn-success">Voltar  </a>
                                       <!-- <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>-->
                                    </div>
                                </div>
                           	
</div>								
</form>
</div>
</body>
</html>