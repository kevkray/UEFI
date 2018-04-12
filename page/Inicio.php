<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio UEFI</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--Hojas de estilo-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<!--Hojas de estilo-->
</head>
<body>

	<!--Header-->
	<section id="inicio" class="sticky-top">
		<?php include("../section/header.php");?>
	</section>

<!--Navbar especializada-->
<!--
		<section id="Inicio" class="row-md-12 sticky-top">
			<nav class="col navbar nav-personalizada navbar-expand-md">
				<!-- Toggler/collapsibe Button -->
				<!--<button class="navbar-toggler toggler-personalizado" type="button" data-toggle="collapse" data-target="#inicioNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>->>
				<!-- Navbar links -->
				<!--<div class="collapse navbar-collapse" id="inicioNavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link active" href="#Noticias">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#Portafolio">Portafolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#InfoMapa">Información</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#InfoMapa">Mapa</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#CQHT">¿Con quién hemos trabajado?</a>
						</li>  
					</ul>
				</div> 
			</nav>
		</section>-->
	<div class="container">
	<!--Noticias-->
		<section id="Noticias" class="row justify-content-center pt-5">
			<!--<div class="col-md-12">
				<br>
				<h3 class="section-title text-center">Noticias</h3>
				<div class="section-title-divider"></div>
				<br>
			</div>-->
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
			<div id="news" class="col-md-8 carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#news" data-slide-to="0" class="active"></li>
					<li data-target="#news" data-slide-to="1"></li>
					<li data-target="#news" data-slide-to="2"></li>
					<li data-target="#news" data-slide-to="3"></li>
				</ul>
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
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#news" data-slide="prev">
					<span class="carousel-control-prev-icon "></span>
				</a>
				<a class="carousel-control-next" href="#news" data-slide="next">
					<span class="carousel-control-next-icon "></span>
				</a>
			</div>
		</section>
<!--Portafolio-->
		<section id="Portafolio" class="row-md-12 wow fadeInUp pt-5">
			<div class="col-md-12">
				<h3 class="section-title text-center">Portafolio</h3>
				<div class="section-title-divider"></div>
				<br>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div id="accordion">
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
											  <li type="circle">Interventoría</li>
											  <li type="circle">Capacitación</li>
											  <li type="circle">Asistencia técnica y tecnológica</li>
											  <li type="circle">Proyectos especiales</li>
											  <li type="circle">Consultorías</li>
											</ul>
      								</div>
    							</div>
		  					</div>
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
						</div>
					</div>
				</div>
				<div class="machete col-md-6"><img src="../img/img-Portafolio.jpg" class="img-fluid" alt=""></div>
			</div>
    	</section>
<!--Información y mapa-->
    	<section id="InfoMapa" class="pt-5">
    			<div class="row">
    				<div class="col-md-6">
    					<h3 class="section-title text-center">Información</h3>
    					<div class="section-title-divider"></div>
    					<br>
    					<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui molestias ipsam inventore! Necessitatibus maxime, fugit nostrum perspiciatis recusandae ab magni earum, ad laboriosam alias dolorum voluptates corporis id sed veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga inventore consequuntur commodi beatae temporibus aliquam ad architecto natus quos tempore similique eum culpa molestias, sapiente ea ipsam reprehenderit iusto aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, obcaecati, quidem. Modi voluptates fuga perspiciatis quibusdam earum unde qui nostrum, quod similique repellendus ipsum, dicta voluptas ipsam minima laudantium doloribus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sapiente aut autem, laborum esse vel, quis fuga consectetur quisquam, asperiores nihil possimus, dicta! Sed velit blanditiis sequi deserunt voluptatibus! Ipsum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates iure, reprehenderit numquam quaerat mollitia blanditiis adipisci quidem at cumque sit. Ipsum molestias eum quos consequatur esse cupiditate reprehenderit voluptate ratione!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga cupiditate aspernatur blanditiis magni molestiae, saepe dolor eum dolorum eius, quos eaque quas maiores repellat cum harum quidem qui incidunt sed?</p>
    				</div>
    				<div class="col-md-6">
    					<h3 class="section-title text-center">Mapa</h3>
    					<div class="section-title-divider"></div>
    					<br>
    					<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem aliquam sapiente id reprehenderit eligendi, delectus dicta quasi, quia obcaecati quam non esse sed aspernatur dignissimos ducimus animi veniam earum! Recusandae?</p>
    				</div>
    			</div>
		</section>
	</div>

<!--¿Con quién hemos trabajado?	-->
<!--    	<section id="CQHT">
    		<div class="container">
    			<br><br><br>
    			<div class="row">
    				<div class="col">
    					<!--Empresas-->
<!--							<section id="courses" class="section-padding">
								<div class="container">
								<div class="row">
								</div>
								<div class="container wow fadeInUp">
									<div class="row">
										<div class="col-md-12">
										<h3 class="section-title">¿Con quién hemos trabajado?</h3>
										<div class="section-title-divider"></div>
										<p class="section-description">Entidades con las que hemos trabajado.</p>
										</div>
									</div>
								<div class="container">
								<div class="row">
								

									<div class="col-md-4 col-sm-6 padleft-right">
									<figure class="imghvr-fold-up">
										<img src="../img/course01.jpg" class="img-responsive">
										<figcaption>
										<h3>Course Name</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
										</figcaption>
										<a href="#"></a>
									</figure>
									</div>
									<div class="col-md-4 col-sm-6 padleft-right">
									<figure class="imghvr-fold-up">
										<img src="../img/course02.jpg" class="img-responsive">
										<figcaption>
										<h3>Course Name</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
										</figcaption>
										<a href="#"></a>
									</figure>
									</div>
									<div class="col-md-4 col-sm-6 padleft-right">
									<figure class="imghvr-fold-up">
										<img src="../img/course03.jpg" class="img-responsive">
										<figcaption>
										<h3>Course Name</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
										</figcaption>
										<a href="#"></a>
									</figure>
									</div>
									<div class="col-md-4 col-sm-6 padleft-right">
									<figure class="imghvr-fold-up">
										<img src="../img/course04.jpg" class="img-responsive">
										<figcaption>
										<h3>Course Name</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
										</figcaption>
										<a href="#"></a>
									</figure>
									</div>
									<div class="col-md-4 col-sm-6 padleft-right">
									<figure class="imghvr-fold-up">
										<img src="../img/course05.jpg" class="img-responsive">
										<figcaption>
										<h3>Course Name</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
										</figcaption>
										<a href="#"></a>
									</figure>
									</div>
									<div class="col-md-4 col-sm-6 padleft-right">
									<figure class="imghvr-fold-up">
										<img src="../img/course06.jpg" class="img-responsive">
										<figcaption>
										<h3>Course Name</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
										</figcaption>
										<a href="#"></a>
									</figure>
									</div>
								</div>
								</div>
							</section>
							<!--/ Courses-->
<!--    				</div>
    			</div>
    		</div>
    	</section>-->
    </div>
	<!--Pie de página-->
	<?php include("../section/footer2.php"); ?>
	<!--Pie de página -->
	
	<!--Librerias-->
	<script src="../lib/bootstrap/js/jquery.min.js"></script>
  	<script src="../lib/bootstrap/js/popper.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
	<!--Fin Librerias-->	

</body>
</html>