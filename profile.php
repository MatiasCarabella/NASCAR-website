<?php 
$estaPagina='UserSettings';
include_once 'inc/navbar.php';
include_once 'utils/functions.php';

$id_usuario = $_SESSION['id_usuario'];
$usuario = nombre_usuario($id_usuario);
$profile_pic = get_profile_pic($id_usuario);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle password update
    if (isset($_POST['current_password'], $_POST['new_password'], $_POST['confirm_password'])) {
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if ($new_password === $confirm_password) {
            if (check_password($id_usuario, $current_password)) {
                update_password($id_usuario, password_hash($new_password, PASSWORD_DEFAULT));
                $password_update_success = true;
            } else {
                $password_update_error = "Contraseña incorrecta.";
            }
        } else {
            $password_update_error = "Las contraseñas no coinciden.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Perfil | NASCAR</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.php">
    <link rel="icon" href="img/favicon.ico">
    <style>
		body {
            visibility: hidden;
        }
	</style>
</head>
<body class="sitio">
    <main class="holder perfil">
        <h1 class="titulo">Mi Perfil</h1>
        <hr>
            <section class="profile-section">
                <form action="utils/user-upload-profile-pic.php" method="post" enctype="multipart/form-data" class="profile-pic-form">
                    <div class="current-profile-pic">
                        <img src="<?php echo $profile_pic; ?>" alt="Current Profile Picture">
                    </div>
                    <p class="username"><?php echo htmlspecialchars($usuario); ?></p>
                    <div class="file-input-wrapper">
                        <label for="profile_pic" class="file-input-label">Seleccionar nueva imagen de perfil</label>
                        <input type="file" name="profile_pic" id="profile_pic" accept="image/png, image/jpeg, image/gif" required class="file-input">
                    </div>
                    <button type="submit" class="submit-btn">Actualizar imagen</button>
                </form>
            </section>
            
            <section class="password-section">
                <h2>Actualizar Contraseña</h2>
                <form action="profile.php" method="post" class="password-form">
                    <div class="form-group">
                        <label for="current_password">Contraseña Actual</label>
                        <input type="password" name="current_password" id="current_password" required>
                    </div>
                    <div class="form-group">
                        <label for="new_password">Nueva Contraseña</label>
                        <input type="password" name="new_password" id="new_password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirmar Nueva Contraseña</label>
                        <input type="password" name="confirm_password" id="confirm_password" required>
                    </div>
                    <button type="submit" name="update_password" class="submit-btn">Cambiar Contraseña</button>
                    <?php if (isset($password_update_success)): ?>
                        <p class="success-message">Contraseña actualizada exitosamente.</p>
                    <?php elseif (isset($password_update_error)): ?>
                        <p class="error-message"><?php echo $password_update_error; ?></p>
                    <?php endif; ?>
                </form>
            </section>
            
            <section class="logout-section">
                <h2>Cerrar Sesión</h2>
                <form action="utils/user-log-out.php" method="post">
                    <button type="submit" class="logout-btn">Cerrar Sesión</button>
                </form>
            </section>
    </main>
    <?php include_once 'inc/footer.php'; ?>
    <script>
        // Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
        setTimeout(function() {
            document.body.style.visibility = 'visible';
        }, 10);
    </script>
</body>
</html>
