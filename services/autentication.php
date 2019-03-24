<?php
	
	require("../databases/mongoDao.php");

	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$document = [
				'email'=>$email,
				'senha'=>$senha,
				];

	$result = buscarMDB('usuario',$document);


	if(!$result==null){
		$_SESSION['logado'] = $email;
		header('location:../pages/home.php'); 
	}else{
		$_SESSION['msg'] = "Erro de autenticação";
		header('location:../index.php'); 
	}

?>