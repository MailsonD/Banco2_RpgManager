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
<div class="row">
    <div class="col s12 m2">
       
      <div class="card center-align">
        <div class="card-content">
          <span class="card-title">Menu</span>
          
        </div>
        <div class="card-action">
          <a class="waves-effect waves-light btn-large">Aventura</a><br><br>
          <a class="waves-effect btn-large btn modal-trigger" href="#modal4">Loja</a>
          <?php include("loja.php"); ?>
          <br>
        </div>
        <div class="card-action">
     
          <a class="waves-effect waves-light btn-small">Opções</a>
          <a class="waves-effect waves-light btn-small">Sair</a>
        </div>
      </div>
    </div>

    <div id="test1" class="col s12 m5" > <?php include("personagens.php"); ?></div>
    <div id="test2" class="col s12 m5">Test 2</div>
    <div id="test4" class="col s12 m5">Test 4</div>
    <div class="col s10 m5 ">
      <div class="card center-align char">
       
            
        
        <div class="card-content">
            <img src='/assets/img/char.png' class="avatar">
         <h5>Leoric</h5>
         <p>King</p>
         <br>

          <a class="btn-large waves-effect waves-light btn modal-trigger" href="#modal3">Inventário</a>
          <?php include("inventario.php"); ?>
          <a class="waves-effect waves-light btn-large">Ficha</a>

        </div>
        <ul class="tabs">
        <li class="tab"><a href="#test1">Trocar herói</a></li>
        <li class="tab"><a href="#test2">Editar herói</a></li>
        <li class="tab"><a href="#test4">Criar novo</a></li>
      </ul>
         
      </div>
    </div>
        
    

  </div>
  

  <div class="audio">
  <audio controls autoplay>
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