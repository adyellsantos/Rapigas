<?php 

//erro 1 = Usu?rio n?o cadastrado
//erro 2 = Mais de um usu?rio cadastrado com o mesmo login
//erro 3 = Senha n?o confere
session_start();
 require_once "conexao.php";

$login = addslashes($_POST['login']);
$senha = addslashes($_POST['senha']);

$consulta 	= mysqli_query("SELECT * FROM ".cliente." cliente ".adm." adm WHERE login = '$login' AND cliente = login AND adm = 1");

$total 		= mysqli_num_rows($con, $consulta);
 
if($total == 0) 	header("Location: home.php?erro=1&user=$login");
elseif($total > 1) 	header("Location: home.php?erro=2&user=$login");

else
{
	$linha = mysql_fetch_assoc($consulta);
	
	if($senha != $linha['senha']) header("Location: home.php?erro=3&user=$login");
	else
	{
		$_SESSION['id'] = $linha['id'];
		$_SESSION['nome'] = $linha['nome'];
		
		//---------------------------------------------------------CRIANDO SE??ES DE PERMISS?ES DE USU?RIOS
	
		
		if($linha['adm'] == 1)
		{
			$_SESSION['adm'] = 1;
			$_SESSION['adm']					= $linha['adm'];
		
		
		}			
		
		//---------------------------------------------------------CRIANDO SE??ES DE PERMISS?ES DE USU?RIOS  - FIM
		
		log_user($_SESSION['login'], 'login', 0, login);
		
		header("Location: home.php".$_DADOS['home.php']."");
	}
}

?>