<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cursos</title>
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
	<!--Código de consultas a la BD-->
	<?php include '../consultas/conexion.php';
		function generarlistaCursos() {
			$conexion=mysqli_connect("localhost","root","","bduefi") or
			die("Problemas con la conexión");
			//pa es programaacademico
			//tpa es tipoprogramaacademico
			$registros=mysqli_query($conexion,"select pa.nomprogramaacademico, pa.peqdescripprogaca from programaacademico pa where pa.idtipoprogramaacademico=1") or die("Problemas en el select:".mysqli_error($conexion));
			$numeroRegistros = mysqli_num_rows($registros);
			$contador=0;
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_array($registros)){
					$nombrecurso = $reg['nomprogramaacademico'];
					$descurso = $reg['peqdescripprogaca'];
					//echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=".$nombrecurso.">";
					//echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=".$descurso.">";
				
				}
				mysqli_close($conexion);
			}else{
				$mensajeCursos = "No hay cursos actualmente";
				echo "<h3 class=\"text-center text-muted\">".$mensajeCursos."</h3>";
			}
		}


	?>
	<!--Código de consultas a la BD-->

	<section id="inicio" class="sticky-top">
	<!-- Header -->
		<?php include("../section/header.php"); ?>
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
						<a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Educación</a>
						<!-- Dropdown -->
						<div class="dropdown-menu navbar-dark">
							<a href="../page/Cursos.php" class="dropdown-item font-weight-bold">Cursos</a> 
							<a href="../page/Diplomados.php" class="dropdown-item font-weight-bold">Diplomados</a>
						</div>
						<!-- /Dropdown -->
					</li> 
					<li class="nav-item pr-2">
						<a class="nav-link" href="../page/Conocenos.php">Conocenos</a>
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
	<!-- Tab -->
	<div class="container">
		<ul class="nav nav-tabs pt-4 pb-5" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#Programacion" role="tab" data-toggle="tab">En programación</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#Inscripcion" role="tab" data-toggle="tab">En inscripción</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#Dictando" role="tab" data-toggle="tab">Dictando</a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Cursos en programación -->
			<div role="tabpanel" class="tab-pane in active" id="Programacion">
				<div class="row">
				<?php generarlistaCursos();?>
					<div class="col-lg-3 col-sm-3 ">
						<!-- Thumbnails container -->
						<div class="thumbnail">
	
							<img src="../img/portfolio-7.jpg" width=100% alt="">
							<div class="caption">
								<h3 class="text-secondary">Curso 1</h3>
								<p class="text-secondary">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p class="text-secondary"><a href="../page/Programa_Especifico.php" class="btn btn-primary">Action</a></p>
							</div>
						</div>
						<!-- /Thumbnails container -->
					</div>
				</div>
			</div>
			<!-- /Cursos en programación -->
			<!-- Cursos en inscripción -->
			<div role="tabpanel" class="tab-pane fade" id="Inscripcion">
				<div class="row">
				<div class="col-lg-3 col-sm-3 ">
						<!-- Thumbnails container -->
						<div class="thumbnail">
							<img src="../img/portfolio-6.jpg" width=100% alt="">
							<div class="caption">
								<h3 class="text-secondary">Curso 1</h3>
								<p class="text-secondary">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p class="text-secondary"><a href="../page/Programa_Especifico.php" class="btn btn-primary">Action</a></p>
							</div>
						</div>
						<!-- /Thumbnails container -->
					</div>
					<div class="col-lg-3 col-sm-3 ">
						<!-- Thumbnails container -->
						<div class="thumbnail">
							<img src="../img/portfolio-7.jpg" width=100% alt="">
							<div class="caption">
								<h3 class="text-secondary">Curso 2</h3>
								<p class="text-secondary">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p class="text-secondary"><a href="../page/Programa_Especifico.php" class="btn btn-primary">Action</a></p>
							</div>
						</div>
						<!-- /Thumbnails container -->
					</div>
				</div>
			</div>
			<!-- /Cursos en inscripción -->
			<!-- Cursos en dictando -->
			<div role="tabpanel" class="tab-pane fade" id="Dictando">
				<div class="row">
				<div class="col-lg-3 col-sm-3 ">
						<!-- Thumbnails container -->
						<div class="thumbnail">
							<img src="../img/portfolio-7.jpg" width=100% alt="">
							<div class="caption">
								<h3 class="text-secondary">Curso 1</h3>
								<p class="text-secondary">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p class="text-secondary"><a href="../page/Programa_Especifico.php" class="btn btn-primary">Action</a></p>
							</div>
						</div>
						<!-- /Thumbnails container -->
					</div>
					<div class="col-lg-3 col-sm-3 ">
						<!-- Thumbnails container -->
						<div class="thumbnail">
							<img src="../img/portfolio-6.jpg" width=100% alt="">
							<div class="caption">
								<h3 class="text-secondary">Curso 2</h3>
								<p class="text-secondary">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p class="text-secondary"><a href="../page/Programa_Especifico.php" class="btn btn-primary">Action</a></p>
							</div>
						</div>
						<!-- /Thumbnails container -->
					</div>
				</div>
			</div>
			<!-- /Cursos en progreso -->
		</div>
		<!-- /Tab panes -->
	</div>
	<!-- /Tab -->

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