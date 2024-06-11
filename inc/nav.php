<?php
	session_start();
	include ('conexion.php');
	include ('funciones.php');
	if (isset($_SESSION['id_usuario'])) {
	    $usuario = nombre_usuario($_SESSION['id_usuario']);
	}
?>
<nav>
    <div class="holder">
        <a href="index.php"><img class="logo" src="img/nascarLogo.png"></a>
        <ul>
            <li><a href="calendario.php" <?php echo ($estaPagina == 'Calendario') ? 'class="activo"' : '';?>>CALENDARIO</a></li>
            <li><a href="posiciones.php" <?php echo ($estaPagina == 'Posiciones') ? ' class="activo"' : '';?>>POSICIONES</a></li>
            <li><a href="equipos.php" <?php echo ($estaPagina == 'Equipos') ? ' class="activo"' : '';?>>EQUIPOS</a></li>
            <li><a href=<?php echo (isset($_SESSION['id_usuario'])) ? "cerrarSesion.php" : "logIn.php" ?><?php echo ($estaPagina == 'LogIn') ? ' class="activo"' : '';?>><?php echo (isset($_SESSION['id_usuario'])) ? $usuario : 'INICIAR SESIÓN' ?></a></li>
        </ul>
    </div>
</nav>
