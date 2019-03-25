   <div class="card grey darken-4 white-text center-align">
    <div class="card-content">
        <h6>Dados do personagem</h6>

        <form method="POST" action="../services/criarPersonagem.php">


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
            <label for="naturalidade">Naturalidade</label>
        </div>
        <div class="input-field col10 s10">
            <select class="validate white-text" required name="Divindade">
                <option class="white-text" value="Odin" selected="true">Odin</option>
                <option class="white-text" value="Freya">Freya</option>
                <option class="white-text" value="Ymir">Ymir</option>
                <option class="white-text" value="Camila">Camila</option>
            </select>
            <label>Adoração</label>
        </div>

        <h6>Atributos <div class="pontos"><p class="yellow-text">20</p></div></h6> 
        <div class="row">
         <div class="input-field col s5">
            <input id="forca" type="number" class="validate white-text" min="0">
            <label for="forca">Força</label>
        </div>
        <div class="input-field col s5">
            <input id="destreza" type="number" class="validate white-text" min="0">
            <label for="destreza">Destreza</label></div>
        </div>

    </div>


<button class="waves-effect waves-light btn-large red darken-4" type="submit" name="action">Criar
</button>
</form>


</div>

