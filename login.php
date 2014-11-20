<?php 
	require("inc/conexion.php");
	require("inc/partial/verificarusuario.php");
	if($o_sesion == "1"){
		header("Location: index.php");
	}
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Login - Gestion de Presidentes de Grupo</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/jquery-ui.css" rel="stylesheet">
	</head>
	<body style="margin-top:50px;"  class="bg-info">
		<div style="width:350px; margin:auto;">
			<form action="inc/consulta/login.php" method="POST">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3>GESTIÓN PRESIDENTES</h3>
					</div>
					<div class="panel-body">
						<div class="input-group">
							<span class="input-group-addon">No. Usuario:</span>
							<input type="text" name="txtUsuario" class="form-control" placeholder="Ingresar nombre"/>
						</div>
						<br />
						<div class="input-group">
							<span class="input-group-addon">Contraseña:</span>
							<input type="password" name="txtPass" class="form-control" placeholder="Ingresar password"/>
						</div>
					</div>
					<div class="panel-footer">
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-user"></span> 
							Iniciar Sesión
						</button>
					</div>
				</div>
			</form>
		</div>
	</body>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.js"></script>
</html>