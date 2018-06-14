<?php
		include '../consultas/conexion.php';
		function consultarCursos() {
			$conexion=Conexion::getInstance();
			//traigo todos los programas academicos
			$consulta = "select from programaacademico where idtipoprogramaacademico";
			$registros = $conexion->obtener($consulta);
			return $registros;
		}
		function mostrarnombreprogaca($tipoProgAca){
			$conexion=Conexion::getInstance();
			$consulta = "select nomprogramaacademico from programaacademico where idtipoprogramaacademico=\"$tipoProgAca\"";
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$nombrecurso = $reg['nomprogramaacademico'];
					echo "<option>$nombrecurso</option>";
				}
			}
			else{
				$mensajeCursos = "No hay cursos actualmente";
				echo "<h3 class=\"text-center text-muted\">".$mensajeCursos."</h3>";
			}
		}
?>
