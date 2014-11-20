<?php 
	require("inc/conexion.php");
	require("inc/partial/verificarusuario.php");
	if($o_sesion != "1"){
		header("Location: login.php");
	}
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Inicio - Gestion de Presidentes de Grupo</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/jquery-ui.css" rel="stylesheet">
	</head>
	<?php include("inc/partial/menu.php"); ?>
	<body>
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Library</a></li>
				  <li class="active">Data</li>
				</ol>
				<div class="col-xs-3">
					<?php include("inc/partial/menuadmin.php"); ?>
				</div>
				<div class="col-xs-9">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Listado de elecciones
						</div>
						<div class="panel-body">
							<a data-toggle="modal" style="margin-bottom:10px;" class="btn btn-primary" href="#frmCrearEleccion"><span class="glyphicon glyphicon-plus"></span></a>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-condensed">
								<thead>
									<tr>
										<th>
											ID
										</th>
										<th>
											Año Lectivo
										</th>
										<th>
											Semestre
										</th>
										<th>
											Actual
										</th>
										<th>
											Finalizado
										</th>
										<th>
											
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$ideleccion = "";
										if(isset($_GET["ideleccion"])){
											if(($_GET["ideleccion"]) != ""){
												$ideleccion = $_GET["ideleccion"];
											}
										}
										if($resultado = $mysqli->query("SELECT ELECCION.* FROM ELECCION")){
											if(isset($resultado)){
												if(!is_null($resultado)){
													if(($resultado->num_rows) > 0) {
														while($fila=$resultado->fetch_assoc()){
															if(trim($ideleccion) == trim($fila["IDELECCION"])){
																echo"
																	<tr>
																		<td style='background:#428bca;color:#fff;'>".$fila['IDELECCION']."</td>
																		<td style='background:#428bca;color:#fff;'>".$fila['ANO_LECTIVO']."</td>
																		<td style='background:#428bca;color:#fff;'>".$fila['SEMESTRE']."</td>
																		<td style='background:#428bca;color:#fff;'>".$fila['ACTUAL']."</td>
																		<td style='background:#428bca;color:#fff;'>".$fila['FINALIZADO']."</td>
																		<td style='width:50px;background:#428bca;color:#fff;'>
																			<a href='index.php?ideleccion=".$fila['IDELECCION']."' class='btn btn-success'><span class='glyphicon glyphicon-check'></span></a>
																		</td>
																	</tr>
																";
															}
															else{
																echo"
																	<tr>
																		<td>".$fila['IDELECCION']."</td>
																		<td>".$fila['ANO_LECTIVO']."</td>
																		<td>".$fila['SEMESTRE']."</td>
																		<td>".$fila['ACTUAL']."</td>
																		<td>".$fila['FINALIZADO']."</td>
																		<td style='width:50px;'>
																			<a href='index.php?ideleccion=".$fila['IDELECCION']."' class='btn btn-success'><span class='glyphicon glyphicon-check'></span></a>
																		</td>
																	</tr>
																";
															}
														}
													}
												}
											}
										}
									?>
								</tbody>
								<thead>
									<tr>
										<th>
											ID
										</th>
										<th>
											Año Lectivo
										</th>
										<th>
											Semestre
										</th>
										<th>
											Actual
										</th>
										<th>
											Finalizado
										</th>
										<th>
											
										</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="panel-footer">
							
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							Listado de candidatos
						</div>
						<div class="panel-body">
							<a data-toggle="modal" style="margin-bottom:10px;" class="btn btn-primary" href="#frmIngresar"><span class="glyphicon glyphicon-plus"></span></a>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-condensed">
								<thead>
									<tr>
										<th>
											ID
										</th>
										<th>
											Dpt Acad
										</th>
										<th>
											Carrera
										</th>
										<th>
											Nº Carnet
										</th>
										<th>
											Nombre
										</th>
										<th>
											Año Acad
										</th>
										<th>
											Nº Grupo
										</th>
									</tr>
								</thead>
								<?php
									if(isset($_GET["ideleccion"])){
										if(($_GET["ideleccion"]) != ""){
											$ideleccion = $_GET["ideleccion"];
								?>
								<tbody>
									<?php
										if($resultado = $mysqli->query("SELECT CANDIDATO.* FROM CANDIDATO INNER JOIN ELECCION ON CANDIDATO.IDELECCION = ELECCION.IDELECCION WHERE ELECCION.ACTUAL = 'S' AND ELECCION.FINALIZADO = 'N' AND ELECCION.IDELECCION = '$ideleccion'")){
											if(isset($resultado)){
												if(!is_null($resultado)){
													if(($resultado->num_rows) > 0){
														while($fila=$resultado->fetch_assoc()){
															echo"
																<tr>
																	<td>".$fila['ID']."</td>
																	<td>".$fila['DPT_ACAD']."</td>
																	<td>".$fila['CARRERA']."</td>
																	<td>".$fila['N_CARNET']."</td>
																	<td>".$fila['NOMBRE1']." ".$fila['NOMBRE2'].$fila['APELLIDO1']." ".$fila['APELLIDO2']."</td>
																	<td>".$fila['ANO_ACAD']."</td>
																	<td>".$fila['N_GRUPO']."</td>
																	<td><a class='btn btn-danger' href='inc/eliminar.php?id_usuario=".$fila['ID']."'><span class='glyphicon glyphicon-trash'></span></a> <a class='btn btn-danger' href='modificar.php?id_usuario=".$fila['ID']."'><span class='glyphicon glyphicon-edit'></span></a></td>
																</tr>
															";
														}
													}
												}
											}
										}
									?>
								</tbody>
								<?php
										}
									}
								?>
								<thead>
									<tr>
										<th>
											ID
										</th>
										<th>
											Dpt Acad
										</th>
										<th>
											Carrera
										</th>
										<th>
											Nº Carnet
										</th>
										<th>
											Nombre
										</th>
										<th>
											Año Acad
										</th>
										<th>
											Nº Grupo
										</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<!--formularios modales-->
	<?php include("inc/frmmodal/frmCrearEleccion.php") ?>

	<?php include("inc/partial/footer.php"); ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.js"></script>
</html>