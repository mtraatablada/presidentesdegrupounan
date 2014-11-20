<div class="modal fade" ID="frmCrearEleccion">
		<div class="modal-dialog">
			<div class="modal-content">
				<form style="padding:10px;" action="inc/guardar/guardareleccion.php" method="POST">
   				<div class="modal-header">
   					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="tittle"> CREAR ELECCION</h4>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="input-group">
						<span class="input-group-addon">AÑO LECTIVO</span>
						<select class="form-control" name="ano_lectivo">
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						</select>
					</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon">SEMESTRE</span>
						<select class="form-control" name="semestre">
							<option value="I">I</option>
							<option value="I">II</option>
						</select>
					</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon">ACTUAL</span>
						<select class="form-control" name="actual">
							<option value="S">SI</option>
							<option value="N">NO</option>
						</select>
					</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon">FINALIZADO</span>
						<select class="form-control" name="finalizado">
							<option value="S">SI</option>
							<option value="N">NO</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="btnGuardarUsuario" class="btn btn-success">
						<span class="glyphicon glyphicon-floppy-saved"></span> 
						Guardar
					</button>
					<button class"button" type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar
				</div>
			</form>
		</div>	
	</div>
</div>