<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Titulo UEFI</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--Hojas de estilo-->
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<!--Hojas de estilo-->
</head>
<body>

	<!--Header-->
	<section id="inicio">
		<?php include("../section/header.php"); ?>
	</section>	
	
	<!--Tab-->
	<div class="container">
		<div class="row pt-4">
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
					<div role="tabpanel" class="tab-pane fade in active" id="Dirigido">
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
			</div>
			<div class="col-md-4 pt-5">
				<div class="row pt-3">
					<div class="col">
						<img src="../img/portfolio-7.jpg" alt="">
					</div>
				</div>
				<div class="row pt-3">
					<div class="thumbnail">
						<div class="caption">
							<p class="text-secondary">Descripción corta</p>
							<p><center>Quo tempora possimus consequatur voluptate ipsa esse, atque sapiente sit amet aut earum provident accusantium sequi placeat quas deleniti numquam quaerat similique.</center></p>
							<p>Estado</p>
							<p class="text-secondary"><center><a href="../page/Programa_Especifico.php" class="btn btn-primary">Inscribirse</a></center></p>
							<p class="text-secondary"><center><a href="../page/Programa_Especifico.php" class="btn btn-primary">Ver más</a></center></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Pie de página-->
	<?php include("../section/footer.php"); ?>
	<!--Pie de página -->

	<!--Librerias-->
	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  	<script src="../lib/bootstrap/js/jquery.min.js"></script>
  	<script src="../lib/bootstrap/js/popper.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
	<!--Fin Librerias-->	
</body>
</html>