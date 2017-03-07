<?php
	try{
		
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	header('Location: bienvenido.html');

	}catch(Exception $e){
			echo("<script>console.log('PHP: ".$e->getMessage()."');</script>");
	       
	}
?>