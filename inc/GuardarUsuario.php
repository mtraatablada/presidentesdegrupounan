<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Plantilla inicial</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/jquery-ui.css" rel="stylesheet">
	</head>
	<body>
		<?php
			require("conexion.php");

			$nombre = $_POST["nombre"];
			$correo = $_POST["correo"];

			$consulta = "INSERT INTO USUARIOS (nombre, correo) VALUES ('$nombre','$correo')";

			$resultado = $mysqli->query($consulta);

			if($resultado > 0)
			{
				header("Location: ../index.php");
			}
			else
			{
				echo"<h3>!Lo sentimos¡ se ha producido un error. <a href='' class='.alert-link'>Regresar</a></h3>";
			}
		?>
	</body>
</html>