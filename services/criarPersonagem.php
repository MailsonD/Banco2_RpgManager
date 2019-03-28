<?php

require("../databases/mongoDao.php");

session_start();

$emailLogado = $_SESSION['logado'];

$nomePersonagem = $_POST['nome'];
$raca = $_POST['raca'];
$classe  = $_POST['classe'];
$adoracao = $_POST['adoracao'];
$avatar = $_POST['avatar'];

$condicao = [
	'email'=>$emailLogado,	
];


$result = buscarMDB('usuario',$condicao); 

$personagens = $result['personagens'];

foreach ($personagens as $personagem) {
	if($nomePersonagem == $personagem['nome'] ){
		$_SESSION['msg'] = "Já existe um personagem com este nome!";
		header('location:../pages/home.php');
		exit(); 
	}		
}


if(buscarMDB('usuario',$condicao)['personagens'] == null){
	$document = [
		'personagens'=>[
			[
				'nome'=>$nomePersonagem,
				'raca'=>$raca,
				'classe'=>$classe,
				'adoracao'=>$adoracao,
				'avatar'=>$avatar,
			],
		],	
	];

	$result = atualizarMDB('usuario',$condicao,$document);					

}else{
	
	$document = [
		'personagens'=>[
			'nome'=>$nomePersonagem,
			'raca'=>$raca,
			'classe'=>$classe,
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

header('location:../pages/home.php'); 

?>

