<?php
include('conexion.php');

// Check if POST data is set
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $query = $conexion->prepare("SELECT id_usuario, password FROM usuarios WHERE usuario = ?");
    if ($query === false) {
        // Debugging purposes: Log the error or display it
        die('Prepare Error: ' . htmlspecialchars($conexion->error));
    }

    $query->bind_param('s', $usuario);
    if (!$query->execute()) {
        // Debugging purposes: Log the error or display it
        die('Execute Error: ' . htmlspecialchars($query->error));
    }

    $resultado = $query->get_result();

    if ($resultado) {
        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();

            // Verify password
            if (password_verify($password, $fila['password'])) {
                session_start();
                $_SESSION['id_usuario'] = $fila['id_usuario'];

                header("location:index.php");
                exit();
            } else {
                header('location:logIn.php?logeo=error#login');
                exit();
            }
        } else {
            header('location:logIn.php?logeo=error#login');
            exit();
        }
    } else {
        // Debugging purposes: Log the error or display it
        die('Query Error: ' . htmlspecialchars($conexion->error));
    }
} else {
    header('location:logIn.php?logeo=error#login');
    exit();
}
?>
