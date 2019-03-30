<?php 

require("../databases/mongoDao.php");

$condicao = 
[
	'email'=>$_SESSION['logado'],			
];

$usuarioLogado = buscarMDB('usuario',$condicao);
	

?>