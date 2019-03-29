<div id="ficha" class="modal">

<?php

$atributos = $personagem['atributos'];

?>
    <h4><?php echo $personagem['nome']; ?></h4>
<hr>
    <h5><b>Raça: </b> <?php echo $personagem['raca']; ?> </h5>
    <p>Força: <?php echo $atributos['forca']; ?></p>
    <p>Destreza: <?php echo $atributos['destreza']; ?></p>
    <p>Inteligência: <?php echo $atributos['inteligencia']; ?></p>
    <p>Constituição: <?php echo $atributos['constituicao']; ?></p>
    <p>Sorte: <?php echo $atributos['sorte']; ?></p>
    <p>carisma: <?php echo $atributos['carisma']; ?></p>
    

</div>