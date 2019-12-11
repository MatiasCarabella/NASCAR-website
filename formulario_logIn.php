<?php

	include('conexion.php');

	$usuario=$_POST['usuario'];
	$password=$_POST['password'];

	$query = "SELECT id_usuario FROM usuarios WHERE usuario='$usuario' AND password='$password'";
	$resultado = mysqli_query($conexion, $query);

	if (mysqli_num_rows($resultado) > 0){ // cant. filas
		session_start(); // inicializar
		$fila = mysqli_fetch_array($resultado); // capturar la fila

		$_SESSION['id_usuario'] = $fila['id_usuario']; // copio el idusuario en una variable de SESSION

		$miMail = 'matias.carabella@outlook.com'; // mail propio
		$remitente = "From: sitio web <uwu@NASCAR.com>";
		$asunto = $usuario . ' se logeó en el sitio.';
		$contenido = 'Saludos'; // nueva linea

		mail($miMail, $asunto, $contenido, $remitente);

		header("location:index.php"); // redirecciona a la pagina visitas.php

	}else{
		header('location:logIn.php?logeo=error#login');
	}
	
?>