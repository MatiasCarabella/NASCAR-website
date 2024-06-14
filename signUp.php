<?php
	include 'inc/nav.php';
	$estaPagina = 'SignUp';
	$mensaje = '<p>¿Ya tienes una cuenta? <a href="logIn.php">Inicia Sesión</a></p>';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Log In | NASCAR</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/base.php">
		<link rel="icon" href="img/favicon.ico">
		<style>
			body {
				visibility: hidden;
			}
		</style>
	</head>
	<body class="sitio">

		
		<?php no_admite_logeados(); ?>
		
		<main class="holder registro">
			<div class="caja registro" id="caja" name="registro">
				<h1 style="text-align: center;">Registro</h1>
					<form action="formulario_signUp.php" method="POST" class="formulario">
							<div class="campo">
								<input type="text" placeholder="Usuario" id="usuario" required pattern="\S+" title="El nombre de usuario no puede tener espacios." name="usuario">
								<span class="iconoIzq icon-user" id="iconoUser"></span>
							</div>
							<div class="campo">
								<input type="text" placeholder="Email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="ejemplo@ejemplo.com" name="email">
								<span class="iconoIzq icon-envelope" id="iconoMail"></span>
							</div>
							<div class="campo">
								<input type="password" placeholder="Contraseña" id="password" required pattern=".{8,}" title="La contraseña debe tener un mínimo de 8 caracteres." name="password"  maxlength="128" autocomplete="off">
								<span class="iconoIzq icon-lock" id="iconoCandado1"></span>
								<span class="iconoDer icon-eye-blocked" id="toggle1" onclick="passToggle('password')"></span>
							</div>
							<div class="campo">
								<input type="password" placeholder="Confirmar Contraseña" id="confirm_password" required pattern=".{1,}" title="Las contraseñas deben coincidir." name="confirm_password"  maxlength="128" autocomplete="off">
								<span class="iconoIzq icon-lock" id="iconoCandado2"></span>
								<span class="iconoDer icon-eye-blocked" id="toggle2" onclick="passToggle('confirm_password')"></span>
								<p id="noCoinciden" class="noCoinciden">Las contraseñas no coinciden.</p>
							</div>
							<p style="margin-top: 20px;">Al crear una cuenta aceptas nuestros <a href="#">Términos y Condiciones</a>.</p>
							<div class="boton">	
								<input type="submit" value="Registrarse" name="Registrarse" id="submit">
							</div>
							<?php if (isset($_GET['envio']) && $_GET['envio'] == 'ok') {
			$mensaje = '<p class="textoResultado">Registro completado con éxito. <a href="logIn.php">Inicia Sesión</a></p>';
		} elseif (isset($_GET['envio']) && $_GET['envio'] == 'error') {
			$mensaje = '<p class="textoResultado">No pudimos procesar tu solicitud</p>';
		} ?>
						<?php echo $mensaje; ?>
					</form>
			</div>
		</main>

		<?php include 'inc/footer.php'; ?>

		<script>
		// Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
		setTimeout(function() {
			document.body.style.visibility = "visible";
		}, 10); 
		</script>

		<script src="js/jquery.min.js"></script>
		<script src="js/opacity.js"></script>
		<script src="js/input-settings-signup.js"></script>
		<script src="js/pass-toggle.js"></script>
		<script src="js/check-password.js"></script>
		<script src="js/submit-check.js"></script>

	</body>
</html>