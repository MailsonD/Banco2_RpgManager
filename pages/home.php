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
</head>
<body>
<img src="../assets/img/gradient.jpg" class="degrade">
<div class="row">
    <div class="col s12 m2">

       
      <div class="card  transparent"><img src="../assets/img/rpgLOGO.png" class="logo center-align">
      
       
         
          
    
        <div class="card-action center-align">
          <a class="waves-effect waves-light btn-large red darken-4">Aventura</a><br><br>
          <a class="waves-effect btn-large btn modal-trigger red darken-4" href="#modal4">Loja</a>
          <?php include("loja.php"); ?>
          <br>
        </div>
        <div class="card-action center-align">
     
          <a class="waves-effect waves-light btn-small  red darken-4">Opções</a>
          <a class="waves-effect waves-light btn-small red lighten-1">Sair</a>
        </div>
      </div>
    </div>

    <div id="test1" class="col s12 m6" > <?php include("personagens.php"); ?></div>
    <div id="test4" class="col s12 m5">Test 4</div>
    <div class="col s8 m4 ">
      <div class="card center-align char grey darken-4">
       
            
        
        <div class="card-content">
            <img src='/assets/img/char.png' class="avatar">
         <h5 class="white-text">Leoric</h5>
         <p class="white-text">King</p>
         <br>

          <a class="btn-large waves-effect waves-light btn modal-trigger  deep-orange darken-3" href="#modal3">Inventário</a>
          <?php include("inventario.php"); ?>
          <a class="waves-effect waves-light btn-large btn modal-trigger  deep-orange darken-3" href="#ficha">Ficha</a>
          <?php include("ficha.php"); ?>

        </div>
        <ul class="tabs grey darken-4">
        <li class="tab"><a href="#test1">Meus heróis</a></li>
        <li class="tab"><a href="#test4">Criar novo</a></li>
      </ul>
         
      </div>
    </div>
        
    

  </div>
  

  <div class="audio">
  <audio controls autoplay on loop>
  <source src="../assets/audio/audio.mp3" type="audio/mpeg">
</audio>
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
    });
</script>
<script>
    $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>
</body>
</html>