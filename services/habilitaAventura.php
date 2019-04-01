<?php

	if(!isset($_SESSION['personagemSelecionado'])){
		unset($_SESSION['personagemSelecionado']);
		$_SESSION['msg'] = "Não é possível entrar no modo aventura sem um persoangem!";
		header('location:../pages/home.php');
		exit();
	}
?>