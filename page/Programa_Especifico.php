<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Programa específico</title>
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
	<?php include '../funciones/FuncionesProgramaEspecifico.php';?>
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
	<div class="container">
		<div class="row pt-4">
			<!-- Nombre del curso -->
			<div class="col-md-8">
				<h3 class="section-title text-center">Curso especializado en fotogrametría con RPAS</h3>
				<div class="section-title-divider"></div>
			</div>
			<!-- /Nombre del curso -->
			<!-- Tab -->
			<div class="col-md-8">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#Dirigido" role="tab" data-toggle="tab">Dirigido a</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Fecha" role="tab" data-toggle="tab">Fecha y duración</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Descripcion" role="tab" data-toggle="tab">Descripción</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Inversion" role="tab" data-toggle="tab">Inversión</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane in active" id="Dirigido">
						<p>Dirigido a</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur numquam molestias incidunt voluptas? Expedita laboriosam eligendi cum magnam quisquam dignissimos fuga optio officiis, dicta omnis? Sit enim corrupti aut magnam.
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim corrupti in eos aspernatur laudantium ut magni, perferendis fuga, officia magnam expedita? Optio, distinctio! Velit provident culpa obcaecati voluptate debitis laboriosam
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, provident optio, laudantium asperiores aspernatur eveniet minus iusto alias, eaque corporis perspiciatis autem sed distinctio eligendi nam architecto ratione repellendus cupiditate!</p>
					</div>
					<div role="tabpanel" class="tab-pane fade in active" id="Fecha">
						<p>Fecha</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur numquam molestias incidunt voluptas? Expedita laboriosam eligendi cum magnam quisquam dignissimos fuga optio officiis, dicta omnis? Sit enim corrupti aut magnam.
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim corrupti in eos aspernatur laudantium ut magni, perferendis fuga, officia magnam expedita? Optio, distinctio! Velit provident culpa obcaecati voluptate debitis laboriosam
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, provident optio, laudantium asperiores aspernatur eveniet minus iusto alias, eaque corporis perspiciatis autem sed distinctio eligendi nam architecto ratione repellendus cupiditate!</p>
					</div>
					<div role="tabpanel" class="tab-pane fade in active" id="Descripcion">
						<p>Descripción</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur numquam molestias incidunt voluptas? Expedita laboriosam eligendi cum magnam quisquam dignissimos fuga optio officiis, dicta omnis? Sit enim corrupti aut magnam.
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim corrupti in eos aspernatur laudantium ut magni, perferendis fuga, officia magnam expedita? Optio, distinctio! Velit provident culpa obcaecati voluptate debitis laboriosam
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, provident optio, laudantium asperiores aspernatur eveniet minus iusto alias, eaque corporis perspiciatis autem sed distinctio eligendi nam architecto ratione repellendus cupiditate!</p>
					</div>
					<div role="tabpanel" class="tab-pane fade in active" id="Inversion">
						<p>Código de recaudo</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur numquam molestias incidunt voluptas? Expedita laboriosam eligendi cum magnam quisquam dignissimos fuga optio officiis, dicta omnis? Sit enim corrupti aut magnam.
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim corrupti in eos aspernatur laudantium ut magni, perferendis fuga, officia magnam expedita? Optio, distinctio! Velit provident culpa obcaecati voluptate debitis laboriosam</p>
					</div>
				</div>
				<!-- Tab panes -->
			</div>
			<!-- /Tab -->
			<div class="col-md-4 pt-5">
				<!-- Imagen -->
				<div class="row pt-3">
					<div class="col">
						<img src="../img/portfolio-7.jpg" alt="">
					</div>
				</div>
				<!-- /Imagen -->
				<div class="row pt-3">
					<!-- Thumbnail -->
					<div class="thumbnail">
						<div class="caption">
							<p class="text-secondary">Descripción corta</p>
							<p class="text-center">Quo tempora possimus consequatur voluptate ipsa esse, atque sapiente sit amet aut earum provident accusantium sequi placeat quas deleniti numquam quaerat similique.</p>
							<p>Estado</p>
							<p class="text-secondary"><center><a href="../page/inscripcion.php" class="btn btn-primary">Inscribirse</a></center></p>
							<p class="text-secondary"><center><a href="../page/Programa_Especifico.php" class="btn btn-primary">Ver más</a></center></p>
						</div>
					</div>
					<!-- /Thumbnail -->
				</div>
			</div>
		</div>
	</div>
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