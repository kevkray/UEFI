<?php
		include '../consultas/conexion.php';
		function mostrarnombreprogaca($tipoProgAca){
			$conexion=Conexion::getInstance();
			$consulta = "select idprogramaacademico, nomprogramaacademico from programaacademico where idtipoprogramaacademico=\"$tipoProgAca\"";
			$registros = $conexion->obtener($consulta);
			$numeroRegistros = mysqli_num_rows($registros);
			if ($numeroRegistros!=0) {
				while ($reg=mysqli_fetch_assoc($registros)){
					$idcurso = $reg['idprogramaacademico'];
					$nombrecurso = $reg['nomprogramaacademico'];
					echo "<option value=\"$idcurso$|$|$$nombrecurso\">$nombrecurso</option>";
				}
			}
			else{
				$mensajeCursos = "No hay cursos actualmente";
				echo "<h3 class=\"text-center text-muted\">".$mensajeCursos."</h3>";
			}
		}
		function realizarInscripcion(){
			$idformapago = "1";//Debido a que solo hay pago físico, cambia cuando se agregue la funcionalidad de pago electrónico
			$temp = $_POST[$_POST['radioprogaca']];
			$idprogacademico = explode("$|$|$",$temp);
			echo $idprogacademico[0];
			echo "<br>";
			echo $idprogacademico[1];
			echo "<br>";
			date_default_timezone_set("America/Bogota");
			$horainscripcion = date('G:i:s');
			echo $horainscripcion;
			echo "<br>";
			$fechahorainscripcion=date("Y-m-d");
			echo $fechahorainscripcion;
			echo "<br>";
			$nombreinscrito = $_POST['nombre'];
			echo $nombreinscrito;
			echo "<br>";
			$apellidoinscrito = $_POST['apellido'];
			echo $apellidoinscrito;
			echo "<br>";
			$temp = $_POST['tipoDocumento'];
			$idtipodocumento = explode("$|$|$",$temp);
			echo $idtipodocumento[0];
			echo "<br>";
			echo $idtipodocumento[1];
			echo "<br>";
			$numerodocumento = $_POST['numeroDocumento'];
			echo $numerodocumento;
			echo "<br>";
			$lugarexpedicion = $_POST['lugarExpedicion'];
			echo $lugarexpedicion;
			echo "<br>";
			$fechaNacimiento = $_POST['fechaNacimiento'];
			echo $fechaNacimiento;
			echo "<br>";
			$lugarnacimiento = $_POST['lugarNacimiento'];
			echo $lugarnacimiento;
			echo "<br>";
			$direccionhogar = $_POST['direccionHogar'];
			echo $direccionhogar;
			echo "<br>";
			$direccionoficina = $_POST['direccionOficina'];
			echo $direccionoficina;
			echo "<br>";
			$telefonohogar = $_POST['telefonoHogar'];
			echo $telefonohogar;
			echo "<br>";
			$telefonooficina = $_POST['inputteloficina'];
			echo $telefonooficina;
			echo "<br>";
			$telefonocelular = $_POST['inputtelcelular'];
			echo $telefonocelular;
			echo "<br>";
			$email = $_POST['inputemail'];
			echo $email;
			echo "<br>";
			$profesion = $_POST['profesion'];
			echo $profesion;
			echo "<br>";

			$dirfotoinscrito = $_POST['numeroDocumento'];
			$dirhojavida = $_POST['numeroDocumento'];
			$dirfotocedula = $_POST['numeroDocumento'];
			$dirfotocarneseguro = $_POST['numeroDocumento'];
			$dirfotoconsignacion = $_POST['numeroDocumento'];

			$conexion=Conexion::getInstance();
			$consulta = "select numerodocumento from personainscrita where numerodocumento=\"$numerodocumento\",idprogramaacademico=\"$idprogacademico\",idtipodocumento=\"$idtipodocumento\"";
			$registros = $conexion->obtener($consulta);
			$existe = mysqli_num_rows($registros);	
			if ($existe ==0) {
				$carpeta = '../archivos/'.$idprogacademico[1];
					if (!file_exists($carpeta)) {
						mkdir($carpeta, 0777, true);
					}
					
					$uploadedfileload="true";
					if (!($_FILES['fotoperfil']['type'] =="image/jpeg" OR $_FILES['fotoperfil']['type'] =="image/gif" OR $_FILES['fotoperfil']['type'] =="image/png")){
						$msg ="";
						$msg=$msg." Tu archivo tiene que ser JPG o GIF o PNG. Otros archivos no son permitidos<BR>";
						$uploadedfileload="false";
					}
					$target_path = $carpeta;
					$target_path = $target_path ."/perfil.jpg"; 
					if($uploadedfileload=="true"){
						if(move_uploaded_file($_FILES['fotoperfil']['tmp_name'], $target_path)) {
							$registros= mysqli_query($conexion,"insert into puta (nombreputa, descripcion, linkfotoperfil, edadputa, correoputa, preciohora, telefonoputa, nicknameputa, contrasenaputa, videoputa, localidad) values ('$_REQUEST[nombre]','$_REQUEST[descripcion]','$target_path','$_REQUEST[edad]', '$_REQUEST[correo]', '$_REQUEST[precio]', '$_REQUEST[telefono]', '$_REQUEST[nickname]','$_REQUEST[contrasena]', '$_REQUEST[video]', '$_REQUEST[localidad]')") or die("Problemas en el insert".mysqli_error($conexion));
							if ($registros) {
								$mensaje = "cuenta creada exitosamente!";
								$consulta=mysqli_query($conexion, "select idputa from puta where nicknameputa='".$nickname."'");
								$fila = mysqli_fetch_row($consulta);
								$idputa = $fila[0];	
								//se suben a la BD sus caracterisiticas
								if (!empty($_POST['cara'])) {
									foreach($_POST['cara'] as $seleccionada) {
										$consulta2=mysqli_query($conexion, "select idcaracteristica from caracteristicas where nombrecaracteristica='".$seleccionada."'");
										$fila2 = mysqli_fetch_row($consulta2);
										$idCaracteristica = $fila2[0];
										$insercionCaracteristicas = mysqli_query($conexion, "insert into putacaracteristicas (idputa, idcaracteristica) values (".$idputa.",'".$idCaracteristica."')");
										if ($insercionCaracteristicas) {
										}else {
											echo "no se ingreso las caracteristicas en la BD";
										}
									}
								}
								//se suben a la BD los servicios que ofrece
								if (!empty($_POST['servi'])) {
									foreach($_POST['servi'] as $seleccionada2) {
										$consulta3=mysqli_query($conexion, "select idServicio from servicios where nombreservicio='".$seleccionada2."'");
										$fila3 = mysqli_fetch_row($consulta3);
										$idServicio = $fila3[0];
										$insercionServicios = mysqli_query($conexion, "insert into putaServicios (idputa, idServicio) values (".$idputa.",'".$idServicio."')");
										if ($insercionServicios) {
											echo "si ingreso el valor".$seleccionada2;
										}else {
											echo "no se ingreso los servicios en la BD";
										}
									}
								}

								//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
								foreach($_FILES["fotos"]['tmp_name'] as $key => $tmp_name){
									//Validamos que el archivo exista
									if($_FILES["fotos"]["name"][$key]) {
										$filename = $_FILES["fotos"]["name"][$key]; //Obtenemos el nombre original del archivo
										$source = $_FILES["fotos"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
										$directorio = $carpeta; //Declaramos un  variable con la ruta donde guardaremos los archivos	
										$target_path2 = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
										//Movemos y validamos que el archivo se haya cargado correctamente
										//El primer campo es el origen y el segundo el destino
										if(move_uploaded_file($source, $target_path2)) {		
											$registros= mysqli_query($conexion,"insert into fotos (idputa, linkfoto) values ($idputa, '$target_path2')") or die("Problemas en el insert ".mysqli_error($conexion));
											if ($registros) {
											}else{
												$mensaje = "error al ingresar las fotos de la galeria";
											}
											} else {	
											echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
										}
									}
								}
								crearArchivoScort($nickname);
							}else{
								$mensaje = "error al ingresar la prepago";
							}
						} 
						else{
							echo "No has puesto foto de perfil, trata de nuevo!";
						}
					}else{
						echo "<br><br><br><br>";
						echo $msg;
					}	
			}
			else{
				$mensaje="el nickname ya existe, prueba con otro";
			}
		}
?>
