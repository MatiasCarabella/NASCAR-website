<?php
session_start();
require_once 'utils/db-connection.php';
require_once 'utils/functions.php';
if (isset($_SESSION['id_usuario'])) {
    $usuario = nombre_usuario($_SESSION['id_usuario']);
} elseif ($estaPagina == 'UserSettings') {
    header('Location: log-in.php');
    exit();
}
?>
<!DOCTYPE html>
<nav>
    <div class="holder">
        <a href="index.php"><img class="logo" src="img/nascar-logo.png"></a>
        <ul>
            <li><a href="schedule.php" <?php echo ($estaPagina == 'Calendario') ? 'class="activo"' : ''; ?>>CALENDARIO</a></li>
            <li><a href="standings.php" <?php echo ($estaPagina == 'Posiciones') ? ' class="activo"' : ''; ?>>POSICIONES</a></li>
            <li><a href="teams.php" <?php echo ($estaPagina == 'Equipos') ? ' class="activo"' : ''; ?>>EQUIPOS</a></li>
            <li><a href=<?php echo isset($_SESSION['id_usuario']) ? 'profile.php' : 'log-in.php' ?><?php echo ($estaPagina == 'LogIn' || $estaPagina == 'UserSettings') ? ' class="activo"' : ''; ?>><?php echo (isset($_SESSION['id_usuario'])) ? $usuario : 'INICIAR SESIÓN' ?></a></li>
        </ul>
    </div>
</nav>