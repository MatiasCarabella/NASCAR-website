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
    $query = "SELECT * FROM noticias WHERE id_noticia = ?";
    $stmt = $conexion->prepare($query);
    if ($stmt) {
        $stmt->bind_param('i', $id_noticia);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_array(MYSQLI_ASSOC);
        } else {
            return [
                'id_noticia' => null,
                'titulo' => 'Noticia no encontrada',
                'descripcion' => 'La noticia solicitada no está disponible.',
                'img_noticia' => null,
                'vid_noticia' => null,
                'cuerpo' => null
            ];
        }
    } else {
        die('Query Error: ' . $conexion->error);
    }
}
?>
