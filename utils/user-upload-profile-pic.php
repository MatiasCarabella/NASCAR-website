<?php
session_start();
require_once 'db-connection.php';

// Function to generate a unique filename
function generateUniqueFilename($extension) {
    return uniqid('profile_', true) . '.' . $extension;
}

// Function to validate file type
function isValidFileType($file) {
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    return in_array($file['type'], $allowed_types);
}

// Check if user is logged in
if (!isset($_SESSION['id_usuario'])) {
    die("You must be logged in to upload a profile picture.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_pic'])) {
    $file = $_FILES['profile_pic'];
    
    // Check for errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        die("An error occurred during file upload. Error code: " . $file['error']);
    }
    
    // Validate file size (10MB max)
    if ($file['size'] > 10 * 1024 * 1024) {
        die("File is too large. Maximum size is 10MB.");
    }
    
    // Validate file type
    if (!isValidFileType($file)) {
        die("Invalid file type. Allowed types are JPEG, PNG, and GIF.");
    }
    
    // Generate a unique filename
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $newFilename = generateUniqueFilename($extension);
    
    // Set the destination path
    $uploadDir = '/var/www/html/img/user/profile_pics/';
    $destination = $uploadDir . $newFilename;
    
    // Attempt to move the uploaded file
    if (!move_uploaded_file($file['tmp_name'], $destination)) {
        die("Failed to move uploaded file. Check directory permissions.");
    }
    
    // Update the database
    $userId = $_SESSION['id_usuario'];
    $relativePath = 'img/user/profile_pics/' . $newFilename;
    
    $stmt = $conexion->prepare("UPDATE usuarios SET profile_pic = ? WHERE id_usuario = ?");
    $stmt->bind_param("si", $relativePath, $userId);
    
    if (!$stmt->execute()) {
        unlink($destination); // Remove the uploaded file
        die("Failed to update database: " . $stmt->error);
    }
    
    $stmt->close();
    $conexion->close();
    
    // Redirect back to the profile page
    header("Location: ../profile.php?upload=success");
    exit();
} else {
    die("Invalid request method or no file uploaded.");
}
?>