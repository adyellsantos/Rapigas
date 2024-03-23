<?php
      session_start();
       
      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }
       
      //adiciona produto
       
      if(isset($_GET['acao'])){
          
         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['carrinho'][$id])){
               $_SESSION['carrinho'][$id] = 1;
            }else{
               $_SESSION['carrinho'][$id] += 1;
            }
         }
          
         //REMOVER CARRINHO
         if($_GET['acao'] == 'del'){
            $id = intval($_GET['id']);
            if(isset($_SESSION['carrinho'][$id])){
               unset($_SESSION['carrinho'][$id]);
            }
         }
          
         //ALTERAR QUANTIDADE
         if($_GET['acao'] == 'up'){
            if(is_array($_POST['prod'])){
               foreach($_POST['prod'] as $id => $qtd){
                  $id  = intval($id);
                  $qtd = intval($qtd);
                  if(!empty($qtd) || $qtd <> 0){
                     $_SESSION['carrinho'][$id] = $qtd;
                  }else{
                     unset($_SESSION['carrinho'][$id]);
                  }
               }
            }
         }
      }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php  require_once "conexao.php";?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title></title>
</head>
 
<body>
<table>
    <caption>Carrinho de Compras:</caption>
    <thead>
          <tr>
            <th width="244">Produto</th>
            <th width="79">Quantidade</th>
            <th width="89">Pre&ccedil;o</th>
            <th width="100">SubTotal</th>
            <th width="64">Remover</th>
          </tr>
    </thead>
            <form action="" method="post">
    <tfoot>
           <tr>
            <td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
            <tr>
            <td colspan="5"><a href="fazerp.php">Continuar Comprando</a></td>
    </tfoot>
      
    <tbody>
               <?php
                     if(count($_SESSION['carrinho']) == 0){
                        echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
                     }else{
                         require_once "conexao.php";
                                                               $total = 0;
                        foreach($_SESSION['carrinho'] as $id => $qtd){
                              $sql   = "SELECT *  FROM produto WHERE id= '$id'";
                              $qr    = mysqli_query($con, $sql) or die(mysql_error());
                              $ln    = mysqli_fetch_assoc($qr);
              
                              $marca = $ln['marca'];
                              $preco = number_format($ln['preco'], 2, ',', '.');
                              $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                               
                              $total += $ln['preco'] * $qtd;
                            
                           echo '<tr>       
                                 <td>'.$marca.'</td>
                                 <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                 <td>R$ '.$preco.'</td>
                                 <td>R$ '.$sub.'</td>
                                 <td><a href="?acao=del&id='.$id.'">Remove</a></td>
                              </tr>';
                        }
                           $total = number_format($total, 2, ',', '.');
                           echo '<tr>
                                    <td colspan="4">Total</td>
                                    <td>R$ '.$total.'</td>
                              </tr>';
                     }
               ?>
    
     </tbody>
        </form>
</table> <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <a id="btn-login"  href="venda.php" class="btn btn-success">Comprar </a>
                                    <div class="col-sm-12 controls">

                                      <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login com Facebook</a>-->
 
                                    </div>
                                </div>
  <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <a id="btn-login"  href="home.php" class="btn btn-success">Voltar  </a>
                                    <div class="col-sm-12 controls">

                                      <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login com Facebook</a>-->
 
                                    </div>
                                </div>
</body>
</html>