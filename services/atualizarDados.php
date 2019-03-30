<?php

require("../databases/mongoDao.php");

session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$experiencia = $_POST['experiencia'];

$emailLogado = $_SESSION['logado'];

$condicao = 
[
	'email'=>$emailLogado,
];

$atualizacao =
[
	'email'=>$email,
	'nome'=>$nome,
	'experiencia'=>$experiencia,
];


$result = atualizarMDB('usuario',$condicao,$atualizacao);

if($result->isAcknowledged()){
	$_SESSION['logado'] = $email;
	$_SESSION['msg'] = "Dados alterados com sucesso!";
	header('location:../pages/opcoes.php'); 
	exit();
}

$_SESSION['msg'] = "Falha na alteração dos dados!";
header('location:../pages/opcoes.php'); 

?>