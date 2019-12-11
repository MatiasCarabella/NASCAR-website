<?php 

function nombre_usuario($id_usuario){
	global $conexion;
	$rs = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE id_usuario='$id_usuario'");
	$fila = mysqli_fetch_array($rs);
	return $fila['usuario'];
}

function requiere_logeo(){
	if(isset($_SESSION['id_usuario']) == false){
		header('location:index.php');
	}
}

function no_admite_logeados(){
	if(isset($_SESSION['id_usuario']) == true){
		header('location:index.php');
	}
}

function get_noticia($id_noticia){
	global $conexion;
	$query = "SELECT * FROM noticias WHERE id_noticia='$id_noticia'";
		$resultado = mysqli_query($conexion, $query);
	if (mysqli_num_rows($resultado) > 0){ // cant. filas
		return $noticia = mysqli_fetch_array($resultado, MYSQLI_ASSOC); // capturar la fila
	}else{
		header('location:equipos.php');
	}
}

?>