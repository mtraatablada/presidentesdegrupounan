<?php
	session_start();
	if(isset($_SESSION["idusuario"])){
		$_SESSION["idusuario"] = "";
	}
	if(isset($_SESSION["nombreusuario"])){
		$_SESSION["nombreusuario"] = "";
	}
	if(isset($_SESSION["privilegio"])){
		$_SESSION["privilegio"] = "";
	}
	header("Location: ../../login.php");
?>