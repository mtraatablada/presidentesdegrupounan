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
									if(isset($_POST["txtUsuario"]) and isset($_POST["txtPass"]){
										if(trim($_POST["txtUsuario"]) != "" and trim($_POST["txtPass"]) != ""){
											$usuario = $_POST["txtUsuario"];
											$pass = $_POST["txtPass"];
											$resultado = $mysqli->query("SELECT * FROM USUARIO WHERE NOMBREUSUARIO = '$usuario' AND PASS = '$pass'");
											if(isset($resultado)){
												if(($resultado->num_rows) > 0){
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
									if(isset($_POST["ano_lectivo"]) and isset($_POST["semestre"]) and isset($_POST["actual"]) and isset($_POST["finalizado"])){
										if(trim($_POST["ano_lectivo"]) != "" and trim($_POST["semestre"]) != "" and trim($_POST["actual"]) != "" and trim($_POST["finalizado"]) != ""){
											$ano_lectivo = $_POST["ano_lectivo"];
											$semestre = $_POST["semestre"];
											$actual = $_POST["actual"];
											$finalizado = $_POST["finalizado"];
											$resultado = $mysqli->query("INSERT INTO ELECCION (SEMESTRE, ANO_LECTIVO, ACTUAL, FINALIZADO) VALUES ('$semestre','$ano_lectivo','$actual','$finalizado')");
											if($resultado > 0){
												echo"<span class='alert alert-success'>Guardado satisfactoriamente. <a class='btn btn-link' href='../../index.php'>Regresar</a></span>";
											}
											else{
												echo"<span class='alert alert-danger'>Error, Ingresar usuario y contraseña. <a class='btn btn-link' href='../../index.php'>Regresar</a></span>";
											}
										}
										else{
											echo"<span class='alert alert-danger'>Error, Faltan datos. <a class='btn btn-link' href='../../index.php'>Regresar</a></span>";
										}
									}
									else{
										echo"<span class='alert alert-danger'>Error, No se enviaron los datos para crear esta eleccion. <a class='btn btn-link' href='../../index.php'>Regresar</a></span>";
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