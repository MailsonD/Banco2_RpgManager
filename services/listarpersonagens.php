<?php

require("../databases/mongoDao.php");

session_start();

$emailLogado = $_SESSION['logado'];

foreach($result as $document){            
    $nome = $document['nome'];
    $raca = $document['raca'];
    $naturalidade  = $document['naturalidade'];
    $adoracao = $document['adoracao'];	
}
?>

