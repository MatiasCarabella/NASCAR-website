<?php 
	include('inc/nav.php');
	$estaPagina='Home';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
		    	<?php if(!is_null($noticia['id_noticia'])){ ?>
				<div class="contenedorVideo" style="position:relative;">
						<video src="<?php echo $noticia['vid_noticia']?>" class="watkinsGlenFinalVideo"  id="watkinsGlenFinalVideo" width="100%" height="384px" preload="auto" muted style="object-fit: cover;" onmouseout="this.load();"></video>
						<img src="<?php echo $noticia['img_noticia']?>" class="posterImage center" name="posterImage" height="384px" style="position: absolute; top: 0; left: 0; bottom: 0; right: 0">
				</div>
				<?php }else{ ?>
					<div class="noticia arriba">
						<div class="skeleton skeleton-img"></div>
						<div class="skeleton skeleton-title"></div>
						<div class="skeleton skeleton-text"></div>
            		</div>
				<?php } ?>
				
			</div>
			<div class="noticiasRelacionadas right">
				<?php 
					$noticia = get_noticia(2);
					if(!is_null($noticia['id_noticia'])){
				?>
				<div class="noticia arriba" onclick="location.href='noticia.php?id_noticia=<?php echo $noticia['id_noticia']; ?>'" style="cursor: pointer">
					<div class="imagenNoticia"><img src="<?php echo $noticia['img_noticia']; ?>" class="center"></div>
					<h3><?php echo $noticia['titulo']; ?></h3>
					<p><?php echo $noticia['descripcion']; ?></p>
				</div>
				<?php }else{ ?>
					<div class="noticia arriba">
						<div class="skeleton skeleton-img"></div>
						<div class="skeleton skeleton-title"></div>
						<div class="skeleton skeleton-text"></div>
            		</div>
				<?php } ?>
				<?php 
					$noticia = get_noticia(3);
				?>
				<div class="noticia abajo" onclick="location.href='noticia.php?id_noticia=<?php echo $noticia['id_noticia']; ?>'" style="cursor: pointer">
					<div class="imagenNoticia"><img src="<?php echo $noticia['img_noticia']; ?>" class="center"></div>
					<h3><?php echo $noticia['titulo']; ?></h3>
					<p><?php echo $noticia['descripcion']; ?></p>
				</div>
			</div>
		</div>
		<div class="otrasNoticias">
			<?php 
				$noticia = get_noticia(4);
			?>
			<div class="noticia" onclick="location.href='noticia.php?id_noticia=<?php echo $noticia['id_noticia']; ?>'" style="cursor: pointer">
				<div class="imagenNoticia"><img src="<?php echo $noticia['img_noticia']; ?>" class="center"></div>
				<h3><?php echo $noticia['titulo']; ?></h3>
				<p><?php echo $noticia['descripcion']; ?></p>
			</div>
			<?php 
				$noticia = get_noticia(5);
			?>
			<div class="noticia" onclick="location.href='noticia.php?id_noticia=<?php echo $noticia['id_noticia']; ?>'" style="cursor: pointer">
				<div class="imagenNoticia"><img src="<?php echo $noticia['img_noticia']; ?>" class="center"></div>
				<h3><?php echo $noticia['titulo']; ?></h3>
				<p><?php echo $noticia['descripcion']; ?></p>
			</div>
			<?php 
				$noticia = get_noticia(6);
			?>
			<div class="noticia" onclick="location.href='noticia.php?id_noticia=<?php echo $noticia['id_noticia']; ?>'" style="cursor: pointer">
				<div class="imagenNoticia"><img src="<?php echo $noticia['img_noticia']; ?>" class="center"></div>
				<h3><?php echo $noticia['titulo']; ?></h3>
				<p><?php echo $noticia['descripcion']; ?></p>
			</div>
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

