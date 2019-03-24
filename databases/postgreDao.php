<?php

require("conncectionPostgres.php");


//Este arquivo server como um DAO genério para o postgresql
//que funciona com qualquer tabela que desejar


//ADICIONA UMA TUPLA AO UMA TABELA DO BANCO
//==PARAMETROS==
//
//PARAM_1
//$nomeTabela irá receber o nome da tabela onde será feita a ação
//EX  =>  $nomeTabela = 'usuario';
//
//PARAM_2
//$dados recebe um array chave valor
//EX  =>  $dados = [
//				'nome'=>'Mailson',
//				'senha'=>'123321',
//			]
//A parte das chaves são os nomes das colunas onde será inserido
//A parte do valor será o valor inserido aquela coluna 
//
//RETORNO
//Retorna true caso a insersão tenha sido feita com sucesso. Caso contrário retorna false
//
//EXEMPO DE USO inserirPG("usuario",['nome'=>'mailson','senha'=>'123']); 
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

//BUSCA UMA OU MAIS TUPLAS DE UMA TABELA ESPECIFICA
//==PARAMETROS==
//
//PARAM_1
//$nomeTabela irá receber o nome da tabela onde será feita a ação
//EX  =>  $nomeTabela = 'usuario';
//
//PARAM_2 == OPCIONAL
//$condicao irá receber uma determianda condição de busca para a consulta
//EX  =>  $condicao = "nome = 'Mailson'";
//
//PARAM_3 == OPCIONAL
//$campos informa qual a projeção desejada
//EX  =>  $campos = "nome" faria com que a consulta só retornasse o nome
//Caso não haja valor, a função considera que deve retornar todos as colunas
//
//RETORNO
//Caso não tenha resultado retorna null;
//Caso a consulta tenha sido um sucesso, ele retornará um array bidimencional, onde cada indice guadara o resultado de uma linha
//EX DE ACESSO => $resultado[0]['nome']; retorna o nome da primeira linha que a consulta trouxe
//
//EXEMPLO DE USO buscarPG("usuario"," nome='Mailson'"," senha " );
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

//BUSCA UMA OU MAIS TUPLAS DE UMA TABELA ESPECIFICA
//==PARAMETROS==
//
//PARAM_1
//$nomeTabela irá receber o nome da tabela onde será feita a ação
//EX  =>  $nomeTabela = 'usuario';
//
//PARAM_2 
//$dadosAtualizar irá receber um array chave valor com os campos que se deseja atualizar
//EX  =>  $dadosAtualizar = [
//							'senha'=>'654123',
//						]
//
//PARAM_3 == OPCIONAL
//$condicao receberá uma condição a ser aplicada para a atualização
//EX  =>  $condicao = " nome = 'Mailson' ";
//
//RETORNO
//Retorna true caso a atualização tenha sido um sucesso
//Caso contrário retorna false
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

//BUSCA UMA OU MAIS TUPLAS DE UMA TABELA ESPECIFICA
//==PARAMETROS==
//
//PARAM_1
//$nomeTabela irá receber o nome da tabela onde será feita a ação
//EX  =>  $nomeTabela = 'usuario';
//
//PARAM_2 
//$condicao recebera a condicao para que se possa deletar um ou mais registros
//EX  =>  $condicao = " nome='Mailson' AND senha='123' ";
//
//RETORNO
//Retorna true caso tenha consegiro deletar a(s) tupla(s)
//Caso contrário retorna false 
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