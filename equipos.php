<?php $estaPagina='Equipos'; ?>
<?php include('conexion.php'); ?>
<?php if(isset($_GET['equipo'])){ 
		$equipo=$_GET['equipo'];
		switch($equipo){
			case "teamPenske": $id_equipo=5; $class="penske"; $margin=0; break;
			case "joeGibbsRacing": $id_equipo=7; $class="gibbs"; $margin=-70; break;
		}
		$query = "SELECT * FROM equipos WHERE id_equipo='$id_equipo'";
		$resultado = mysqli_query($conexion, $query);
		if (mysqli_num_rows($resultado) > 0){ // cant. filas
			$equipo = mysqli_fetch_array($resultado, MYSQLI_ASSOC); // capturar la fila
		}else{
			header('location:equipos.php');
		}}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($_GET['equipo'])){ echo $equipo['nombre_equipo']; }else{ echo "Equipos"; } ?> | NASCAR</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/base.php">
	<link rel="icon" href="img/favicon.ico">
</head>
<body class="sitio">

	<?php include('inc/nav.php') ?>
	
		<?php if(isset($_GET['equipo'])){ ?>
		<main class="holder equipo <?php echo $class ?>">
		<img class="logoEquipo" src="<?php echo $equipo['imgLogo']?>">
		<div class="imgEquipo" style="margin-top: <?php echo $margin ?>px;">
			<img src="<?php echo $equipo['imgEquipo']?>">
		</div>
		<div class="descripcionEquipo">
			<h1><?php echo $equipo['nombre_equipo']?></h1>
			<div class="contenedorFlex">
				<div class="parrafo">
					<h2>Sobre <?php echo $equipo['nombre_abreviado']?></h2>
					<p><?php echo $equipo['sobreEquipo']?></p>
				</div>
				<div class="info">
					<h4 style="margin-top: 5px;">Fundador:</h4>
					<p><?php echo $equipo['fundador']?></p>
					<h4>Sede:</h4>
					<p><?php echo $equipo['sede']?></p>
					<h4>Sitio Web:</h4>
					<p><a href="https:/www.<?php echo $equipo['sitioWeb']?>"><?php echo $equipo['sitioWeb']?></a></p>
					<h4>Redes:</h4>
					<p><a href="<?php echo $equipo['facebook']?>" target="_blank" class="icon-facebook"></a>
					<a href="<?php echo $equipo['twitter']?>" target="_blank" class="icon-twitter"></a>
					<a href="<?php echo $equipo['youtube']?>" target="_blank" class="icon-youtube"></a>
					<a href="<?php echo $equipo['instagram']?>" target="_blank" class="icon-instagram"></a></p>
				</div>
			</div>
		</div>
		<h2 class="tituloPilotos">Pilotos</h2>
		<div class="pilotos">
			<div class="piloto">
				<div class="imagenPiloto"><img src="<?php echo $equipo['piloto1_img']?>" class="center"></div>
				<img src="<?php echo $equipo['piloto1_imgNumero']?>" class="logo numero"><h3><?php echo $equipo['piloto1_nombre']?></h3>
			</div>
			<div class="piloto">
				<div class="imagenPiloto"><img src="<?php echo $equipo['piloto2_img']?>" class="center"></div>
				<img src="<?php echo $equipo['piloto2_imgNumero']?>" class="logo numero"><h3><?php echo $equipo['piloto2_nombre']?></h3>
			</div>
			<div class="piloto">
				<div class="imagenPiloto"><img src="<?php echo $equipo['piloto3_img']?>" class="center"></div>
				<img src="<?php echo $equipo['piloto3_imgNumero']?>" class="logo numero"><h3><?php echo $equipo['piloto3_nombre']?></h3>
			</div>
			<?php if(!is_null($equipo['piloto4_nombre'])){ ?>
			<div class="piloto">
				<div class="imagenPiloto"><img src="<?php echo $equipo['piloto4_img']?>" class="center"></div>
				<img src="<?php echo $equipo['piloto4_imgNumero']?>" class="logo numero"><h3><?php echo $equipo['piloto4_nombre']?></h3>
			</div>
			<?php } ?>
		</div>
	</main>
		<?php } else{ ?>
			<main class="holder">
		<div class="indice equipos">
			<div class="columnas">
				<div class="columna ford" id="columnaFord">
					<div class="contenedorLogo"><img src="img/posiciones/fordLogo.png" class="logo"></div>
					<div class="lista">
						<li><a href="#">Front Row Motorsports</a></li>
						<li><a href="#">Go FAS Racing</a></li>
						<li><a href="#">Roush Fenway Racing</a></li>
						<li><a href="equipos.php?equipo=stewartHaasRacing">Stewart-Haas Racing</a></li>
						<li><a href="equipos.php?equipo=teamPenske">Team Penske</a></li>
						<li><a href="#">Wood Brothers Racing</a></li>
					</div>
				</div>
				<div class="columna toyota" id="columnaToyota">
					<div class="contenedorLogo"><img src="img/posiciones/toyotaLogo2.png" class="logo"></div>
					<div class="lista">
						<li><a href="equipos.php?equipo=joeGibbsRacing">Joe Gibbs Racing</a></li>
						<li><a href="#">Leavine Family Racing</a></li>
					</div>
				</div>
				<div class="columna chevrolet" id="columnaChevrolet">
					<div class="contenedorLogo"><img src="img/posiciones/chevroletLogoSmol.png" class="logo"></div>
					<div class="lista">
						<li><a href="#">Chip Ganassi Racing</a></li>
						<li><a href="#">Germain Racing</a></li>
						<li><a href="#">Hendrick Motorsports</a></li>
						<li><a href="#">JTG Daugherty Racing</a></li>
						<li><a href="#">Richard Childress Racing</a></li>
						<li><a href="#">Richard Petty Motorsports</a></li>
					</div>
				</div>
			</div>
		</div>		
		</main>
	<?php } ?>
	

	<?php include('inc/footer.php') ?>

</body>
</html>