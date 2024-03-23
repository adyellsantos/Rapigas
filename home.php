<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<?php
		session_start();
		
		if(!isset($_SESSION['id'])){
			echo"<script> alert (' VOCÊ PRECISA SE CONECTAR');
			window.location=\"index.php\";</script>";
		}
		
		else{
			
			$codigo= $_SESSION['id'];
			$nome= $_SESSION['nome'];
		}
		
		?>
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><font><font>
					Rapigás </font></font><small><font>usuarios cadastrado: <?php echo $nome; ?> <?php echo date('d/m/y -- H:i');?><font></font></font></small>
				</h1>
			</div>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#"><font><font>Casa</font></font></a>
				</li>
				<li>
   	<a href="cadastrarproduto.php"><font><font>Cadastrar Produto</font></font></a>

				</li>
				<li>
					<a href="CadastrarVendedor.php"><font><font>Cadastrar Vendedor</font></font></a>
				</li>
				<li>
					<a href="CadastroFornecedor.php"><font><font>Cadastrar Fornecedor</font></font></a>
				</li>
				<li>
					<a href="CadastrarEntregador.php"><font><font>Cadastrar Entregador</font></font></a>
				</li>
				<li>
					<a href="lista.php"><font><font>Listando Cliente</font></font></a>
				</li>
				
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle"><font><font>Mais</font></font><strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="fazerp.php"><font><font>Fazer Pedido</font></font></a>
						</li>
						<li>
							<a href="alterar.php"><font><font>Alterar Produto</font></font></a>
						</li>
						<li>
							<a href="mapa.html"><font><font>Mapa</font></font></a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#"><font><font>Ligação separado</font></font></a>
						</li>
					</ul>
				</li>
			</ul>
		
			<div class="jumbotron">
				<h2><font><font>
					Olá Mundo!
				</font></font></h2>
				<p><font><font>
					Rapigás </font><font>Rapigás </font><font>Rapigás
				</font></font></p>
				<p>
					<a class="btn btn-primary btn-large" href="#"><font><font>Aprender Mais</font></font></a>
				</p>
			</div> 

			 <div class="form-group">                                       
                                    <div class="col-md-offset-3 col-md-9">
                                       <a id="btn-login"  href="encerrar_sessao.php" class="btn btn-success">Sair</a
                                    </div>
                                </div>			
			<address>
				 <strong><font><font>Facebook, Inc.</font></font></strong><br><font><font>Rua.julio siqueira</font></font><br><font><font>Fortaleza-CE</font></font><abbr title="telefone"><font><font>P:60115082</font></font></abbr><font><font> (85) 98178-2900</font></font><br> <abbr title="telefone"></abbr>
			</address>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>