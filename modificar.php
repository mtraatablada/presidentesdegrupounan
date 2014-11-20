<?php 
	require("inc/conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Modificar usuario</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/jquery-ui.css" rel="stylesheet">
	</head>
	<body>
		<br />
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<form style="padding:10px;" action="inc/modificarusuario.php" method="POST">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h1>Modificar Usuario</h1>
							</div>
							<div class="panel-body">
								<?php
									$id = $_GET['id_usuario'];
									$resultado = $mysqli->query("SELECT * FROM USUARIOS WHERE ID=$id");
									while($fila=$resultado->fetch_assoc()){
								?>
								<input name="id_usuario" type="hidden" value="<?php echo"$id"; ?>"/>
								<div class="input-group">
									<span class="input-group-addon">Nombre</span>
									<input name="nombre" placeholder="Ingrese su Nombre" class="form-control" value="<?php echo$fila['nombre']; ?>" />
								</div>
								<br />
								<div class="input-group">
									<span class="input-group-addon">Correo</span>
									<input name="correo" placeholder="Ingrese su Correo Electronico" class="form-control" value = "<?php echo$fila['correo']; ?>" />
								</div>
								<?php
									}
								?>
								<br/>
							</div>
							<div class="panel-footer">
								<button type="submit" name="btnGuardarUsuario" class="btn btn-danger"><span class="glyphicon glyphicon-floppy-disk"></span> Modificar</button>
								<a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-trash"></span> Cancelar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
	</body>
</html>