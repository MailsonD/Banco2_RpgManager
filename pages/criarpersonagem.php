   <div class="card grey darken-4 white-text center-align">
     <hr>
     <div class="card-content">
      <h6>Dados do personagem</h6>
      <br>

      <img id="avatarSelecionado" src="/assets/img/char2.png" class="avatar"><br>
      <a class="waves-effect btn-small btn modal-trigger red darken-4" href="#avatar">Avatar</a>
      <?php include("avatars.php"); ?>
      <form id="criaPersonagem" method="POST" action="../services/criarPersonagem.php">

        <input type="hidden" name="avatar" value="char2.png" id="avatarForm">
        <div class="input-field col10 s10">
          <input id="name" type="text" name="nome" class="validate white-text" maxlength="40" required>
          <label for="name">Nome</label>
        </div>
        <div class="input-field col10 s10">
          <input id="raca" type="text" name="raca" class="validate white-text" required>
          <label for="raca">Raça</label>
        </div>

        <div class="input-field col10 s10">
          <input id="naturalidade" type="text" name="classe" class="validate white-text"  required>
          <label for="classe">Classe</label>
        </div>
        <div class="input-field col10 s10 white-text">
          <p>Adoração</p>
          <select class="validate browser-default" required name="adoracao">
            <option value="Odin" selected="true">Odin</option>
            <option value="Freya">Freya</option>
            <option value="Ymir">Ymir</option>
            <option value="Camila">Camila</option>
          </select>
        </div>

        <div class="row">
          <div class="col s6">
            <h6 class="center-align">Atributos 
              <div class="pontos"><p class="yellow-text">
                <div id="pontosTotais">20</div> 

              </p>
            </div>
          </h6>
        </div>
        <div class="col s6">
          <h6 class="center-align">AtributosGastos 
            <div class="pontos"><p class="yellow-text">
              <div id="pontosUsados">0</div>
            </p>
          </div>
        </h6>
      </div>

    </div>


    <div class="row">
     <div class="col s15">
      <div class="input-field col s4">
        <p class="range-field"><p>Força</p>
        <input type="range" name="forca" id="forca" min="0" max="20" value="0" onmouseup="atualizarAtributos()"/>
      </p>
    </div>
    <div class="input-field col s4">
      <p class="range-field"><p>Destreza</p>
      <input type="range"  name="destreza" id="destreza" min="0" max="20" value="0" onmouseup="atualizarAtributos()" />
    </p>
  </div>
  <div class="input-field col s4">
    <p class="range-field"><p>Inteligência</p>
    <input type="range" name="inteligencia" id="inteligencia" min="0" max="20" value="0" onmouseup="atualizarAtributos()" />
  </p>
</div>
<div class="input-field col s4">
  <p class="range-field"><p>Constituição</p>
  <input type="range" name="constituicao" id="constituicao" min="0" max="20" value="0"  onmouseup="atualizarAtributos()"/>
</p>
</div>
<div class="input-field col s4">
  <p class="range-field"><p>Sorte</p>
  <input type="range" name="sorte" id="sorte" min="0" max="20" value="0" onmouseup="atualizarAtributos()" />
</p>
</div>
<div class="input-field col s4">
  <p class="range-field"><p>Carisma</p>
  <input type="range" name="carisma" id="carisma" min="0" max="20" value="0" onmouseup="atualizarAtributos()" />
</p>
</div>
</div>
  <button class="waves-effect waves-light btn-large red darken-4" id="submitForm" disabled="true" >Criar
</button>
</div>
</div>

</form>




</div>

