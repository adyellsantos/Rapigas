<?php

		session_start();

unset ($SESSION['codigo_sessao']);
unset ($SESSION['nome_sessao']);

session_destroy();


echo "<script> alert('volte sempre');
			window.location=\"index.php\";</script>";

?>