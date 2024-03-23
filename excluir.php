<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<body>
<?php
 require_once "conexao.php";
 
 $id = $_GET['id'];
 mysql_query("DELETE FROM produto where id = '$id'");
 
 mysqli_close($con);
 echo '<meta charset=UTF-8>
 <script>alert("registro excluido")</script>';
 
 echo" <script>
 window.localhost=\"home.php\" </script>
 "
?>
</body>
</html>