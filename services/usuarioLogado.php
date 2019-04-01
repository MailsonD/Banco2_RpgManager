<?php

require("../databases/mongoDao.php");

$emailLogado = $_SESSION['logado'];

$condicao = [
	'email'=>$emailLogado,	
];


$result = buscarMDB('usuario',$condicao); 

echo 'var usuarioLogado = \''.$result['nome'].'\';';

?>