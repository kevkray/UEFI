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
    <!-- Carousel Slick -->
    <div class="row justify-content-center">
      <div class="col-md-8 thing">
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
    <!-- /Carousel Slick -->
  </div>

	<!-- Pie de página -->
	<?php include("../section/footer.php"); ?>
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
    <!-- Script de Carousel -->
    <script type="text/javascript">
    $(document).ready(function() {
      $('.thing').slick({
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
  <!-- /Script de Carousel -->
</body>
</html>