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
  require("../services/dadosLogado.php");
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


            <h4>Perfil </h4>

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
              <p><b>Nome completo: <?php echo $usuarioLogado['nome']; ?></b></p>
              <p><b>E-mail: <?php echo $usuarioLogado['email']; ?></b> </p>
              <p><b>Nível de experiência: <?php echo $usuarioLogado['experiencia']; ?></b>  </p>

              <br/>
              <br/>
              <a href="../services/mudarEstadoDaMusica.php" class="btn waves-effect waves-light red" name="action"><?php if($_SESSION['estadoMusica'] == 'ligado') echo "Desligar";
                else echo "ligar";
              ?> música automática
              </a>
              <a href="#modalexcluir" class="btn waves-effect waves-light red modal-trigger" name="action">Excluir Conta
              </a>

              <div id="modalexcluir" class="modal">
                <div class="modal-content" style="color: black">
                  <h4>Confirmação de exclusão</h4>
                  <p>Deseja realmente continuar com a exclusão da sua conta?</p>
                  <p>Todos os seus dados e personágens serão excluídos do sistema também!</p>
                </div>
                <div class="modal-footer">
                  <a href='../services/excluirConta.php' class="waves-effect waves-red btn-flat red">Confirmar</a>
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat green">Cancelar</a>
                </div>
              </div>
            </div>

            <div id="settings"><h5>Configuração da conta:</h5>
              <form class="col10 s10" method="POST" action="../services/atualizarDados.php">
                <div class="row">

                 <div class="input-field col10 s10">
                  <input id="name" type="text" class="validate white-text" name="nome"maxlength="40" value='<?php
                    echo $usuarioLogado['nome'];
                    ?>'  required>
                  <label for="name">Nome</label>
                </div>
                <div class="input-field col10 s10">
                  <input id="email" type="email" class="validate white-text" name="email" value=<?php echo ''.$usuarioLogado['email'].''; ?> required>
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
  $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>
<script>
  $(document).ready(function () {
    $('.modal').modal();
    $('select').formSelect();
    <?php include("../services/msgErro.php")?>
  });

  <?php include("../services/aplicaEstadoMusica.php"); ?>
</script>


</body>
</html>