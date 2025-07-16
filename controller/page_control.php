<?php
	class design
	{
		
		function Home()
		{
			require_once("view/Content/Home.php");
		}//fin funcion login

		function Register()
		{
			/* Llamado a la lógica */
			include("logic/Casillero.php");
    		$reporte = new Casillero(null,null,null,null,null,null,null,null,null,null,null,null);
    		/*Llamado a los select select*/
			$combo = $reporte->select_tipo_documento();
			$combo2 = $reporte->select_departamento();
			$combo3 = $reporte->select_municipio();
			require_once("view/Content/Register.php");
		}//fin funcion login
		
		function Dashboard()
		{
			$Page['site']="Casillero";
			$Page['page_name']="Dashboard";
			require_once("view/Content/Dashboard.php");
		}//fin funcion login

		function Profile()
		{
			require_once("view/Content/Profile.php");
		}//fin funcion login

		function News()
		{
			$Page['site']="Casillero";
			$Page['page_name']="Novedades";
			require_once("view/Content/News.php");
		}//fin funcion login

		function Prealert()
		{
			$Page['site']="Casillero";
			$Page['page_name']="Pre alerta";
			require_once("view/Content/Prealert.php");
		}//fin funcion login

		function Shipping()
		{
			$Page['site']="Casillero";
			$Page['page_name']="Envio";
			require_once("view/Content/Shipping.php");
		}//fin funcion login

		function Dispatch()
		{
			$Page['site']="Casillero";
			$Page['page_name']="Despachar";
			require_once("view/Content/Dispatch.php");
		}//fin funcion login

		function Password()
		{
			$Page['site']="Casillero";
			$Page['page_name']="Contraseña";
			require_once("view/Content/Password.php");
		}//fin funcion login

		
		function registration() {
			if(isset($_POST["txtbox"])) {
				/* Llamado a la lógica */
				include("logic/Casillero.php");
				
				// Instanciamiento
				$llamar = new conexion();
				$llamar1 = $llamar->con();

				// Generamos número aleatorio
				function generar_cod() {
					$numeros = range(100000, 999999);
					shuffle($numeros);  
					return array_pop($numeros);
				}
				//Captura de datos 
				$cod = generar_cod();
				$ema = mysqli_real_escape_string($llamar1, strtolower($_POST["txtemail"]));
				$nom = mysqli_real_escape_string($llamar1, strtoupper($_POST["txtnombre"]));
				$ape = mysqli_real_escape_string($llamar1, strtoupper($_POST["txtapellido"]));
				$nro = mysqli_real_escape_string($llamar1, $_POST["txtid"]);
				$tipo = mysqli_real_escape_string($llamar1, strtolower($_POST["txttipo"]));
				$tlf = mysqli_real_escape_string($llamar1, $_POST["txttlf"]);
				$dep = mysqli_real_escape_string($llamar1, strtolower($_POST["txtdepartamento"]));
				$mun = mysqli_real_escape_string($llamar1, strtolower($_POST["txtmunicipio"]));
				$dir = mysqli_real_escape_string($llamar1, strtolower($_POST["txtdireccion"]));
				$det = mysqli_real_escape_string($llamar1, strtolower($_POST["txtdetalle"]));
				$con = mysqli_real_escape_string($llamar1, $_POST["txtcontraseña"]);

				/* Enviar datos */
				$insertar = new Casillero($cod, $ema, $nom, $ape, $nro, $tipo, $tlf, $dep, $mun, $dir, $det, $con);
				/* Evitar duplicación del registro */
				$verificar = $insertar->verificar($ema, $nro);
				
				if(mysqli_num_rows($verificar) > 0) {
					echo "<script> 
						swal({ 
						title: '¡USUARIO YA CREADO!',
						text: 'El usuario que deseas crear ya esta creado, por favor rectifica los datos.',
						icon: 'error', 
						button: 'ok!' 
						});
					</script>";

					header("location:?clase=page&&funcion=Register");
					exit();
				}
				/* Registro validado correctamente */
				$res_inser = $insertar->create();

				/* Validar respuesta */
				if($res_inser == 1) {
				// Aviso de creado  
					echo "<script>
						swal({
						title: '¡USUARIO CREADO EXITOSAMENTE!',
						text: 'Gracias por registrarse y ser parte de nosotros.',
						icon: 'success',  
						button: 'Gracias!' 
						});  
					</script>";
				/* Muestra de creación correcto */
					require_once("view/Content/Home.php");
				}else{
					echo "<script>alert('ERROR EN EL REGISTRO')</script>";
					require_once("view/Content/Register.php");  
				}

			} else {
				
				echo "<script>alert('ERROR CON EL CHECKBOX')</script>";
			
			}
		}

		function validation()
		{
			//Llamado a la logica
    		include("logic/Casillero.php");
			//instanciamiento de la BD
		    $llamar= new conexion();
		    $llamar1= $llamar->con();
			//Captura de datos
			$usuario= mysqli_real_escape_string( $llamar1, $_POST['usuario']);
			$con= mysqli_real_escape_string( $llamar1, $_POST['clave']);
			//Enviar datos  
            	$insertar = new Casillero(null,null,null,null,null,null,null,null,null,null,null,null);
            //Acceso	
           		$acceso = $insertar->access($usuario,$con);
			//Validacion del envio de datos
	         	$filas=mysqli_fetch_array($acceso);		
			/* Validar respuesta */
			if($filas != 0) {
				// Aviso de creado  
				echo "<script>
				Swal.fire({
					title: '¡Estimado usuario!',
					text: 'Por favor, actualizar sus respectivos datos',
					icon: 'question'
				});
				</script>";
					//Iniciar sesion
					session_start();
					$_SESSION['usuario']=$usuario;
				/* Muestra de creación correcto */
					header("location:?clase=page&&funcion=Dashboard");
				exit();
			}else{
				echo "<script>
					Swal.fire({
						title: 'Error en el inicio de sesión',
						text: 'Por favor, verificar el email y contraseña sean los correctos',
						icon: 'error'
					});
					</script>";
					header("location: ?clase=page&&funcion=Home");
				session_destroy();
				exit();
			}
		}//fin funcion validation	

		function exit()
		{
			//iniciar sesion
		    session_start();
		    error_reporting(0);
		    //cerrar sesion
		      	session_destroy();
		    //redireccion del cerrar sesion
				require_once("view/Content/Home.php");  
		    //evita abrir ventanas
		    	exit();
		}//fin funcion login	

		function Search()
		{
			$Page['page_name']="Search";
			require_once("view/Content/Search.php");
		}//fin funcion login
		
	}//fin clase pagina 
?>