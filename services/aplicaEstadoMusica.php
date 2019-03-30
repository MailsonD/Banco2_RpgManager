<?php

if($_SESSION['estadoMusica'] == 'ligado'){
	echo "musicTheme.autoplay=true;";
}else{
	echo "musicTheme.autoplay=false;";
}

?>