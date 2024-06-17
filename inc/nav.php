<?php
	session_start();
	include ('db-connection.php');
	include ('funciones.php');
	if (isset($_SESSION['id_usuario'])) {
	    $usuario = nombre_usuario($_SESSION['id_usuario']);
	}
?>
<!DOCTYPE html>
<nav>
    <div class="holder">
        <a href="index.php"><img class="logo" src="img/nascar-logo.png"></a>
        <ul>
            <li><a href="schedule.php" <?php echo ($estaPagina == 'Calendario') ? 'class="activo"' : '';?>>CALENDARIO</a></li>
            <li><a href="posiciones.php" <?php echo ($estaPagina == 'Posiciones') ? ' class="activo"' : '';?>>POSICIONES</a></li>
            <li><a href="equipos.php" <?php echo ($estaPagina == 'Equipos') ? ' class="activo"' : '';?>>EQUIPOS</a></li>
            <li><a href=<?php echo (isset($_SESSION['id_usuario'])) ? "user-log-out.php" : "log-in.php" ?><?php echo ($estaPagina == 'LogIn') ? ' class="activo"' : '';?>><?php echo (isset($_SESSION['id_usuario'])) ? $usuario : 'INICIAR SESIÓN' ?></a></li>
        </ul>
    </div>
</nav>
