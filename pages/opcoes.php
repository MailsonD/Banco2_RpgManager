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

            <div class="card-content center-align">
                

                    <h4>Usuário </h4>

                    <p></p>
                </center>


                <div class=" card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a href="#dados">Meus dados <i class="small material-icons">person</i></a></li>
                        <li class="tab"><a href="#settings">Editar dados<i
                                class="small material-icons">settings</i></a>
                        </li>
                    </ul>
                </div>
                <div class="card-content grey lighten-4">
                    <div id="dados">
                        <h4>Detalhes da conta:</h4>
                        <p><b>Nome completo:</b></p>
                        <p><b>Telefone:</b> </p>
                        <p><b>E-mail: </b> </p>
                        <p><b>Nascimento:</b>  </p>
                    </div>
                    <div id="settings"><h4>Configuração da conta:</h4>
                       
                </div>
            </div>

            <div id="md1" class="modal">
                <div class="modal-content">
                    <h4>Porfavor confirme</h4>
                    <p>Todos os seus dados, podcasts ou turmas virtuais cadastrados no sistema também serão excluídos!
                        </p>
                    <p>Deseja continuar com esta ação?</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close btn">Não</a>
                    <a href="/inicio?comando=UsuariosController&acao=desativarConta&emailUsuario=${sessionScope.usuarioLogado.email}"
                       class="waves-effect waves-green red btn-flat center-align" id="md1_YesBtn">Sim</a>
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
    $(document).ready(function () {
      $('.modal').modal();
      $('select').formSelect();
      <?php include("../services/msgErro.php")?>
    });
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