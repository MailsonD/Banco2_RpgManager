<?php
	
	require("../databases/mongoDao.php");

	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$experiencia = $_POST['experiencia'];

	$document = [
				'email'=>$email,
				'senha'=>$senha,
				'nome'=>$nome,
				'experiencia'=>$experiencia,
				];

	if(!buscarMDB('usuario',['email'=>$email,]) == null){
		$_SESSION['msg'] = "Já existe um usuário cadastrado com esse email!";
	}else{
		$result = inserirMDB("usuario",$document);

		if($result->isAcknowledged()){
			$_SESSION['msg'] = "cadastrado com sucesso!";
		}else{
			$_SESSION['msg'] = "Não foi possível concluir o cadastro!";
		}
	}


	header('location:../index.php'); 
	

?>