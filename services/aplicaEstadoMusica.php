<?php

if($_SESSION['estadoMusica'] == 'ligado'){
	echo "musicTheme.autoplay=true;
		  musicTheme.play();";
}else{
	echo "musicTheme.autoplay=false;
		  musicTheme.pause();";
}

?>