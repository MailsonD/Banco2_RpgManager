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
          <a class="waves-effect waves-light btn-large">Loja</a><br>
        </div>
        <div class="card-action">
     
          <a class="waves-effect waves-light btn-small">Opções</a>
          <a class="waves-effect waves-light btn-small">Sair</a>
        </div>
      </div>
    </div>
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
        <div class="card-action">

        <a href="#">Trocar herói</a>
        <a href="#">Editar herói</a>
          <a href="#">Criar novo</a>
        </div>
      </div>
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
    });
</script>
</body>
</html>