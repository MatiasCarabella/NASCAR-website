<?php

require_once 'db-connection.php';

$usuario         = $_POST['usuario'];
$email           = $_POST['email'];
$password        = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

// Check if all required POST data is set
if (isset($usuario, $email, $password, $confirmPassword)) {
    // Validate input data (basic checks)
    if (empty($usuario) || empty($email) || empty($password) || empty($confirmPassword)) {
        header('location: ../register.php?envio=error&mensaje=Todos los campos son obligatorios#registro');
        exit();
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        header('location: ../register.php?envio=error&mensaje=Las contraseñas no coinciden#registro');
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the INSERT statement using prepared statements
    $stmt = $conexion->prepare('INSERT INTO usuarios (usuario, password, email) VALUES (?, ?, ?)');
    if ($stmt === false) {
        // Debugging purposes: Log the error or display it
        die('Prepare Error: ' . htmlspecialchars($conexion->error));
    }

    // Bind parameters and execute the statement
    $stmt->bind_param('sss', $usuario, $hashedPassword, $email);
    if (!$stmt->execute()) {
        // Debugging purposes: Log the error or display it
        die('Execute Error: ' . htmlspecialchars($stmt->error));
    }

    // If execution reaches here, registration was successful
    header('location: ../register.php?envio=ok#registro');
    exit();
} else {
    header('location: ../register.php?envio=error&mensaje=Error en datos recibidos#registro');
    exit();
}
