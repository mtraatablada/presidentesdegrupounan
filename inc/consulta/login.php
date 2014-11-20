<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Inicio - Gestion de Presidentes de Grupo</title>
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/style.css" rel="stylesheet">
		<link href="../../css/jquery-ui.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Mensaje
						</div>
						<div class="panel-body">
							<p>
								<?php
									require("../conexion.php");
									if(isset($_POST["txtUsuario"]) and isset($_POST["txtPass"])) {
										if(trim($_POST["txtUsuario"]) != "" and trim($_POST["txtPass"]) != "") {
											$usuario = $_POST["txtUsuario"];
											$pass = $_POST["txtPass"];
											$resultado = $mysqli->query("SELECT * FROM USUARIO WHERE NOMBREUSUARIO = '$usuario' AND PASS = '$pass'");
											if(isset($resultado)){
												if(($resultado) > 0){
													session_start();
													while($fila=$resultado->fetch_assoc()){
														$_SESSION["idusuario"] = $fila["IDUSUARIO"];
														$_SESSION["nombreusuario"] = $fila["NOMBRE1"]." ".$fila["NOMBRE2"]." ".$fila["APELLIDO1"]." ".$fila["APELLIDO2"];
														$_SESSION["privilegio"] = $fila["PRIVILEGIO"];
														header("Location: ../../index.php");
													}
												}
												else{
													echo"<span class='alert alert-danger'>Error, Ingresar usuario y contraseña. <a class='btn btn-link' href='../../index.php'>Regresar</a></span>";
												}
											}
											else{
												echo"<span class='alert alert-danger'>Error, Usuario o contraseña incorrecto. <a class='btn btn-link' href='../../index.php'>Regresar</a></span>";
											}
										}
										else{
											echo"<span class='alert alert-danger'>Error, Ingresar usuario y contraseña. <a class='btn btn-link' href='../../index.php'>Regresar</a></span>";
										}
									}
									else{
										echo"<span class='alert alert-danger'>Error, No se enviaron los datos para el login. <a class='btn btn-link' href='../../index.php'>Regresar</a></span>";
									}
								?>
							</p>
						</div>
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>