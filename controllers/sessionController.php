<?php
//Esta funcnionalidade Cria uma nova sessão caso não exista.
//Caso já exista uma sessão criada para o usuário, ela irá continuar aquela sessão
require_once __DIR__ . "/../vendor/mongodb/mongodb/src/Model/BSONDocument.php";

session_start();
//Verifica não existe nenhuma variável setada na sessão com o nome de login
//Caso não exista, o usuário não estará logado e deverá retornar a página de login
if(!isset ($_SESSION['logado'])){
	unset($_SESSION['logado']);
	header('location:../index.php');
	exit();
}

$logado = $_SESSION['logado'];
?>