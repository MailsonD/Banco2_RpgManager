<?php

require("../databases/mongoDao.php");

session_start()

$emailLogado = $_SESSION['logado'];

$condicao = 
[
	'email'=>$emailLogado,
];

$atualizacao;

if(isset($_SESSION['estadoMusica']) && $_SESSION['estadoMusica'] == "ligado"){

	$atualizacao =
	[
		'estadoMusica'='desligado',
	];

	$_SESSION['msg'] = "Musica desligada!";

	$_SESSION['estadoMusica'] = 'desligado';

}else{
	$atualizacao =
	[
		'estadoMusica'='ligado',
	];

	$_SESSION['msg'] = "Musica ligada!";

	$_SESSION['estadoMusica'] = 'ligado';
}


atualizarMDB('usuario'$condicao,$atualizacao);

header('location:../pages/opcoes.php'); 	

?>