<?php
	if(isset($_SESSION['msg'])){
		echo "M.toast({html: '".$_SESSION['msg']."'});";
		unset($_SESSION['msg']);		
	}

?>