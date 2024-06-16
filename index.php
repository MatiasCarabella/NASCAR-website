<?php 
	include('inc/nav.php');
	$estaPagina='Home';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NASCAR</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/base.php">
	<link rel="icon" href="img/favicon.ico">
	<style>
		body {
            visibility: hidden;
        }
	</style>
</head>
<body class="sitio">	
	<main class="holder degradeHome">
		<div class="homeWallpaper">
			<img src="img/home/homeWallpaper7.jpg" class="center">
			<div class="textOverlay">
				<h1>ENTRADAS YA DISPONIBLES</h1>
				<h2><a href="calendario.php">TEMPORADA 2020 <i class="arrowRight"></i></a></h2>
			</div>
		</div>
		<div class="titulo"><h1 style="margin: 0 0.8em">Últimas Noticias</h1></div>
		<div class="noticias">
			<?php 
				$noticia = get_noticia(1);
			?>
		    <div class="noticiaPrincipal left" onclick="location.href='noticia.php?id_noticia=<?php echo $noticia['id_noticia']; ?>'" style="cursor: pointer">
		    	<?php 
					if(!is_null($noticia['id_noticia'])) { 
						if(!is_null($noticia['vid_noticia'])) { 
				?>
				<div class="contenedorVideo" style="position:relative;">
					<video src="<?php echo $noticia['vid_noticia']; ?>" class="watkinsGlenFinalVideo"  id="watkinsGlenFinalVideo" width="100%" height="100%;" preload="auto" muted style="object-fit: cover;" onmouseout="this.load();"></video>
					<img src="<?php echo $noticia['img_noticia']; ?>" class="posterImage center" name="posterImage" height="100%;" style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; object-fit: cover; width:100%;">
				</div>
				<?php } else { ?>
					<div class="imagenNoticia"><img src="<?php echo $noticia['img_noticia']?>" class="center"></div>
				<?php } ?>
				<h1><?php echo utf8_decode($noticia['titulo']); ?></h1>
				<p><?php echo utf8_decode($noticia['descripcion']); ?></p>
			</div>
				<?php } else { ?>
					<div class="noticia arriba">
						<div class="skeleton skeleton-img"></div>
						<div class="skeleton skeleton-title"></div>
						<div class="skeleton skeleton-text"></div>
						<div class="skeleton skeleton-text" style="margin-top: -4%; width: 80%;"></div>
            		</div>
				<?php } ?>
			<div class="noticiasRelacionadas right">
				<?php 
					$noticias_ids = [2, 3];
					foreach ($noticias_ids as $index => $id) {
						$noticia = get_noticia($id);
						if (!is_null($noticia['id_noticia'])) {
				?>
				<div class="noticia <?php echo $index === 0 ? 'arriba' : ''; ?>" onclick="location.href='noticia.php?id_noticia=<?php echo $noticia['id_noticia']; ?>'" style="cursor: pointer">
					<div class="imagenNoticia"><img src="<?php echo $noticia['img_noticia']; ?>" class="center"></div>
					<h3><?php echo utf8_decode($noticia['titulo']); ?></h3>
					<p><?php echo utf8_decode($noticia['descripcion']); ?></p>
				</div>
				<?php } else { ?>
				<div class="noticia <?php echo $index === 0 ? 'arriba' : ''; ?>">
					<div class="skeleton skeleton-img"></div>
					<div class="skeleton skeleton-title"></div>
					<div class="skeleton skeleton-text"></div>
				</div>
				<?php 
						}
					}
				?>
			</div>
		</div>
		<div class="otrasNoticias">
			<?php 
				$noticias_ids = [4, 5, 6]; // Array of noticia IDs
				foreach ($noticias_ids as $id) {
					$noticia = get_noticia($id);
					if (!is_null($noticia['id_noticia'])) {
			?>
			<div class="noticia" onclick="location.href='noticia.php?id_noticia=<?php echo $noticia['id_noticia']; ?>'" style="cursor: pointer">
				<div class="imagenNoticia"><img src="<?php echo $noticia['img_noticia']; ?>" class="center"></div>
				<h3><?php echo utf8_decode($noticia['titulo']); ?></h3>
				<p><?php echo utf8_decode($noticia['descripcion']); ?></p>
			</div>
			<?php } else { ?>
			<div class="noticia">
				<div class="skeleton skeleton-img"></div>
				<div class="skeleton skeleton-title"></div>
				<div class="skeleton skeleton-text"></div>
			</div>
			<?php 
					}
				}
			?>
		</div>
	</main>
	<?php include('inc/footer.php'); ?>
	<script src="js/jquery.min.js"></script>
	<script src="js/video-hover.js"></script> 
	<script>
    // Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
    setTimeout(function() {
        document.body.style.visibility = "visible";
    }, 10); 
	</script>
</body>
</html>

