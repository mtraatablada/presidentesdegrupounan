<?php if($o_sesion == "1"){ ?>
	<div class="list-group">
	  <a href="#" class="list-group-item active">
	    Candidatos
	  </a>
	  <a href="#" class="list-group-item">Estudiantes</a>
	  <a href="#" class="list-group-item">Elecciones</a>
	  <a href="#" class="list-group-item">Votos</a>
	  <?php
	  	if(isset($_SESSION["privilegio"])){
	  		if($_SESSION["privilegio"] == "1"){
	  ?>
	  <a href="#" class="list-group-item">Usuarios</a>
	  <?php
	  		}
	  	}
	  ?>
	</div>
<?php } ?>