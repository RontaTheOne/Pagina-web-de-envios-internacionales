<?php
	session_start();
	$sesion=$_SESSION['usuario'];
	if($sesion == null || $sesion == '') {
		// redirige a la página de login
		header("location: ?clase=page&&funcion=Home");
		die();
	}else{
		//Llamado a la logica
		include("model/connection.php");
		//instanciamiento de la BD
		$llamar= new conexion();
		$llamar1= $llamar->con();
		//Consulta a la BD
		$consulta= " SELECT*FROM CASILLERO where EMA_CAS='$sesion'";
		$resultado=mysqli_query($llamar1,$consulta);
		//Envio de datos
		$filas=mysqli_fetch_array($resultado);
	}
?>