<?php 
	if ($_POST['serra_cesion'] == 'cerrar') {
		session_start();
		session_destroy();
		session_unset();
		echo "ok";
	}else{
		header('Location: ../index.php');
	}
?>