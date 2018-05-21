	<?php include '../consultas/conexion.php';
		function ObtenerCursos() {
			$conexion=mysqli_connect("localhost","root","","bduefi") or
			die("Problemas con la conexión");
			//pa es programaacademico
			//tpa es tipoprogramaacademico
			$registros=mysqli_query($conexion,"select pa.idprogramaacademico, pa.nomprogramaacademico, pa.peqdescripprogaca, pa.idtipoestado, te.nombretipoestado from programaacademico pa, tipoestado te where pa.idtipoestado=te.idtipoestado and pa.idtipoprogramaacademico=1") or die("Problemas en el select:".mysqli_error($conexion));
			mysqli_close($conexion);
			return $registros;
		}

		function mostrarCursos($registros, $estado){
			$numeroRegistros = mysqli_num_rows($registros);
			$contador=0;
			if ($numeroRegistros!=0) {
				$filtro=[];
				while ($registro=mysqli_fetch_assoc($registros)){
					if ($registro['nombretipoestado']==$estado){
						array_push($filtro,$registro);
					}
				}
				foreach ($filtro as $reg){
					$idcurso=$reg['idprogramaacademico'];
					$nombrecurso = $reg['nomprogramaacademico'];
					$descurso = $reg['peqdescripprogaca'];
					$estado= $reg['idtipoestado'];
					$nombreestado=$reg['nombretipoestado'];
						echo "<div class=\"col-lg-3 col-sm-3\">";
							//<!-- Thumbnails container -->";
								echo "<div class=\"thumbnail\">";
								echo "<img src=\"../img/portfolio-7.jpg\" width=100% >";
								echo "<div class=\"caption\">";
									echo "<h3 class=\"text-secondary\">$nombrecurso</h3>";
									echo "<p class=\"text-secondary\">$descurso</p>";
									echo "<p class=\"text-secondary\"><a href=\"../page/Programa_Especifico.php\" class=\"btn btn-primary\">Más Información</a></p>";
								echo "</div>";
							echo "</div>";
							//<!-- /Thumbnails container -->
						echo "</div>";
				}
				
			}else{
				$mensajeCursos = "No hay cursos actualmente";
				echo "<h3 class=\"text-center text-muted\">".$mensajeCursos."</h3>";
			}
		}
	?>