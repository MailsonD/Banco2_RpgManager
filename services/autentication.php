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
		header('location:pages/home.php'); 
	}else{
		$_SESSION['msg'] = "Erro de autenticação";
		header('location:../index.php'); 
	}

?>