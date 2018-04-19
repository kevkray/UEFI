<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Titulo UEFI</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Hojas de estilo -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../lib/slick/css/slick.css">
  <link rel="stylesheet" type="text/css" href="../lib/slick/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="../lib/imagehover/css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/animate/css/animate.min.css" >
	<!-- /Hojas de estilo -->
</head>
<body>

	<!-- Header -->
	<section id="inicio">
		<?php include("../section/header.php"); ?>
	</section>	
  <!-- /Header -->
  
  <div class="container">
    <div class="row pt-5">
      <!-- Imágenes de UEFI -->
      <div class="col-md-6 sliderUEFI">
        <div><img src="../img/course01.jpg" alt="" class="img-fluid"></div>
        <div><img src="../img/course02.jpg" alt="" class="img-fluid"></div>
        <div><img src="../img/course03.jpg" alt="" class="img-fluid"></div>
        <div><img src="../img/course04.jpg" alt="" class="img-fluid"></div>
        <div><img src="../img/course05.jpg" alt="" class="img-fluid"></div>
        <div><img src="../img/course06.jpg" alt="" class="img-fluid"></div>
        <div><img src="../img/course07.jpg" alt="" class="img-fluid"></div>
        <div><img src="../img/course08.jpg" alt="" class="img-fluid"></div>
      </div>
      <!-- /Imágenes de UEFI -->
      <!-- ¿Quiénes somos? -->
      <div class="col-md-6 align-items-center">
        <p>La extensión es el conjunto de actividades que complementan la educación mediante
         la actualización y ptráctica profesional a través de la suscripción de convenios 
         interinstitucionales de servicios, asesorías, consultoría y la capacitación en 
         Educación No Formal (diplomados, cursos), con un alto impacto social</p>
      </div>
      <!-- /¿Quiénes somos? -->
    </div>
    <!-- Misión y visión -->
    <div class="row justify-content-center">
      <div class="col-md-8 sliderMisVis">
        <div>
          <h3 class="text-center">Misión</h3>
          <p>La dependencia Unidad de Extensión Facultad de Ingeniería tiene como misión, 
          la consolidación del conocimiento, apoyada en el talento humano que responde eficientemente 
          a las necesidades y demandas de la sociedad, de los diferentes escenarios empresariales y 
          comerciales, de la comunidad académica y del Estado, mediante la suscripción de proyectos 
          interinstitucionales y programas de Educación no Formal, fundamentados en servicios 
          profesionales de alta calidad que es retroalimentado por los egresados, alumnos y docentes, 
          fortaleciendo la Facultad de Ingeniería y a su vez, la Universidad.</p>
        </div>
        <div>
          <h3 class="text-center">Visión</h3>
          <p>La Unidad de Estensión pretende a mediano plazo, consolidar el vínculo académico 
          y profesional de la Facultad de Ingeniería, con el desarrollo sostenible del país 
          y la formación integral de la comunidad, facilitando el intercambio de productos 
          de su actividad académica, ofreciendo soluciones útiles para la sociedad y transmitiendo 
          conocimientos en todos los contextos de la diversidad cultural colombiana, de manera 
          transparente y manteniendo los más altos estándares de calidad, siendo de esta manera 
          reconocida en el ámbito local, nacional e internacional.</p>
        </div>
      </div>
    </div>
    <!-- /Misión y visión -->
    <!-- Carousel Slick ¿Con quién hemos trabajado? -->
    <div class="row justify-content-center">
      <div class="col-md-8 sliderCQHT">
        <div><img src="../img/clients/apple.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/atom.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/blackberry.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/dropbox.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/envato.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/firefox.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/joomla.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/magento.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/mozilla.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/redhat.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/ubuntu.png" width=40% alt="" class="img-fluid"></div>
        <div><img src="../img/clients/wordpress.png" width=40% alt="" class="img-fluid"></div>
      </div>
    </div>
    <!-- /Carousel Slick ¿Con quién hemos trabajado? -->
  </div>

	<!-- Pie de página -->
	<?php include("../section/footer2.php"); ?>
	<!-- /Pie de página -->

  <!-- Librerias -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="../lib/bootstrap/js/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/popper.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/slick/js/slick.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../lib/morphext/js/morphext.min.js"></script>
	<script src="../lib/wow/js/wow.min.js"></script>
  <!-- /Librerias -->
    <!-- Script de Carousel ¿Con quién hemos trabajado? -->
    <script type="text/javascript">
    $(document).ready(function() {
      $('.sliderCQHT').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    });
  </script>
  <!-- /Script de Carousel ¿Con quién hemos trabajado? -->
  <!-- Script de Carousel Misión y visión -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.sliderMisVis').slick({
        dots: true,
        arrows: false,
        autoplay: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
  </script>
  <!-- /Script de Carousel Misión y visión -->
  <!-- Script de Carousel Imágenes de UEFI -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.sliderUEFI').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
  </script>
  <!-- /Script de Carousel Imágenes de UEFI -->
</body>
</html>