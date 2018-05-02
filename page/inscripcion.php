<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inscripción</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- /Hojas de estilo -->
</head>
<body>

	<section id="inicio" class="sticky-top">
	<!-- Header -->
		<?php include("../section/header.php");?>
	<!-- /Header -->
	<!-- Navbar General -->
	<div class="row nav-general">
		<!-- Navbar Logos -->
		<nav class="col-md-5 navbar navbar-expand-md">
			<!-- Brand -->
			<img src="../img/LOGO-UD-1.png" alt="Logo UD" style="width:40%" class="pr-1">
			<img src="../img/UEFIsmall.png" alt="Logo UEFI" style="width:30%"class="pl-1">
			<!-- /Brand -->
		</nav>
		<!-- /Navbar Logos -->
		<!-- Main Navbar -->
		<nav class="col-md-7 navbar navbar-expand-md">
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler toggler-personalizado" type="button" data-toggle="collapse" data-target="#generalNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- /Toggler/collapsibe Button -->
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="generalNavbar">
				<ul class="navbar-nav ml-auto pt-5 pr-5 font-weight-bold">
					<li class="nav-item pr-2">
						<a class="nav-link" href="../page/Inicio.php">Inicio</a>
					</li>
					<li class="nav-item dropdown pr-2">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Educación</a>
						<!-- Dropdown -->
						<div class="dropdown-menu navbar-dark">
							<a href="../page/Cursos.php" class="dropdown-item font-weight-bold">Cursos</a>
							<a href="../page/Diplomados.php" class="dropdown-item font-weight-bold">Diplomados</a>
						</div>
						<!-- /Dropdown -->
					</li> 
					<li class="nav-item pr-2">
						<a class="nav-link" href="../page/Conocenos.php">Conócenos</a>
					</li>
					<li class="nav-item pr-2">
						<a class="nav-link" href="../page/Convenios.php">Convenios</a>
					</li>
					<li class="nav-item font-weight-bold pr-2">
						<a class="nav-link" href="../page/Contactenos.php">Contáctenos</a>
					</li>  
				</ul>
			</div> 
			<!-- /Navbar links -->
		</nav>
		<!-- Main Navbar -->
	</div>
	<!-- /Navbar General -->
	</section>

	<!--Formulario-->
	<div class="container">
		<h3 class="section-title text-center">Formulario de Inscripción</h3>
        <div class="section-title-divider"></div>

		<div class="form-group row">
			<label for="input text nombre" class="col-2 col-form-label">Nombre</label>
			<div class="col-10">
				<input class="form-control" type="text" value="" placeholder="Nombre" id="inputnombre">
			</div>
		</div>
		<div class="form-group row">
			<label for="input text apellido" class="col-2 col-form-label">Apellido</label>
			<div class="col-10">
				<input class="form-control" type="text" value="" placeholder="Apellido" id="inputapellido">
			</div>
		</div> 
		<div class="form-group row">
			<label for="Seleccion Documento"class="col-2 col-form-label">Tipo de documento</label>
			<div class="col-10">
				<select class="form-control" id="selectdocumento">
				<option>Cédula</option>
				<option>Tarjeta de Identidad</option>
				<option>Cédula de Extrangería</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="input text lugar inscripcion" class="col-2 col-form-label">Lugar de Inscripción</label>
			<div class="col-10">
				<input class="form-control" type="text" value="" placeholder="Lugar de Inscripción del documento" id="inputlugarinscrip">
			</div>
		</div> 
		<div class="form-group row">
			<label for="input text lugar nacimiento" class="col-2 col-form-label">Lugar de nacimiento</label>
			<div class="col-10">
				<input class="form-control" type="text" value="" placeholder="Lugar de nacimiento" id="inputlugarnacimiento">
			</div>
		</div>
		


<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Search</label>
  <div class="col-10">
    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">URL</label>
  <div class="col-10">
    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
  <div class="col-10">
    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password" value="hunter2" id="example-password-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Number</label>
  <div class="col-10">
    <input class="form-control" type="number" value="42" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
  <div class="col-10">
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-month-input" class="col-2 col-form-label">Month</label>
  <div class="col-10">
    <input class="form-control" type="month" value="2011-08" id="example-month-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-2 col-form-label">Week</label>
  <div class="col-10">
    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Time</label>
  <div class="col-10">
    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-color-input" class="col-2 col-form-label">Color</label>
  <div class="col-10">
    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
  </div>
</div>
</div>


	<!--/Formulario-->

	<!-- Pie de página -->
	<?php include("../section/footer.php"); ?>
	<!-- /Pie de página -->

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