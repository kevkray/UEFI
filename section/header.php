<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<!-- Main Navbar -->
	<nav class="col navbar nav-general navbar-expand-md">
		<!-- Brand -->
		<img src="../img/LOGO-UD-1.png" alt="Logo UD" style="width:21%" class="pr-1">
		<img src="../img/UEFIsmall.png" alt="Logo UEFI" style="width:8%"class="pl-1">
		<!-- /Brand -->
		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler toggler-personalizado" type="button" data-toggle="collapse" data-target="#generalNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- /Toggler/collapsibe Button -->
		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="generalNavbar">
			<ul class="navbar-nav ml-auto mt-5 pr-5 font-weight-bold">
				<li class="nav-item pr-2">
					<a class="nav-link active" href="../page/Inicio.php">Inicio</a>
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
	<!-- /Main Navbar -->
</body>
</html>