<?php include '../consultas/conexion.php';
		function consultarConvenios() {
			$conexion=Conexion::getInstance();
			$consulta = "select yearconvenio from convenios group by yearconvenio";
			$registros = $conexion->obtener($consulta);
			while ($reg=mysqli_fetch_assoc($registros)){
				mostrarConveniosYear($reg['yearconvenio'])
			}

		}

		function mostrarConveniosYear($year){
			$conexion=Conexion::getInstance();
			$consulta = "select conv.nombreconvenio, conv.estadoconvenio, conv.contratanteconvenio, conv.valorconvenio, conv.duracionconvenio, conv.objetoconvenios from convenios conv where conv.yearconvenio=\"$year\"";
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$nombreconv = $reg['nombreconvenio'];
					$estadoconv = $reg['estadoconvenio'];
					$contratanteconv = $reg['contratanteconvenio'];
					$valorconv = $reg['valorconvenio'];
					$duracionconv = $reg['duracionconvenio'];
					$objetoconv= $reg['objetoconvenios'];

					//<!-- Impresión por año -->
					echo "<div class=\"card\">";
						echo "<div class="card-header" id="headingOne">
						echo "<!-- Título -->
						echo "<h5 class="mb-0">
						echo "<button class="btn btn-link btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								Convenios interadministrativos suscritos en el año 2000
								</button>
								echo "</h5>
							//<!-- /Título -->
							echo "</div>
						//<!-- Tabla de convenios -->
						echo "<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						echo "<div class="card-body">
						echo "<table class="table table-hover">
						echo "<thead>
						echo "<tr>
						echo "<th scope="col">Convenios</th>
						echo "<th scope="col">Estado</th>
						echo "<th scope="col">Contratante</th>
						echo "<th scope="col">Valor</th>
						echo "<th scope="col">Duración</th>
						echo "<th scope="col">Objeto</th>
						echo "</tr>
						echo "</thead>
						echo "<tbody>
						echo "<tr>
						echo "<td>Convenio Interadministrativo N. 003 de 2000 suscrito entre el 
											Fondo de Desarrollo Local de Santa fe y la Universidad Distrital Francisco José de Caldas</td>
											<td>Conciliación-Liquidación</td>
											<td>Fondo de Desarrollo Local de Santa fe</td>
											echo "<td>$175.250.000</td>
											echo "<td>12 meses</td>
											echo "<td>Presar la asistencia técnico legal y psico-social a 220 predios 
											del barrio del Dorado, para la obtención de los títulos de propiedad y 
											posterior inscripción en la Oficina de Instrumentos Públicos de la ciudad</td>
											echo "</tr>
											echo "</tr>
										<tr>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /Tabla de convenios -->
					</div>
					<!-- /2000 -->






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
				$mensajeCursos = "No hay cursos actualmente";
				echo "<h3 class=\"text-center text-muted\">".$mensajeCursos."</h3>";
			}
		}
	?>