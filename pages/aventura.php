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

</head>
<body>
<div class="card horizontal transparent chat m12">
<div class="card-content grey darken-4 center-align m3">
<a class="waves-effect btn-small btn red darken-4" href="/pages/home.php">Sair</a>
<br><hr>
<a class="waves-effect btn-small btn red darken-4" href="">Ficha</a>
<br><br><p class="white-text">Jogadores <br> conectados: </p><br>
<p class="white-text">Tauriel</p><br>
<p class="white-text">Erzeal</p><br>
<p class="white-text">Kvothe</p><br>
<p class="white-text">Binnie</p><br><hr><br>
<div class="input-field col4 m4">
    
   

  <select class="browser-default">
    <option value="" disabled selected>Dado</option>
    <option value="1">D6</option>
    <option value="2">D8</option>
    <option value="3">D10</option>
  </select> <br>
            

<a class="waves-effect btn-small btn red darken-4" href="">Sortear</a>
</div>
</div>

<div class="row"> 
 
  <?php include("chat.php"); ?>

</div>

<div class="card-content grey darken-4 center-align m3">


<a class="waves-effect btn-small btn red darken-4" href="">Mapa</a>
<br>
<div class="player">
<img src="../assets/img/char.png" class="circle icon" ><br><p class="white-text">Leoric</p></div>

</div>
<script>
 $(document).ready(function(){
    $('select').formSelect();
  });
</script>
</body>
</html>