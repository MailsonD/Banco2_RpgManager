<?php 

require("../databases/connectionPostgres.php");

$con = getConnection();

$queryViewBox = "SELECT getViewBox() as viewbox";

$resultViewBox = pg_query($con,$queryViewBox);


$viewBox = "";
if($resultViewBox && $resultViewBox = pg_fetch_array($resultViewBox)){
	$viewBox = $resultViewBox['viewbox'];
}

$queryRegioes = "SELECT ST_AsSVG(geom) as svg, nome FROM regiao";

$resultRegioes = pg_query($con,$queryRegioes);

closeConnection($con);


?>

<div id="modalMapa" class="modal">
	<h4> Terras Devastadas de Diangrônia</h4>
	<svg viewBox="<?php echo $viewBox ?>" width="550" height="450">
<?php				
if($resultRegioes){
	while($row = pg_fetch_array($resultRegioes)){

		?>
			<path d="<?php echo $row['svg'] ?>" 
				onmouseover="ativarPopup('<?php echo $row['nome'] ?>')" 
				onmouseout="destativarPopup()" 
				stroke="black" stroke-width="0.005" fill="blue" fill-opacity="" />
		<?php
	}

}
?>
	</svg>
	<div id="popup"></div>
</div>

<script>
	function ativarPopup(cidade){
		popup.innerHTML = cidade;
	}
	function destativarPopup(){
		popup.innerHTML = "";
	}
</script>




