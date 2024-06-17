<footer>
	<div class="holder">
		<div class="footerStart">
			<a href="index.php"><img class="logo" src="img/nascar-logo.png" class="center"></a>
		</div>
		<div class="footerContenido">
				<div class="columna partners">
				<h4>SOCIOS</h4>
				<div class="sponsors">
					<a href="https://www.monsterenergy.com/en-us/" target="_blank"><img src="img/footer/monster-energy-logo.png" class="logo"></a>
					<a href="https://www.goodyear.com/" target="_blank"><img src="img/footer/goodyear-logo.png" class="logo"></a>
				</div>
				<h4 style="margin-top: 0;">FABRICANTES</h4>
				<div class="fabricantes">
					<a href="https://performance.ford.com/" target="_blank"><img src="img/footer/ford-logo.png" class="logo"></a>
					<a href="https://www.toyota.com/racing" target="_blank"><img src="img/footer/toyota-logo.png" class="logo"></a>
					<a href="https://www.chevrolet.com/motorsports" target="_blank"><img src="img/footer/chevrolet-logo.png" class="logo"></a>
				</div>
			</div>
			<div class="columna navegacion">
				<h4 <?php echo (isset($_SESSION['id_usuario'])) ? 'style="margin-bottom: 15px;"' : '' ?>>NAVEGACIÓN</h4>
				<p><a href="index.php">Home</a></p>
				<p><a href="schedule.php">Calendario</a></p>
				<p><a href="standings.php">Posiciones</a></p>
				<p><a href="teams.php">Equipos</a></p>
				<?php echo (isset($_SESSION['id_usuario'])) ? '<p><a href="user-log-out.php">Cerrar Sesión</a></p>' : '<p><a href="log-in.php">Iniciar Sesión</a></p><p><a href="register.php">Registro</a></p>' ?>
			</div>
			<div class="columna redes">
				<h4>REDES</h4>
				<p><a href="https://www.facebook.com/NASCAR/" target="_blank" class="icon-facebook2">Facebook</a></p>
				<p><a href="https://x.com/nascar" target="_blank" class="icon-x">X (Twitter)</a></p>
				<p><a href="https://www.youtube.com/@NASCAR" target="_blank" class="icon-youtube">Youtube</a></p>
				<p><a href="https://www.instagram.com/nascar/" target="_blank" class="icon-instagram">Instagram</a></p>
			</div>
		</div>
		<p>Copyright © 2019 NASCAR Digital Media, LLC. Todos los derechos reservados.</p>
	</div>
</footer>