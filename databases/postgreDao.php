<?php

require("conncectionPostgres.php");



function inserirPG($nomeTabela,$dados){
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

function buscarPG($nomeTabela,$condicao = null,$campos = '*'){
	$con = getConnection();	

	$condicao = ($condicao) ? " WHERE {$condicao} ": "";

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

function ataulziarPG($nomeTabela,$dadosAtualizar,$condicao = null){
	$con = getConnection();

	$condicao = ($condicao) ? " WHERE {$condicao} " : "";

	foreach ($data as $chave => $valor){
        $campos[] = "{$chave} = '{$valor}'";
    }

    $campos = implode(', ', $campos);

    $query = "UPDATE {$nomeTabela} SET {$campos}{$condicao}";

    $result = pg_query($con,$query);

    if($result){
    	return true;
    }else{
    	return false;
    }

	closeConnection($con);
}

function deletarPG($nomeTabela,$condicao){
	$con = getConnection();

	$condicao = ($condicao) ? " WHERE {$condicao} " : "";

	$query = "DELETE FROM {$nomeTabela} {$condicao}";

	$result = pg_query($con,$query);

	closeConnection($con);

	if($result){
		return true;
	}else{
		return false;
	}

}



//Créditos a:
// https://github.com/romulo-soares/CRUDMySqlGenerico-PHP/blob/master/crudMySql.php

//Baseado e adaptado;


?>