<?php

require_once __DIR__ . "/../vendor/mongodb/mongodb/src/Model/BSONDocument.php";


session_start();

if(isset ($_SESSION['logado'])){
	header('location:../pages/home.php');
	exit();
}

?>