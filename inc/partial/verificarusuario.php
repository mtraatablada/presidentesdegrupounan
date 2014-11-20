<?php
	$o_sesion = "0";
	session_start();
	if(isset($_SESSION["idusuario"])) {
		if(trim($_SESSION["idusuario"]) != ""){
			$id = $_SESSION["idusuario"];
			$resultado = $mysqli->query("SELECT * FROM USUARIO WHERE IDUSUARIO = ".$id);
			if(isset($resultado)){
				if(!is_null($resultado)){
					if(($resultado->num_rows) > 0){
						while($fila=$resultado->fetch_assoc()){
							$_SESSION["nombreusuario"] = $fila["NOMBRE1"]." ".$fila["NOMBRE2"]." ".$fila["APELLIDO1"]." ".$fila["APELLIDO2"];
							$_SESSION["privilegio"] = $fila["PRIVILEGIO"];
							$o_sesion = "1";
						}
					}
				}
			}
		}
    }
?>