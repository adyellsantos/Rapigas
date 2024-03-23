
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title></title>
</head>
<body>
<?php
    require_once "conexao.php";
       
      $sql = "SELECT * FROM produto";
      $qr = mysqli_query($con,$sql) or die(mysql_error());
      while($linha = mysqli_fetch_assoc($qr)){
         echo '<h2>'.$linha['marca'].'</h2> <br />';
         echo 'Preço : R$ '.number_format($linha['preco'], 2, ',', '.').'<br />';
      
         echo '<a href="carrinho.php?acao=add&id='.$linha['id'].'">Comprar</a>';
         echo '<br /><hr />';
      }
?>
 <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <a id="btn-login"  href="home.php" class="btn btn-success">Voltar  </a>
                                    <div class="col-sm-12 controls">

                                      <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login com Facebook</a>-->
 
                                    </div>
                                </div>
</body>
</html>