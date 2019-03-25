<?php

require("../databases/mongoDao.php");

session_start();

$emailLogado = $_SESSION['logado'];

$nome = $_POST['nome'];
$raca = $_POST['raca'];
$naturalidade  = $_POST['naturalidade'];
$adoracao = $_POST['adoracao'];

$document = [
				'personagens'=>[
									[
										'nome'=>$nome,
										'raca'=>$raca,
										'naturalidade'=>$naturalidade,
										'adoracao'=>$adoracao,
									],
								],	
			];				

$condicao = [
				'email'=>$emailLogado,
			];

$result = adicionarAtributoMDB('usuario',$condicao,$document);				

?>

