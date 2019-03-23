<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RPG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/materialize.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/materialize.min.css" />
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/materialize.min.js"></script>
</head>
<body>
<div class="container">
        <br><br>
        <h1 class="header center white-text">RPG</h1>
        <div class="row center">
            <h5 class="header col s12 light white-text">Junte-se à aventura!</h5>
        </div>
        <div class="row center">

            <!-- Modal Trigger -->
            <a class="btn-large waves-effect waves-light orange accent-4 btn modal-trigger" href="#modal2">Cadastrar</a> <p class="white-text">ou</p>  <a class="waves-effect waves-light btn modal-trigger transparent" href="#modal1">Entrar</a>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <center>
                        <div class="row">
                            <form class="col10 s10"
                                  action="/inicio?comando=UsuariosController&acao=autenticar" method="POST">
                                <div class="row">
                                    <div class="input-field col10 s10">
                                        <input id="email" type="email" name="email" class="validate">
                                        <label for="email">E-mail</label>
                                    </div>
                                    <div class="input-field col10 s10">
                                        <input id="password" type="password" name="senha" class="validate">
                                        <label for="password">Senha</label>
                                    </div>
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Log-In
                                        <i class="material-icons right">cloud</i>
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
                            <form class="col10 s10" action="/inicio?comando=UsuariosController&acao=salvar"
                                  method="POST">
                                <div class="row">
                                    <c:if test="${msgErro!=null}">
                                        <span id="Erro">${msgErro}</span>
                                    </c:if>
                                   <div class="input-field col10 s10">
                                        <input id="name" type="text" class="validate" name="nome" value="${usuario!=null ? usuario.nome : ""}" maxlength="40" required>
                                       <label for="name">Nome<font color="red"> * </font></label></div>
                                    <div class="input-field col10 s10">
                                        <input id="email" type="email" class="validate" name="email" value="${usuario!=null ? usuario.email : ""}" required>
                                        <label for="email">E-mail<font color="red"> * </font></label></div>
                                    <div class="input-field col10 s10">
                                        <input id="password" type="password" class="validate" name="senha" value="${usuario!=null ? usuario.senha: ""}" minlength="6" required>
                                        <label for="password">Senha<font color="red"> * </font></label></div>
                                    <div class="input-field col10 s10">
                                        <input id="cellphone" type="text" class="validate" name="telefone" value="${usuario!=null && usuario.telefone != null ? usuario.telefone : ""}">
                                        <label for="cellphone">Telefone</label>
                                    </div>
                                    <div class="input-field col10 s10">
                                        <input id="date" type="date" class="validate" name="nascimento" value="${usuario!=null ? usuario.nascimento : ""}" required>
                                        <label for="date">Data de Nascimento<font color="red"> * </font></label>
                                    </div>

                                    <div class="input-field col10 s10">Função

                                        <p>
                                            <label>
                                                <input name="FUNCTION" type="radio" value="professor" />
                                                <span>Professor</span>
                                            </label>

                                            <label>
                                                <input name="FUNCTION" type="radio" value="aluno" checked/>
                                                <span>Aluno</span>
                                            </label>
                                        </p>


                                    </div>

                                    <div class="input-field col10 s10">Sexo

                                        <p>
                                            <label>
                                                <input name="GENDER" type="radio" value="female"/>
                                                <span>F</span>
                                            </label>

                                            <label>
                                                <input name="GENDER" type="radio" value="male" checked/>
                                                <span>M</span>
                                            </label>
                                        </p>


                                    </div>

                                    <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                                        <i class="material-icons right">cloud</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </center>
                </div>

            </div>
        </div>

</div>
    
</body>
</html>