<?php 
	include('db-connection.php');

	$id_noticia=$_POST['id_noticia'];
	$id_usuario=$_POST['id_usuario'];
	$fecha=date("Y-m-d H:i:s");
	$comentario=$_POST['comentario'];

	$resultado = mysqli_query($conexion, "INSERT INTO comentarios VALUES (NULL, '$id_noticia', '$id_usuario', '$comentario', '$fecha')");
	
	header('location:noticia.php?id_noticia='.$id_noticia);
?>