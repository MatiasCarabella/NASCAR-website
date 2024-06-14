<?php 
	include('inc/nav.php');
	$estaPagina='Noticia';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Noticia | NASCAR</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/base.php">
	<link rel="icon" href="img/favicon.ico">
</head>
<body class="sitio">

	<?php 
	if(isset($_GET['id_noticia'])){ 
		$id_noticia =$_GET['id_noticia'];
		$noticia = get_noticia($id_noticia);
	}else{
		header('location:index.php');
	}
	?>

	<main class="holder noticia">
		<div class="cuerpoNoticia">
			<h1><?php echo $noticia['titulo']; ?></h1>
			<p><?php echo $noticia['descripcion']; ?></p>
		</div>
		<?php if(!is_null($noticia['img_noticia_alt'])){ ?>
			<img class="imgPrincipal" src="<?php echo $noticia['img_noticia_alt']; ?>">
		<?php }else if(!is_null($noticia['img_noticia'])) { ?>
			<img class="imgPrincipal" src="<?php echo $noticia['img_noticia']; ?>">
		<?php } ?>
		<div class="cuerpoNoticia">
			<p><?php echo $noticia['cuerpo']; ?></p>
		</div>
		<?php if(!is_null($noticia['vid_noticia'])){ ?>
		<video src="<?php echo $noticia['vid_noticia']?>" width="75%" controls=true poster="img/noticias/watkinsGlenPoster.jpg" style="display: block; margin: 0 auto;"></video>
		<?php } ?>
		<div class="comentarios">
			<div class="titulo"><h1 class="titulo" style="margin-top: 4px;">Comentarios</h1></div>
			<?php $resultado = mysqli_query($conexion, "SELECT id_usuario, comentario, fecha FROM comentarios WHERE id_noticia = $id_noticia ORDER BY fecha DESC LIMIT 5"); ?>
			<?php if(isset($_SESSION['id_usuario'])){ ?>
			<form action="procesar_comentario.php" method="POST">
				<input type="hidden" name="id_noticia" value="<?php echo $noticia['id_noticia']?>">
				<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']?>">
			<table>
				<tr>
					<td style="text-align: center;"><img src="img/usuarios/default.png" height="64px;"><br>
					<?php echo nombre_usuario($_SESSION['id_usuario']); ?></td>
					<td style="padding-left: 10px;"><textarea name="comentario" rows="5" cols="94"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td style="padding-left: 10px;"><input type="submit" value="Enviar"></td>
				</tr>
			</table>
			</form>
			<?php }else{ ?>
			<p>¿Cuál es tu opinión? <a href="logIn.php">Inicia Sesión</a> o <a href="signUp.php">Regístrate</a> para comentar.</p>
			<?php } ?>
			<?php while($fila = mysqli_fetch_array($resultado) ){ ?>
			<hr>
			<table>
				<tr>
					<td style="text-align: center;"><img src="img/usuarios/default.png" height="64px;"><br>
					<?php echo nombre_usuario($fila['id_usuario']); ?></td>
					<td style="padding-left: 10px;"><div><p><?php echo $fila['comentario']; ?></p></div></td>
				</tr>
			</table>
			<?php } ?>
		</div>
	</main>

	<?php include('inc/footer.php') ?>
	
</body>
</html>