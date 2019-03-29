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

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php
  require("../controllers/sessionController.php");
  ?>
</head>
<body>
  <div class="degrade2">
    <!-- <img src="../assets/img/gradient.jpg" class="degrade"> -->
    <img src="../assets/img/header.png" class="stroke">
    
<div class="row">
    <div class="col s12"></div>
    <div class="col s12 m4 l2"></div>
    <div class="col s12 m4 l8">
        <div class="card painel">

            <div class="card-content center-align grey darken-4 white-text">
                

                    <h4>Usuário </h4>

                    <p></p>
                </center>


                <div class=" card-tabs grey darken-4">
                    <ul class="tabs tabs-fixed-width transparent red-text">
                        <li class="tab"><a href="#dados">Meus dados <i class="small material-icons">person</i></a></li>
                        <li class="tab"><a href="#settings">Editar dados<i
                                class="small material-icons">settings</i></a>
                        </li>
                    </ul>
                    <div class="card-action center-align">

          <a href="home.php" class="waves-effect waves-light btn-small  red darken-4">Voltar</a>
        </div>
                </div>
                <div class="card-content grey darken-4">
                    <div id="dados">
                        <h5>Detalhes da conta:</h5>
                        <p><b>Nome completo:</b></p>
                        <p><b>E-mail: </b> </p>
                        <p><b>Nível de experiência:</b>  </p>
                    </div>
                    <div id="settings"><h5>Configuração da conta:</h5>
                    <form class="col10 s10">
                                <div class="row">

                                 <div class="input-field col10 s10">
                                    <input id="name" type="text" class="validate" name="nome"maxlength="40" required>
                                    <label for="name">Nome</label>
                                </div>
                                <div class="input-field col10 s10">
                                    <input id="email" type="email" class="validate" name="email"required>
                                    <label for="email">E-mail</label>
                                </div>
                               
                                <div class="input-field col10 s10">

                                    <select required name="experiencia" class=" browser-default">
                                    <option value="" selected="true">Nível de experiência</option>
                                        <option value="Novato">Novato</option>
                                        <option value="Experiênte">Experiênte</option>
                                        <option value="Especialista">Especialista</option>
                                    </select>
                                    
                                </div>


                                <button class="btn waves-effect waves-light red" type="submit" name="action">Editar
                                </button>
                            </div>
                        </form>
                       
                </div>
            </div>

            

        </div>
    </div>
</div>
</div>
<div class="col s12 m4 l2"></div>
</div>
    </div>


  <div class="audio">
    <audio controls autoplay>
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
    $(document).ready(function(){
      $('.tabs').tabs();
    });
  </script>
  <script>
    $(document).ready(function () {
        $('.modal').modal();
        $('select').formSelect();
        <?php include("services/msgErro.php")?>
    });
</script>


</body>
</html>