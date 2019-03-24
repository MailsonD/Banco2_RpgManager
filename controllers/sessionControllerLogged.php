<?php

session_start();

if(isset ($_SESSION['logado'])){
	header('location:../pages/home.php');
}

?>