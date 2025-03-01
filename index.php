﻿
<html>
<head lang="pt-br">
<title>Rapigás</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <title>Rapigás</title>
</head>
<body>
    <div class="container-fluid">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu a senha?</a></div>
                    </div>     
 
                    <div style="padding-top:30px" class="panel-body" >
 
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="index1.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login" type="text" class="form-control" name="login" value="" placeholder="Usuário">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="senha" type="password" class="form-control" name="senha" placeholder="Senha">
                                    </div>
                                    
                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
                                        </label>
                                      </div>
                                    </div>
 
 
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                   <input id="btn-login"class="btn btn-success" type="submit" value="Login" name="Login"/> 
                                    <!--<a id="btn-login"  href="index1.php" class="btn btn-success">Login  </a>-->
                                    <div class="col-sm-12 controls">

                                      <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login com Facebook</a>-->
 
                                    </div>
                                </div>
 
 
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Não tem uma conta! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Crie uma agora.
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     
 
 
 
                        </div>                     
                    </div>  
        </div>
<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Criar Login</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="inserir_usuario.php" method="post">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>
                                                       
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Nome Completo</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nome" placeholder="Nome completo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">CPF</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="cpf" placeholder="Apenas números, ex: 00011122233">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="endereco" class="col-md-3 control-label">Endereço</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="endereco" placeholder="Ex: Rua, Nº, Bairro, Cidade, Estado">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Telefone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="telefone" placeholder="Telefone">
                                    </div>
                                </div>
								  <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Login</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="login" placeholder="login">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Senha</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="senha" placeholder="senha">
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                     <input id="btn-signup" class="btn btn-info" type="submit" value="Cadastrar" name="enviar"/> 
                                       <!-- <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>-->
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <!--<div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
                                    </div>-->
                                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar à tela de Login <<<</a></div>                                           
                                        
                                </div>         
                            </form>
                         </div>
                    </div>
                    
            </div> 
    </div>
</body>
</html>