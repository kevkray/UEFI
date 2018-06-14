<html>
<head>
<script type="text/javascript">
<?php
include '../funciones/FuncionInscripcionPersona.php';
?>
function activar(obj) {
  frm = document.forms[0];
  for (i=0; ele = frm.getElementsByTagName('select')[i]; i++)
    ele.style.display = (ele==frm[obj]) ? 'block' : 'none';
}
</script>
</head>
<body>
<form>

<input type="radio" name="rad" onclick="activar('pc')" checked="checked" />
<input type="radio" name="rad" onclick="activar('disco')" />
<select name="pc" style="display:block">
<?php
	mostrarnombreprogaca("1");
?>
</select>
<select name="disco" style="display:none">
<?php
	mostrarnombreprogaca("2");
?>
</select>
</form>
</body>
</html>  


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