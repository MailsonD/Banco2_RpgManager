<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RPG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/materialize.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/materialize.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/home.css" />
    <?php
    require("controllers/sessionControllerLogged.php");
    ?>
</head>
<body>
    <img src="assets/img/dust.gif" class="dust">
    <div class="container">
        <br><br>
        <h1 class="header center white-text"><img src="assets/img/rpgLOGO.png" class="logoHome"></h1>
        <div class="row center">
            <h5 class="header col s12 light white-text sub"><b>Junte-se à aventura!</b></h5>
        </div>
        <div class="row center">

            <!-- Modal Trigger -->
            <a class="btn-large waves-effect waves-light orange accent-4 btn modal-trigger" href="#modal2">Torne-se herói!</a> <p class="white-text sub">ou</p>  <a class="waves-effect waves-light btn modal-trigger red" href="#modal1" onclick="play()">Continue a jornada</a>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <center>
                        <div class="row">
                            <form class="col10 s10" method="POST" action="/services/autentication.php">
                                <div class="row">
                                    <div class="input-field col10 s10">
                                        <input id="emailLogin" type="email" name="email" class="validate" required>
                                        <label for="emailLogin">E-mail</label>
                                    </div>
                                    <div class="input-field col10 s10">
                                        <input id="passwordLogin" type="password" name="senha" class="validate" required>
                                        <label for="passwordLogin">Senha</label>
                                    </div>
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Log-In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </center>
                </div>

            </div>

            <!-- Modal Structure -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <center>
                        <div class="row">
                            <form class="col10 s10" method="POST" action="services/cadastro.php">
                                <div class="row">

                                   <div class="input-field col10 s10">
                                    <input id="name" type="text" class="validate" name="nome"maxlength="40" required>
                                    <label for="name">Nome<font color="red"> * </font></label>
                                </div>
                                <div class="input-field col10 s10">
                                    <input id="email" type="email" class="validate" name="email"required>
                                    <label for="email">E-mail<font color="red"> * </font></label>
                                </div>
                                <div class="input-field col10 s10">
                                    <input id="password" type="password" class="validate" name="senha" minlength="6" required>
                                    <label for="password">Senha<font color="red"> * </font></label>
                                </div>
                                <div class="input-field col10 s10">
                                    <select required name="experiencia">
                                        <option value="Novato" selected="true">Novato</option>
                                        <option value="Experiênte">Experiênte</option>
                                        <option value="Especialista">Especialista</option>
                                    </select>
                                    <label>Nível de experiência
                                        <font color="red"> * </font>
                                    </label>
                                </div>


                                <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                                </button>
                            </div>
                        </form>
                    </div>
                </center>
            </div>

        </div>
    </div>
</div>
<div class="audio">
    <!-- <audio autoplay id="musicaFundo" src="assets/audio/login.mp3"></audio> -->
    <iframe src="assets/audio/login.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe> 
</div>
</div>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/materialize.min.js"></script>

<script src="assets/js/init.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
    $(document).ready(function () {
        $('.modal').modal();
        $('select').formSelect();
        <?php include("services/msgErro.php")?>
    });
</script>
<audio id="botaologin" src="assets/audio/logar.mp3" ></audio>
<script>
  function play(){
     var audio = document.getElementById("botaologin");
     audio.play();
 }
</script>

</body>

</html>