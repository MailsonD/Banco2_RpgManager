<?php

require("../databases/mongoDao.php");

session_start();

$emailLogado = $_SESSION['logado'];

$nome = $_POST['nome'];
$raca = $_POST['raca'];
$naturalidade  = $_POST['naturalidade'];
$adoracao = $_POST['adoracao'];
$avatar = $_POST['avatar'];

$condicao = [
	'email'=>$emailLogado,
];

$result;

if(buscarMDB('usuario',$condicao)['personagens'] == null){
	echo "setando";
	$document = [
		'personagens'=>[
			[
				'nome'=>$nome,
				'raca'=>$raca,
				'naturalidade'=>$naturalidade,
				'adoracao'=>$adoracao,
				'avatar'=>$avatar,
			],
		],	
	];

	$result = atualizarMDB('usuario',$condicao,$document);					

}else{
	echo "adicionando";
	
	$document = [
		'personagens'=>[
			'nome'=>$nome,
			'raca'=>$raca,
			'naturalidade'=>$naturalidade,
			'adoracao'=>$adoracao,
			'avatar'=>$avatar,
		],	
	];

	$result = adicionarAtributoMDB('usuario',$condicao,$document);
}


if($result ->isAcknowledged()){
	$_SESSION['msg'] = "Personagem cadastrado com sucesso!";

}else{
	$_SESSION['msg'] = "Deu pau no cadastro de personagem!";
}

//header('location:../pages/home.php'); 

?>

