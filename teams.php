<?php
include "db-connection.php";
$estaPagina = "Equipos";
include "inc/nav.php";

if (isset($_GET["equipo"])) {
    $equipo = $_GET["equipo"];
    $query = "SELECT * FROM equipos WHERE nombre_abreviado='$equipo'";
    $resultado = mysqli_query($conexion, $query);
    if (mysqli_num_rows($resultado) > 0) {
        $equipo = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        $class = strtolower(str_replace(' ', '', $equipo["nombre_abreviado"]));
        $margin = 0;
    } else {
        header("location:teams.php");
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($_GET["equipo"]) ? $equipo["nombre_equipo"] : "Equipos"; ?> | NASCAR</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.php">
    <link rel="icon" href="img/favicon.ico">
    <style>
        body {
            visibility: hidden;
        }
    </style>
</head>
<body class="sitio">
    <?php if (isset($_GET["equipo"])) { ?>
        <main class="holder equipo <?php echo $class; ?>">
            <img class="logoEquipo" src="<?php echo $equipo["imgLogo"]; ?>">
            <div class="imgEquipo" style="margin-top: <?php echo $margin; ?>px;">
                <img src="<?php echo $equipo["imgEquipo"]; ?>">
            </div>
            <div class="descripcionEquipo">
                <h1><?php echo $equipo["nombre_equipo"]; ?></h1>
                <div class="contenedorFlex">
                    <div class="parrafo">
                        <h2>Sobre <?php echo $equipo["nombre_abreviado"]; ?></h2>
                        <p><?php echo $equipo["sobreEquipo"]; ?></p>
                    </div>
                    <div class="info">
                        <h4 style="margin-top: 5px;">Fundador:</h4>
                        <p><?php echo $equipo["fundador"]; ?></p>
                        <h4>Sede:</h4>
                        <p><?php echo $equipo["sede"]; ?></p>
                        <h4>Sitio Web:</h4>
                        <p><a href="https://www.<?php echo $equipo["sitioWeb"]; ?>"><?php echo $equipo["sitioWeb"]; ?></a></p>
                        <h4>Redes:</h4>
                        <p>
                            <a href="<?php echo $equipo["facebook"]; ?>" target="_blank" class="icon-facebook2"></a>
                            <a href="<?php echo $equipo["twitter"]; ?>" target="_blank" class="icon-twitter"></a>
                            <a href="<?php echo $equipo["youtube"]; ?>" target="_blank" class="icon-youtube"></a>
                            <a href="<?php echo $equipo["instagram"]; ?>" target="_blank" class="icon-instagram"></a>
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="tituloPilotos">Pilotos</h2>
            <div class="pilotos">
                <div class="piloto">
                    <div class="imagenPiloto"><img src="<?php echo $equipo["piloto1_img"]; ?>" class="center"></div>
                    <img src="<?php echo $equipo["piloto1_imgNumero"]; ?>" class="logo numero"><h3><?php echo $equipo["piloto1_nombre"]; ?></h3>
                </div>
                <div class="piloto">
                    <div class="imagenPiloto"><img src="<?php echo $equipo["piloto2_img"]; ?>" class="center"></div>
                    <img src="<?php echo $equipo["piloto2_imgNumero"]; ?>" class="logo numero"><h3><?php echo $equipo["piloto2_nombre"]; ?></h3>
                </div>
                <div class="piloto">
                    <div class="imagenPiloto"><img src="<?php echo $equipo["piloto3_img"]; ?>" class="center"></div>
                    <img src="<?php echo $equipo["piloto3_imgNumero"]; ?>" class="logo numero"><h3><?php echo $equipo["piloto3_nombre"]; ?></h3>
                </div>
                <?php if (!is_null($equipo["piloto4_nombre"])) { ?>
                    <div class="piloto">
                        <div class="imagenPiloto"><img src="<?php echo $equipo["piloto4_img"]; ?>" class="center"></div>
                        <img src="<?php echo $equipo["piloto4_imgNumero"]; ?>" class="logo numero"><h3><?php echo $equipo["piloto4_nombre"]; ?></h3>
                    </div>
                <?php } ?>
            </div>
        </main>
    <?php } else { ?>
        <main class="holder">
            <div class="indice equipos">
                <div class="columnas">
                    <div class="columna ford" id="columnaFord">
                        <div class="contenedorLogo"><img src="img/standings/ford-logo.png" class="logo"></div>
                        <div class="lista">
                            <li><a href="teams.php?equipo=FrontRowMotorsports">Front Row Motorsports</a></li>
                            <li><a href="teams.php?equipo=GoFASRacing">Go FAS Racing</a></li>
                            <li><a href="teams.php?equipo=RoushFenwayRacing">Roush Fenway Racing</a></li>
                            <li><a href="teams.php?equipo=StewartHaasRacing">Stewart-Haas Racing</a></li>
                            <li><a href="teams.php?equipo=TeamPenske">Team Penske</a></li>
                            <li><a href="teams.php?equipo=WoodBrothersRacing">Wood Brothers Racing</a></li>
                        </div>
                    </div>
                    <div class="columna toyota" id="columnaToyota">
                        <div class="contenedorLogo"><img src="img/standings/toyota-logo-notext.png" class="logo"></div>
                        <div class="lista">
                            <li><a href="teams.php?equipo=JGR">Joe Gibbs Racing</a></li>
                            <li><a href="teams.php?equipo=LeavineFamilyRacing">Leavine Family Racing</a></li>
                        </div>
                    </div>
                    <div class="columna chevrolet" id="columnaChevrolet">
                        <div class="contenedorLogo"><img src="img/standings/chevrolet-logo-notext.png" class="logo"></div>
                        <div class="lista">
                            <li><a href="teams.php?equipo=ChipGanassiRacing">Chip Ganassi Racing</a></li>
                            <li><a href="teams.php?equipo=GermainRacing">Germain Racing</a></li>
                            <li><a href="teams.php?equipo=HendrickMotorsports">Hendrick Motorsports</a></li>
                            <li><a href="teams.php?equipo=JTGDaughertyRacing">JTG Daugherty Racing</a></li>
                            <li><a href="teams.php?equipo=RichardChildressRacing">Richard Childress Racing</a></li>
                            <li><a href="teams.php?equipo=RichardPettyMotorsports">Richard Petty Motorsports</a></li>
                        </div>
                    </div>
                </div>
            </div>        
        </main>
    <?php } ?>

    <?php include "inc/footer.php"; ?>
    <script>
        // Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
        setTimeout(function() {
            document.body.style.visibility = "visible";
        }, 10); 
    </script>
</body>
</html>
