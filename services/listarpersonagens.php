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
	<div class="card horizontal grey darken-4 white-text center-align">
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
		<br/>
		<br/>
		<a class="waves-effect waves-light btn-small red darken-4 modal-trigger"
		href="#modalexcluir<?php echo $document['nome'] ?>">  Excluir</a>
		<div id="modalexcluir<?php echo $document['nome'] ?>" class="modal">
                <div class="modal-content" style="color: black">
                  <h4>Confirmação de exclusão</h4>
                  <p>Deseja realmente excluir o persoangem <?php echo $document['nome']; ?> </p>
                </div>
                <div class="modal-footer">
                  <a href='../services/excluirPersonagem.php?nomePersonagem=<?php echo $document['nome']; ?>' class="waves-effect waves-red btn-flat red white-text">Confirmar</a>
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat green white-text">Cancelar</a>
                </div>
              </div>
	
	</div></div>


	<?php

}
?>

