<header class="navbar navbar-default bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Dashboard</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="../getting-started/">Acerca de</a>
        </li>
        <li>
          <a href="../css/">Presidentes</a>
        </li>
        <li>
          <a href="../components/">Candidatos</a>
        </li>
        <li>
          <a href="../components/">Elecciones</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if($o_sesion == "1"){
        ?>
        <li>
          <form class="navbar-form navbar-left" role="search">
            <div class="btn-group">
              <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["nombreusuario"]; ?></button>
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Configuración</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Cambiar Password</a></li>
                <li class="divider"></li>
                <li><a href="inc/consulta/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              </ul>
            </div>
          </form>
        </li>
        <?php
          }
          else{
        ?>
        <li>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Usuario">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          </form>
        </li>
        <?php
          }
        ?>
      </ul>
    </nav>
  </div>
</header>