	<?php include '../consultas/conexion.php';
		function consultarCursos() {
			$conexion=Conexion::getInstance();
			$consulta = "select pa.idprogramaacademico, pa.nomprogramaacademico, pa.peqdescripprogaca, pa.idtipoestado, te.nombretipoestado from programaacademico pa, tipoestado te where pa.idtipoestado=te.idtipoestado and pa.idtipoprogramaacademico=1";
			$registros = $conexion->obtener($consulta);
			return $registros;
		}

		function mostrarCursos($estado){
			$conexion=Conexion::getInstance();
			$consulta = "select pa.idprogramaacademico, pa.nomprogramaacademico, pa.peqdescripprogaca from programaacademico pa, tipoestado te where pa.idtipoestado=te.idtipoestado and pa.idtipoprogramaacademico=1 and te.nombretipoestado=\"$estado\"";
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$idcurso=$reg['idprogramaacademico'];
					$nombrecurso = $reg['nomprogramaacademico'];
					$descurso = $reg['peqdescripprogaca'];
					echo "<div class=\"col-lg-3 col-sm-3\">";
						//<!-- Thumbnails container -->";
							echo "<div class=\"thumbnail\">";
							echo "<img src=\"../img/portfolio-7.jpg\" width=100% >";
							echo "<div class=\"caption\">";
								echo "<h3 class=\"text-secondary\">$nombrecurso</h3>";
								echo "<p class=\"text-secondary\">$descurso</p>";
								echo "<p class=\"text-secondary\">";
									echo "<form action=\"Programa_Especifico.php\" method=\"post\">";
										echo "<button class=\"btn btn-primary\" name=$idcurso>";
											echo "Más información";
										echo "</button>";
									echo "</form>";
								echo "</p>";
							echo "</div>";
						echo "</div>";
						//<!-- /Thumbnails container -->
					echo "</div>";	
				}
			}
			else{
				$mensajeCursos = "No hay Programas Academicos actualmente en este estado";
				echo "<h3 class=\"text-center text-muted\">".$mensajeCursos."</h3>";
			}
		}
	?>