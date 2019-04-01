<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RPG</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/materialize.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/materialize.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/game.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
  <!-- Firebase App is always required and must be first -->
  <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase-database.js"></script>

  <?php
  require("../controllers/sessionController.php");
  ?>
  <script src="/assets/js/firebase.js"></script>
</head>
<body>
  <div class="card horizontal transparent chat m12" style="height: 100%" >
    <div class="card-content grey darken-4 center-align m3">
      <a class="waves-effect btn-small btn red darken-4" href="/pages/home.php">Sair</a>
      <br><hr>
      <a class="waves-effect waves-light btn-small red darken-4 modal-trigger " href="#fichaGame">Ficha</a>
      <?php include("fichaGame.php"); ?>

      <br><br><p class="white-text">Jogadores <br> conectados: </p><br>
      <p class="white-text">Tauriel</p><br>
      <p class="white-text">Erzeal</p><br>
      <p class="white-text">Kvothe</p><br>
      <p class="white-text">Binnie</p><br><hr><br>
      <div class="input-field col4 m4">





        <a class="waves-effect btn-small btn red darken-4  modal-trigger" href="#dado">Dados</a>
        <?php include("dado.php"); ?> 
      </div>
    </div>

    <div class="row"> 

      <?php include("chat.php"); ?>


    </div>

  </div>
</div>
<div class="card-content grey darken-4 center-align m3">


  <a class="waves-effect btn-small btn red darken-4" href="">Mapa</a>
  <br>
  <div class="player">
    <?php 

    $personagem = $_SESSION['personagemSelecionado'];
    ?>
    <img src=<?php echo '/assets/img/'.$personagem['avatar'].''; ?> class="circle icon">

    <br>
    <p class="white-text"><?php echo $personagem['nome']; ?></p>
  </div>

</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../assets/js/materialize.js"></script>
<script src="../assets/js/materialize.min.js"></script>

<script src="../assets/js/dado.js"></script>

<script src="../assets/js/init.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
 $(document).ready(function(){
  $('select').formSelect();
});
</script>
<script>
  <?php include("../services/usuarioLogado.php"); ?>
  $(document).ready(function () {
    $('.modal').modal();
    $('select').formSelect();
    <?php include("../services/msgErro.php")?>
  });
</script>
<script src="/assets/js/mensagens.js"></script>
</body>
</html>