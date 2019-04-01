<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RPG</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/materialize.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/materialize.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/style.css" />
  <?php
  require("../controllers/sessionController.php");
  ?>
</head>
<body>
  <div class="degrade2">
    <!-- <img src="../assets/img/gradient.jpg" class="degrade"> -->
    <img src="../assets/img/header.png" class="stroke">
    <div class="row">
      <div class="col s12 m2 painel">       
        <div class="card  transparent"><a href="/pages/home.php"><img src="../assets/img/rpgLOGO.png" class="logo center-align"></a>
         <div class="card-action center-align">
          <a class="waves-effect waves-light btn-large red darken-4" href="aventura.php">Aventura</a><br><br>
          <a class="waves-effect btn-large btn modal-trigger red darken-4" href="#modal4" id="store">Loja</a>
          <?php include("loja.php"); ?>
          <br>
        </div>
        <div class="card-action center-align">

          <a href="opcoes.php" class="waves-effect waves-light btn-small  red darken-4">Opções</a>
          <a href="../services/logout.php" class="waves-effect waves-light btn-small red lighten-1">Sair</a>
        </div>
      </div>
    </div>

    <div id="test1" class="col s12 m6 painel" > <?php include("listarpersonagens.php"); ?></div>
    <div id="test4" class="col s12 m6 painel"><?php include("criarpersonagem.php"); ?></div>
    <div class="col s7 m4 painel">
      <div class="card center-align char transparent">
        


        <?php 
        if(!isset($_SESSION['personagemSelecionado'])){

          ?>
          <!-- <img src='/assets/img/char.png' class="avatar"> -->
          <img src="../assets/img/eSCOLHA.png" class="propaganda">
         

          <div class="card-content  grey darken-4"> <hr class="style-two">
           <!--<h5 class="white-text">Leoric</h5>
           <p class="white-text">King</p> -->
         <?php 
          }else{ 
            $personagem = $_SESSION['personagemSelecionado'];
          ?>
             <img src=<?php echo '/assets/img/'.$personagem['avatar'].''; ?> class="avatar">

              <div class="card-content  grey darken-4">
              <h5 class="white-text"><?php echo $personagem['nome']; ?></h5>
              <p class="white-text"><?php echo $personagem['classe']; ?></p>
              <br>
               <a class="waves-effect waves-light btn-large btn modal-trigger  deep-orange darken-3" href="#ficha">Ficha</a>
           <?php include("ficha.php"); ?>
           <?php
         } 
         ?> 
           <br>

           <!-- <a class="btn-large waves-effect waves-light btn modal-trigger  deep-orange darken-3" href="#modal3">Inventário</a>
            -->
          

         </div>
         <ul class="tabs grey darken-4"> 

          <li class="tab"><a class="white-text" href="#test1">Meus heróis</a></li>
          <li class="tab"><a class="white-text" href="#test4">Criar novo</a></li>
        </ul>

      </div>
    </div>



  </div>


  <div class="audio">
    <audio id="musicTheme" controls autoplay>
      <source src="../assets/audio/audio.mp3" type="audio/mpeg">
      </audio>
    </div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/materialize.min.js"></script>

  <script src="../assets/js/init.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.modal').modal();
      $('select').formSelect();
      <?php include("../services/msgErro.php")?>
    });
    <?php include("../services/aplicaEstadoMusica.php"); ?>
  </script>
  <script>
    $(document).ready(function(){
      $('.tabs').tabs();
    });
  </script>
  <script src="../assets/js/selecionaFoto.js"></script>
  <script src="../assets/js/atributos.js"></script>


</body>
</html>