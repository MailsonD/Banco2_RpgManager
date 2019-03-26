
    <?php include("../services/listarpersonagens.php"); ?>
<div class="card-content">
        <img src='/assets/img/char.png' class="avatar">
          <span class="card-title"><?php echo $nome ?></span>
         
        </div>
        <div class="card-action"> <p><?php echo $raca ?></p><p><?php echo $naturalidade ?><p><p><?php echo $adoracao ?></p>
       <hr><br><br>
        <a class="waves-effect waves-light btn-small red darken-4" href="#">Escolher</a>
          <a href="#">Editar</a>
          <a href="#">Deletar</a>
        </div>