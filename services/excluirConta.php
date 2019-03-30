<?php

require("../databases/mongoDao.php");

session_start();

$emailLogado = $_SESSION['logado'];

$condicao =
[
	'email'=>$emailLogado,
];

$result = removerMDB('usuario',$condicao);

if($result->isAcknowledged()){
	session_destroy();
	header('location:../index.php');
	exit(); 
}else{
	$_SESISON['msg'] = "Não foi possível excluir a conta!";
	header('location:../pages/opcoes.php');
	exit(); 
}

?>