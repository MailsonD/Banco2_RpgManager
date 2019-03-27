<?php

require("../databases/mongoDao.php");

session_start();

$emailLogado = $_SESSION['logado'];

$condicao = [
	'email'=>$emailLogado,	
];


$result = buscarMDB('usuario',$condicao); 

$personagens = $result['personagens'];

foreach($personagens as $document){            

	?>
	<div class="card-content">
		<img src=<?php echo '/assets/img/'.$document['avatar'].''; ?> class="avatar">
		<span class="card-title"><?php echo $document['nome']; ?></span>

	</div>
	<div class="card-action"> <p><?php echo $document['raca']; ?></p><p><?php echo $document['classe']; ?><p><p><?php echo $document['adoracao']; ?></p>
		<hr><br><br>
		<a class="waves-effect waves-light btn-small red darken-4" href="#">Escolher</a>

	</div>


	<?php


}
?>

