<?php

require("../databases/mongoDao.php");

session_start();

$emailLogado = $_SESSION['logado'];



foreach(listarMDB('personagens') as $document){            
    $nome = $document['nome'];
    $raca = $document['raca'];
    $naturalidade  = $document['naturalidade'];
    $adoracao = $document['adoracao'];
    $avatar = $document['avatar'];	
}
?>

