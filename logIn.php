<?php
	include ('inc/nav.php');
	$estaPagina = 'LogIn';
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
	<main class="holder login">
		<div class="caja logeo" id="caja" name="login">
			<h1 style="text-align: center;">Iniciar Sesión</h1>
				<form action="formulario_logIn.php" method="POST" class="formulario">
						<div class="campo">
							<input type="text" placeholder="Usuario" id="usuario" required pattern="\S+" title="El nombre de usuario no puede tener espacios." name="usuario">
							<span class="iconoIzq icon-user" id="iconoUser"></span>
						</div>
						<div class="campo">
							<input type="password" placeholder="Contraseña" id="password" required pattern=".{8,}" title="La contraseña debe tener un mínimo de 8 caracteres." name="password"  maxlength="128" autocomplete="off">
							<span class="iconoIzq icon-lock" id="iconoCandado1"></span>
							<span class="iconoDer icon-eye-blocked" id="toggle1" onclick="passToggle('password', 'login')"></span>
							
						</div>
						<p style="text-align: right;"><a href="#">¿Olvidaste tu contraseña?</a></p>
						<div class="boton">	
							<input type="submit" value="Iniciar Sesión" name="IniciarSesion">
						</div>
						<p>¿No tienes una cuenta? <a href="signUp.php">Regístrate</a></p>
						<?php
							if (isset($_GET['logeo']) && $_GET['logeo'] == 'error') {
						?>
						<p class="textoLogeo" style="position: absolute;">Usuario y/o contraseña incorrectos.</p>
						<?php
							} ?>
				</form>
		</div>
	</main>

	<?php include ('inc/footer.php'); ?>

	<script>
    // Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
    setTimeout(function() {
        document.body.style.visibility = "visible";
    }, 10); 
	</script>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/opacity.js"></script>
	<script src="js/input-settings-login.js"></script>
	<script src="js/pass-toggle.js"></script>
	
</body>
</html>