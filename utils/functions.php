<?php

function nombre_usuario($id_usuario)
{
    global $conexion;
    $rs = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE id_usuario='$id_usuario'");
    if (!$rs) {
        die('Query Error: ' . mysqli_error($conexion));
    }
    $fila = mysqli_fetch_array($rs);

    return $fila['usuario'];
}

function requiere_logeo(): void
{
    if (!isset($_SESSION['id_usuario'])) {
        header('Location: ../index.php');
        exit();
    }
}

function no_admite_logeados(): void
{
    if (isset($_SESSION['id_usuario'])) {
        header('Location: ../index.php');
        exit();
    }
}

function get_noticia($id_noticia)
{
    global $conexion;
    $query = 'SELECT * FROM noticias WHERE id_noticia = ?';
    $stmt  = $conexion->prepare($query);
    if ($stmt) {
        $stmt->bind_param('i', $id_noticia);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_array(MYSQLI_ASSOC);
        } else {
            return [
                'id_noticia'  => null,
                'titulo'      => 'Noticia no encontrada',
                'descripcion' => 'La noticia solicitada no está disponible.',
                'img_noticia' => null,
                'vid_noticia' => null,
                'cuerpo'      => null,
            ];
        }
    } else {
        die('Query Error: ' . $conexion->error);
    }
}

function get_profile_pic($id_usuario): string
{
    global $conexion;
    $query  = "SELECT profile_pic FROM usuarios WHERE id_usuario = $id_usuario";
    $result = mysqli_query($conexion, $query);
    $row    = mysqli_fetch_assoc($result);

    return $row['profile_pic'] ?: 'img/user/profile_pics/default.png';
}

function update_profile_pic($id_usuario, $profile_pic): void
{
    global $conexion;
    $query = "UPDATE usuarios SET profile_pic = '$profile_pic' WHERE id_usuario = $id_usuario";
    mysqli_query($conexion, $query);
}

function check_password($id_usuario, $password): bool
{
    global $conexion;
    $query  = "SELECT password FROM usuarios WHERE id_usuario = $id_usuario";
    $result = mysqli_query($conexion, $query);
    $row    = mysqli_fetch_assoc($result);

    return password_verify($password, $row['password']);
}

function update_password($id_usuario, $new_password): void
{
    global $conexion;
    $query = "UPDATE usuarios SET password = '$new_password' WHERE id_usuario = $id_usuario";
    mysqli_query($conexion, $query);
}
function display(string $string): void
{
    echo fix_encoding($string);
}
function fix_encoding(string $string): string
{
    return mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
}
