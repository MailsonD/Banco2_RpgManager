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
	echo "excluiu";
	if(isset($_SESSION['personagemSelecionado'])){
		echo "personagem selecionado";
		$selecionado = $_SESSION['personagemSelecionado'];
		if($selecionado['nome'] == $personagemExcluir){
			echo "excluiu da sessão";
			unset($_SESSION['personagemSelecionado']);
		}
	}
	$_SESSION['msg'] = "Personagem excluído com sucesso!";
	header('location:../pages/home.php');
	exit();
}else{
	$_SESSION['msg'] = "Falha na exclusão!";
	echo "nao foi";
	header('location:../pages/home.php');
	exit();
}

?>