<?php

require("../databases/mongoDao.php");

session_start();

$nomePersonagem = $_GET['nomePersonagem'];

echo $nomePersonagem;

$emailLogado = $_SESSION['logado'];

$condicao = [
	'email'=>$emailLogado,	
];


$result = buscarMDB('usuario',$condicao); 

$personagens = $result['personagens'];

foreach ($personagens as $personagem) {
	if($nomePersonagem === $personagem['nome']){
		$_SESSION['personagemSelecionado'] = 
		[
			'nome'=>$personagem['nome'],
			'avatar'=>$personagem['avatar'],
			'classe'=>$personagem['classe'],
		];
		echo $personagem['nome'];
		echo $personagem['avatar'];
		echo $personagem['classe'];
		header('location:../pages/home.php');
		exit();
	}
		
}

header('location:../pages/home.php');



?>