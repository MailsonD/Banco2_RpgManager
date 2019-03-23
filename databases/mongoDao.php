<?php

//Este arquivo simula um DAO generico para arquivos do mongo

require("connectionMongo.php");

//A estrutura de um documento para ser inserido é:
// [
//	'nome'=>'Mailson',
//	'senha'=>'321',
// ]

//multidocumentos:
//[
//	 [
//		'nome'=>'Mailson',
//		'senha'=>'321',
//	 ],
//	 [
//		'nome'=>'Camila',
//		'senha'=>'123',
//	 ],
//]


//Para rodar o resultado de uma consulta é necessário:
//
//foreach($result as $document){
//	--CODE	
//}
//
//para acessar um campo do documento basta por:
//$document['campo'];
//



//Pega a conexão e utiliza como variável global
//Esta variável está com escopo global, porém ainda é necessário especificar isso na função
$db = getConnectionMongo();

//função genérica para inserir um documento qualquer em uma coleção qualquer
function inserir($nomeColecao,$documento){
	global $db;
	$db->$nomeColecao->insertOne($documento);	
}

//função genérica para buscar um único documento do banco
function  buscar($nomeColecao,$documento){
	global $db;
	return $db->$nomeColecao->findOne($documento);
}

//função genérica que lista todos os documentos de uma determinada coleção
function listar($nomeColecao){
	global $db;
	return $db->$nomeColecao->find();
}

//função genérica que lista todos os documentos que atendem a uma 
//determianda condição
function buscarPorCondicao($nomeColecao,$condicao){
	global $db;
	return $db->$nomeColecao->find($condicao);
}

//função genérica para atualizar um ou vários documentos que atende a uma
//determianda condição
function atualizar($nomeColecao,$condicao,$atualizacao){
	global $db;
	$db->$nomeColecao->updateMany(
		$condicao,
		['$set' => $atualizacao]
	);
}

//função genérica para excluir um ou vários documentos que atendem a uma condição
function remover($nomeColecao,$condicao){
	global $db;
	$db->$nomeColecao->deleteMany($condicao);
}


?>