<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contáctenos</title>
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

	<!-- Header -->
	<section id="inicio" class="sticky-top">
		<?php include("../section/header.php");?>
	</section>
	<!-- /Header -->

	<div class="container pt-5">
		<div class="row">
			<!-- Envío de un mensaje -->
			<div class="col-md-6">
				<h3 class="section-title text-center">Envíanos un mensaje</h3>
				<div class="section-title-divider"></div>
				<form class="pt-4">
					<input type="text" class="form-control" placeholder="Nombre">
					<input type="email" class="form-control" placeholder="Correo">
					<input type="text" class="form-control" placeholder="Asunto">
					<textarea class="form-control" rows="9" placeholder="Mensaje"></textarea>
					<div class="form-field">
						<button class="btn-block btn-lg btn-primary">Enviar</button>
                    </div>
				</form>
			</div>
			<!-- /Envío de un mensaje -->
			<!-- Información de contacto -->
			<div class="col-md-6 text-center">
					<h3 class="section-title text-center">Contacto</h3>
					<div class="section-title-divider"></div>
					<br>
					Coordinador Unidad de Extensión Facultad de Ingeniería<br>
					Victor Hugo Medina Garcia<br><br>

					Correo<br>
					medina@udistrital.edu.co<br><br>

					Asistente encargado<br>
					Oscar Leonardo Celis Granados<br><br>

					Correo de la Unidad de Extensión<br>
					unidad-extension-ing@udistrital.edu.co <br><br>

					Teléfono<br>
					323 93 00 Ext. 1711 -1709 <br>

					Horario de Atención<br>
					Lunes a Viernes de 8:00 a.m. a 5:00 p.m <br><br>
    		</div>
			<!-- /Información de contacto -->
		</div>
	</div>

	<!-- Pie de página -->
	<?php include("../section/footer.php"); ?>
	<!-- /Pie de página -->

	<!-- Librerias -->
	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  	<script src="../lib/bootstrap/js/jquery.min.js"></script>
  	<script src="../lib/bootstrap/js/popper.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
	<!-- /Librerias -->	
</body>
</html>