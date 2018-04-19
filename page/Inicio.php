<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio UEFI</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<!-- /Hojas de estilo -->
</head>
<body>
	<!-- Header -->
	<section id="inicio" class="sticky-top">
		<?php include("../section/header.php");?>
	</section>
	<!-- /Header -->
	<!-- Inicio -->
	<div class="container">
		<!-- Noticias -->
		<section id="Noticias" class="row justify-content-center pt-5">
			<!-- Noticias más relevantes -->
			<div class="col-md-4">
				<figure class="imghvr-fold-up">
					<img src="../img/Prueba1.jpg" class="img-responsive">
					<figcaption>
						<h3>Course Name</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
					</figcaption>
					<a href="#"></a>
				</figure>
				<figure class="imghvr-fold-up">
					<img src="../img/Prueba1.jpg" class="img-responsive">
					<figcaption>
						<h3>Course Name</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
					</figcaption>
					<a href="#"></a>
				</figure>
			</div>
			<!-- /Noticias más relevantes -->
			<!-- Carrousel -->
			<div id="news" class="col-md-8 carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#news" data-slide-to="0" class="active"></li>
					<li data-target="#news" data-slide-to="1"></li>
					<li data-target="#news" data-slide-to="2"></li>
					<li data-target="#news" data-slide-to="3"></li>
				</ul>
				<!-- /Indicators -->
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../img/client-1.jpg" class="img-fluid rounded mx-auto d-block" alt="Los Angeles">
					</div>
					<div class="carousel-item">
						<img src="../img/client-2.jpg" class="img-fluid rounded mx-auto d-block" alt="Chicago">
					</div>
					<div class="carousel-item">
						<img src="../img/imagen.jpg" class="img-fluid rounded mx-auto d-block" alt="New York">
					</div>
					<div class="carousel-item">
						<img src="../img/client-2.jpg" class="img-fluid rounded mx-auto d-block" alt="Chicago">
					</div>
				</div>
				<!-- /The slideshow -->
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#news" data-slide="prev">
					<span class="carousel-control-prev-icon "></span>
				</a>
				<a class="carousel-control-next" href="#news" data-slide="next">
					<span class="carousel-control-next-icon "></span>
				</a>
				<!-- /Left and right controls -->
			</div>
			<!-- /Carrousel -->
		</section>
		<!-- /Noticias -->
		<!-- Portafolio -->
		<section id="Portafolio" class="row-md-12 wow fadeInUp pt-5">
			<!-- Título -->
			<div class="col-md-12">
				<h3 class="section-title text-center">Portafolio</h3>
				<div class="section-title-divider"></div>
				<br>
			</div>
			<!-- /Título -->
			<!-- Contenido del portafolio -->
			<div class="row">
				<div class="col-md-6">
					<!-- Información escrita del protafolio -->
					<div class="row">
						<!-- Acordeón -->
						<div id="accordion">
							<!-- Extensión no formal -->
  							<div class="card">
    							<div class="card-header" id="headingOne">
      								<h5 class="mb-0">
        								<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          									Extensión no formal
        								</button>
      								</h5>
    							</div>		
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      								<div class="card-body">
									  	<ul>
									  		<li type="circle">Programas Corporativos</li>
											<li type="circle">Programas de Fortalecimiento y Desarrollo Local</li>
											<li type="circle">Acción en Iniciativas Productivas</li>
											<li type="circle">Programas de Innovación</li>
											<li type="circle">Programas de Extensión Social</li>
											<li type="circle">Programas Interdisciplinarios de Extensión</li>
											<li type="circle">Otras Modalidades de Extensión</li>
										</ul>
      								</div>
    							</div>
  							</div>
							<!-- /Extensión no formal -->
							<!-- Hemos trabajado en: -->
  							<div class="card">
    							<div class="card-header" id="headingTwo">
      								<h5 class="mb-0">
        								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          									Hemos trabajado en:
        								</button>
      								</h5>
    							</div>
    							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      								<div class="card-body">
									  	<ul>
										  	<li type="circle">Proyectos de Interventoría</li>
											<li type="circle">Proyectos de Capacitación</li>
											<li type="circle">Proyectos de Asistencia técnica y tecnológica</li>
											<li type="circle">Proyectos especiales</li>
											<li type="circle">Consultorías Externas</li>
										</ul>
      								</div>
    							</div>
		  					</div>
							<!-- /Hemos trabajado en: -->
							<!-- Proyectos sociales -->
  							<div class="card">
    							<div class="card-header" id="headingThree">
      								<h5 class="mb-0">
        								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          									Proyectos sociales
        								</button>
      								</h5>
    							</div>
    							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      								<div class="card-body">
									  	<ul>
										  	<li type="circle">Programas de cooperación con organizaiones locales</li>
											<li type="circle">Proyectos de participación local</li>
											<li type="circle">Proyectos de desarrollo local</li>
											<li type="circle">Programas orientados a vinculación laboral</li>
											<li type="circle">Proyectos de cultura, arte, recreación y deporte</li>
											<li type="circle">Proyectos de bienestar social</li>
											<li type="circle">Pasantías</li>
										</ul>
      								</div>
    							</div>
  							</div>
							<!-- /Proyectos sociales -->
						</div>
						<!-- /Acordeón -->
					</div>
					<!-- /Información escrita del protafolio -->
				</div>
				<!-- Imagen de protafolio -->
				<div class="machete col-md-6"><img src="../img/img-Portafolio.jpg" class="img-fluid" alt=""></div>
				<!-- /Imagen de protafolio -->
			</div>
			<!-- /Contenido del portafolio -->
    	</section>
		<!-- /Portafolio -->
		<!-- Información y mapa -->
    	<section id="InfoMapa" class="pt-5">
			<div class="row">
				<!-- Información -->
				<div class="col-md-6 text-center">
					<h3 class="section-title text-center">Información</h3>
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
					323 93 00 Ext. 1711 -1709 <br><br>

					Horario de Atención<br>
					Lunes a Viernes de 8:00 a.m. a 5:00 p.m <br><br>
    			</div>
				<!-- /Información -->
				<!-- Mapa -->
				<div class="col-md-6">
					<h3 class="section-title text-center">Mapa</h3>
					<div class="section-title-divider"></div>
    				<div id="map" style="width:100%;height:80%;"></div>   				
    			</div>
				<!-- /Mapa -->
    		</div>
		</section>
		<!-- /Información y mapa -->
    </div>
	<!-- /Inicio -->
	
	<!-- Pie de página -->
	<?php include("../section/footer.php"); ?>
	<!-- /Pie de página -->
	
	<!-- Librerias -->
	<script src="../lib/bootstrap/js/jquery.min.js"></script>
  	<script src="../lib/bootstrap/js/popper.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../js/mapa.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
	<!-- /Librerias -->

</body>
</html>