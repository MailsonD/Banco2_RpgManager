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
	<div class="col s4">
		<div class="card-content">
		<img src=<?php echo '/assets/img/'.$document['avatar'].''; ?> class="avatar">
		<span class="card-title"><?php echo $document['nome']; ?></span>
	</div>
	<div class="card-action">
		<p><?php echo "<b>Raça:</b> ".$document['raca']; ?></p>
		<p><?php echo "<b>Classe:</b> ".$document['classe']; ?></p>
		<p><?php echo "<b>Adoração:</b> ".$document['adoracao']; ?></p>
		<hr><br><br>
		<a class="waves-effect waves-light btn-small red darken-4" href=<?php echo'../services/escolherPersonagem.php?nomePersonagem='.$document['nome'].'' ;?>>Escolher</a>

	</div>
	</div>


	<?php


}
?>

