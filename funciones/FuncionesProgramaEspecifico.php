<?php include '../consultas/conexion.php';
		function consultarCursos() {
			$conexion=Conexion::getInstance();
			
			$consulta = "select pa.idprogramaacademico, pa.nomprogramaacademico, pa.peqdescripprogaca, pa.idtipoestado, te.nombretipoestado from programaacademico pa, tipoestado te where pa.idtipoestado=te.idtipoestado and pa.idtipoprogramaacademico=1";
			$registros = $conexion->obtener($consulta);
			return $registros;
		}
?>