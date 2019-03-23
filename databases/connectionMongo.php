<?php

//É necessário importar via linha de comando
//$ composer require mongodb/mongodb

//este comando só funcionará após rodar o composer no temrinal
require_once __DIR__ . "/../vendor/autoload.php";

function getConnectionMongo(){

	//teste é o nome do banco
	$db = (new MongoDB\Client)->teste;

	return $db;

}

?>