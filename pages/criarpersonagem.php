   <div class="card grey darken-4 white-text center-align">
     <hr>
     <div class="card-content">
      <h6>Dados do personagem</h6>
      <br>

      <img id="avatarSelecionado" src="/assets/img/char2.png" class="avatar"><br>
      <a class="waves-effect btn-small btn modal-trigger red darken-4" href="#avatar">Avatar</a>
      <?php include("avatars.php"); ?>
      <form method="POST" action="../services/criarPersonagem.php">

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
        <input id="naturalidade" type="text" name="naturalidade" class="validate white-text"  required>
        <label for="classe">Classe</label>
      </div>
      <div class="input-field col10 s10 white-text">
        <p>Adoração</p>
        <select class="validate browser-default" required name="Divindade">
          <option value="Odin" selected="true">Odin</option>
          <option value="Freya">Freya</option>
          <option value="Ymir">Ymir</option>
          <option value="Camila">Camila</option>
        </select>
      </div>

      <h6>Atributos <div class="pontos"><p class="yellow-text">20</p></div></h6> 
      <div class="row">
       <div class="col s15">
        <div class="input-field col s4">
          <p class="range-field"><p>Força</p>
          <input type="range" id="forca" min="0" max="20" />
        </p>
      </div>
      <div class="input-field col s4">
        <p class="range-field"><p>Destreza</p>
        <input type="range" id="desterza" min="0" max="20" />
      </p>
    </div>
    <div class="input-field col s4">
      <p class="range-field"><p>Inteligência</p>
      <input type="range" id="inteligencia" min="0" max="20" />
    </p>
  </div>
  <div class="input-field col s4">
    <p class="range-field"><p>Sorte</p>
    <input type="range" id="sorte" min="0" max="20" />
  </p>
</div>
<div class="input-field col s4">
  <p class="range-field"><p>Carisma</p>
  <input type="range" id="carisma" min="0" max="20" />
</p>
</div>
<div class="input-field col s4">
  <p class="range-field"><p>Fé</p>
  <input type="range" id="fe" min="0" max="20" />
</p>
</div>
</div></div>

</div>


<button class="waves-effect waves-light btn-large red darken-4" type="submit" name="action">Criar
</button>
</form>


</div>

