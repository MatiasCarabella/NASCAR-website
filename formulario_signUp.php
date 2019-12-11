<?php

	include('conexion.php'); 

	$usuario=$_POST['usuario'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];

	$resultado = mysqli_query($conexion, "INSERT INTO usuarios VALUES (NULL, '$usuario', '$email', '$password')");

	if($resultado!=0) {

		$miMail = 'matias.carabella@outlook.com'; // mail propio
		$remitente = "From: $usuario <$email>"; // comillas dobles, 'F' mayuscula
		$asunto = $usuario . ' se registró en el sitio.';
		$contenido = 'Usuario: ' . $usuario . "\r\n"; // nueva linea
		$contenido .= 'Email: ' . $email;

		mail($miMail, $asunto, $contenido, $remitente);

		$remitente_usuario = "From: sitio web <uwu@NASCAR.com>";
		$asunto_usuario = 'Registro completado';
		$contenido_usuario = 'Hola ' . $usuario . ', tu cuenta fue creada con éxito.'."\r\n";

		mail($email, $asunto_usuario, $contenido_usuario, $remitente_usuario);

		header('location:signUp.php?envio=ok#registro');
		//header > redireccionar
	}else{
		header('location:signUp.php?envio=error#registro');
	}
?>