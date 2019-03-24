<?php

require("conncectionPostgres.php");



function inserir($nomeTabela,$dados){
	$con = getConnection();	
	$campos = implode(', ', array_keys($data));
    $valores = "'".implode("', '", $data)."'";

    $query = "INSERT INTO {$table} ({$fields}) VALUES ({$values})";

    $result = pg_query($con,$query);

    closeConnection($con);

    if($result){
    	return true;
    }else{
    	return false;
    }
}

function buscar($nomeTabela,$condicao = null,$campos = '*'){
	$con = getConnection();	

	$condicao = ($condicao) ? " {$condicao} ": null;

	$query = "SELECT {$campos} FROM {$nomeTabela} {$condicao}";

	$results = pg_query($con,$query);

	$resultadoFinal = array();
	$i=0

	if($results){
		while($resultado = pg_fetch_array($results)){
			$resultadoFinal[i++] = $resultado;
		}
	}else{
		return null;
	}

	return $resultadoFinal;

	closeConnection($con);
}



?>