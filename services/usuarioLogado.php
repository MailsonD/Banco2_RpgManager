<?php

require("../databases/mongoDao.php");

$emailLogado = $_SESSION['logado'];
 

echo 'var emailUsuario = \''.$emailLogado.'\';';

?>