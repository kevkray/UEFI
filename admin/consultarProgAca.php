<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Titulo UEFI</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- /Hojas de estilo -->
</head>
<body>
  <!-- Barra de navegación del Admin -->
  <nav class="cabecera navbar navbar-expand-md">
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Logo extremo izquierdo -->
      <ul class="mr-auto navbar-nav">
        <li>
          <a href="inicioAdmin.php" class="Orange">UEFI <span class="Blue">ADMIN</span></a>
        </li>
      </ul>
      <!-- /Logo extremo izquierdo -->
      <!-- Dropdown de opciones del Admin -->
      <ul class="navbar-nav">
        <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Unidad de Extensión</a>
          <!-- Dropdown -->
          <div class="dropdown-menu">
            <a href="perfilAdmin.php" class="dropdown-item">Perfil</a>
            <a href="loginAdmin.php" class="dropdown-item">Cerrar sesión</a>  
          </div>
          <!-- /Dropdown -->
        </li> 
      </ul>
      <!-- /Dropdown de opciones del Admin -->
    </div>
  </nav>
  <!-- /Barra de navegación del Admin -->
  <div class="wrapper">
    <!-- Barra lateral de navegación -->
    <ul id="tabs" class="nav nav-tabs flex-column" role="tablist">
      <li class="nav-item">
        <a href="inicioAdmin.php" class="titleSliderAdmin">
          <i class="fa fa-home">
            <span>
              Inicio
            </span>
          </i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#agregarSubmenu" data-toggle="collapse" aria-expanded="true" class="titleSliderAdmin">
          <i class="fa fa-plus">
            <span>
              Agregar
            </span>
          </i>
        </a>
        <ul class="list-unstyled collapse in" id="agregarSubmenu" aria-expanded="true" style="">
          <li><a href="agregarProgAca.php" class="textSliderAdmin">Programa académico</a></li>
          <li><a href="agregarConvenio.php" class="textSliderAdmin">Convenio</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#consultarSubmenu" data-toggle="collapse" aria-expanded="true" class="titleSliderAdmin active">
          <i class="fa fa-eye">
            <span>
              Consultar
            </span>
          </i>
        </a>
        <ul class="list-unstyled collapse in" id="consultarSubmenu" aria-expanded="true" style="">
          <li><a href="consultarProgAca.php" class="textSliderAdmin">Programa académico</a></li>
          <li><a href="consultarConvenios.php" class="textSliderAdmin">Convenios</a></li>
          <li><a href="consultarInscripciones.php" class="textSliderAdmin">Inscripciones</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="loginAdmin.php" aria-expanded="true" class="titleSliderAdmin">
          <i class="fa fa-sign-out">
            <span>
              Cerrar sesión
            </span>
          </i>
        </a>
      </li>
    </ul>
    <!-- /Barra lateral de navegación -->
    <!-- Contenido específico de la página -->
    <div class="container">
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary btn-lg">Consultar Cursos</button>
         <button type="button" class="btn btn-secondary btn-lg">Consultar Diplomados</button>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Resultados
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="fa fa-id-badge"></i> Id Curso</th>
                    <th><i class="fa fa-user-circle"></i> Nombre</th>
                    <th><i class="fa fa-clipboard-liste"></i> Tipo</th>
                    <th><i class="fa fa-calendar-alt"></i> Inicio</th>
                    <th><i class="icon_pin_alt"></i> City</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>Angeline Mcclain</td>
                    <td>2004-07-06</td>
                    <td>dale@chief.info</td>
                    <td>Rosser</td>
                    <td>176-026-5992</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="fa fa-retweet"></i></a>
                        <a class="btn btn-danger" href="#"><i class="fa fa-times-circle"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sung Carlson</td>
                    <td>2011-01-10</td>
                    <td>ione.gisela@high.org</td>
                    <td>Robert Lee</td>
                    <td>724-639-4784</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Bryon Osborne</td>
                    <td>2006-10-29</td>
                    <td>sol.raleigh@language.edu</td>
                    <td>York</td>
                    <td>180-456-0056</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Dalia Marquez</td>
                    <td>2011-12-15</td>
                    <td>angeline.frieda@thick.com</td>
                    <td>Alton</td>
                    <td>690-601-1922</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Selina Fitzgerald</td>
                    <td>2003-01-06</td>
                    <td>moshe.mikel@parcelpart.info</td>
                    <td>Waelder</td>
                    <td>922-810-0915</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Abraham Avery</td>
                    <td>2006-07-14</td>
                    <td>harvey.jared@pullpump.org</td>
                    <td>Harker Heights</td>
                    <td>511-175-7115</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Caren Mcdowell</td>
                    <td>2002-03-29</td>
                    <td>valeria@hookhope.org</td>
                    <td>Blackwell</td>
                    <td>970-147-5550</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Owen Bingham</td>
                    <td>2013-04-06</td>
                    <td>thomas.christopher@firstfish.info</td>
                    <td>Rule</td>
                    <td>934-118-6046</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Ahmed Dean</td>
                    <td>2008-03-19</td>
                    <td>lakesha.geri.allene@recordred.com</td>
                    <td>Darrouzett</td>
                    <td>338-081-8817</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Mario Norris</td>
                    <td>2010-02-08</td>
                    <td>mildred@hour.info</td>
                    <td>Amarillo</td>
                    <td>945-547-5302</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
    </div>
    <!-- /Contenido específico de la página -->
  </div>

	<!-- Librerias -->
  	<script src="../lib/bootstrap/js/jquery.min.js"></script>
  	<script src="../lib/bootstrap/js/popper.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
	<!-- /Librerias -->	
</body>
</html>