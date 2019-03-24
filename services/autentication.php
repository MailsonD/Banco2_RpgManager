<?php
	
	require("../databases/mongoDao.php");

	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$query = [
				'email'=>$email,
				'senha'=>$senha,
				];

	$result = buscarMDB('usuario',$query);

	var_dump($result);
	if(!$result==null){
		header('location:pages/home.php'); 
	}else{
		$_SESSION['msg'] = "Erro de autenticação";
		header('location:../index.php'); 
	}

?>