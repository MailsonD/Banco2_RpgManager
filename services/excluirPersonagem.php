<?php

require("../databases/mongoDao.php");

session_start();

$personagemExcluir = $_GET['nomePersonagem'];

$emailLogado = $_SESSION['logado'];

$condicao = [
	'email'=>$emailLogado,	
];

$remover = 
[
	'personagens'=>[
						'nome'=>$personagemExcluir,
					],
];

$result = removerAtributoMDB('usuario',$condicao,$remover);

if($result->isAcknowledged()){
	$_SESSION['msg'] = "Personagem excluído com sucesso!";
	header('location:../pages/home.php');
	exit();
}else{
	$_SESSION['msg'] = "Falha na exclusão!";
	header('location:../pages/home.php');
	exit();
}

?>