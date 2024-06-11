<?php

function nombre_usuario($id_usuario){
    global $conexion;
    $rs = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE id_usuario='$id_usuario'");
    if (!$rs) {
        die('Query Error: ' . mysqli_error($conexion));
    }
    $fila = mysqli_fetch_array($rs);
    return $fila['usuario'];
}

function requiere_logeo(){
    if(!isset($_SESSION['id_usuario'])){
        header('Location: index.php');
        exit();
    }
}

function no_admite_logeados(){
    if(isset($_SESSION['id_usuario'])){
        header('Location: index.php');
        exit();
    }
}

function get_noticia($id_noticia){
    global $conexion;
    $query = "SELECT * FROM noticias WHERE id_noticia='$id_noticia'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die('Query Error: ' . mysqli_error($conexion));
    }
    if (mysqli_num_rows($resultado) > 0){
        return mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    } else {
        return [
            'id_noticia' => null,
            'titulo' => 'Noticia no encontrada',
            'descripcion' => 'La noticia solicitada no está disponible.',
            'img_noticia' => 'img/default.jpg',
            'vid_noticia' => null
        ];
    }
}
?>
