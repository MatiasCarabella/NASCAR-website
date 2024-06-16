<?php
    $conexion = mysqli_connect('mysql', 'username', 'password', 'sitioNASCAR') or die (mysqli_connect_error());
    // Use 'mysql' as the hostname to connect to the MySQL database
    // Username: 'username'
    // Password: 'password'
    // Database name: 'sitioNASCAR'

    // Set the character set to utf8mb4
    if (!$conexion->set_charset("utf8mb4")) {
        die('Error loading character set utf8mb4: ' . $conexion->error);
    }
?>
