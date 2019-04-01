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
  <?php include("../services/habilitaAventura.php"); ?>
  <script src="/assets/js/firebase.js"></script>
  <script type="text/javascript">
    <?php include("../services/usuarioLogado.php"); ?>
    <?php include("../services/personagemSelecionado.php"); ?>
  </script>
</head>
<body>
  <div class="card horizontal transparent chat m12" style="height: 100%" >
    <div class="card-content grey darken-4 center-align m3">
      <button class="waves-effect btn-small btn red darken-4" onclick="voltar()"><i class="material-icons">exit_to_app</i></button><br><br>
      <br><hr>
      

      <br><br><p class="white-text">Jogadores <br> conectados: </p><br>
      <div id="usuarios">
        
      </div>
      <br><br><hr><br><br>
      <a class="waves-effect waves-light btn-small red darken-4 modal-trigger " href="#fichaGame">Ficha</a>
      <?php include("fichaGame.php"); ?>
      
    </div>

    <div class="row"> 

      <?php include("chat.php"); ?>


    </div>

  </div>
</div>
<div class="card-content grey darken-4 center-align m3">


  <a class="waves-effect btn-small modal-trigger btn red darken-4" href="#modalMapa">Mapa</a>
  <?php include("mapa.php"); ?>
  <br><br>
  <div id="dado" class="col s2 m3">
    <br>
    
    <p class="white-text">Dado</p>
    <br>
    <select id="valoresDados" class="browser-default">
      <option value="D4">D4</option>
      <option value="D8">D8</option>
      <option value="D10">D10</option>
      <option value="D12">D12</option>
    </select>

    <hr class="style-two"> 

    <p class="white-text" id="seunumero"></p>

    <h5 id="mensagem" class="white-text"></h5>
    <a class="waves-effect btn-small btn red darken-4 btn-floating" id="sortear"><i class="material-icons">keyboard_arrow_down</i></a> 
  </div>

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
<script src="/assets/js/iniciaSessaoFirebase.js"></script>
<script>
 $(document).ready(function(){
  $('select').formSelect();
});
</script>
<script>

  $(document).ready(function () {
    $('.modal').modal();
    $('select').formSelect();
    <?php include("../services/msgErro.php")?>
  });

  function voltar(){
    firebase.database().ref('logados/'+emailUsuario.split('@')[0]).remove();
    location.href = "home.php"; 
  }
</script>
<script src="/assets/js/mensagens.js"></script>
</body>
</html>