<?php
require_once 'utils/db-connection.php';
$estaPagina = 'Equipos';
include_once 'inc/navbar.php';
include_once 'utils/functions.php';

if (isset($_GET['id'])) {
    $teamID    = intval($_GET['id']);
    $query     = "SELECT * FROM equipos WHERE id_equipo='$teamID'";
    $resultado = mysqli_query($conexion, $query);
    $teamData  = null;
    if (mysqli_num_rows($resultado) > 0) {
        $teamData = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        $class    = strtolower(str_replace(' ', '', $teamData['nombre_abreviado']));
    } else {
        $class = 'notfound';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $teamData['nombre_equipo'] ?? 'Equipos'; ?> | NASCAR</title>
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
    <?php if (isset($teamID)) { ?>
        <main class="holder equipo <?php echo $class; ?>">
            <?php if ($teamData == null) { ?>
                <h1>Equipo no encontrado</h1>
                <h3><a href="teams.php">>> Volver a Equipos <<</a></h3>
                <div class="imgEquipo" style="margin-top: 0px;">
                    <img src="img/teams/not-found/banner.jpg">
                </div>
            <?php } else { ?>
                <?php if ($teamData['imgLogo'] != null) { ?>
                    <img class="logoEquipo" src="<?php echo $teamData['imgLogo']; ?>">
                <?php } ?>
                <div class="imgEquipo" style="margin-top: 0px;">
                    <img src="<?php echo $teamData['imgEquipo']; ?>">
                </div>
                <div class="descripcionEquipo">
                    <h1><?php echo $teamData['nombre_equipo']; ?></h1>
                    <div class="contenedorFlex">
                        <div class="parrafo">
                            <h2>Sobre <?php echo $teamData['nombre_abreviado']; ?></h2>
                            <p><?php display($teamData['sobreEquipo']); ?></p>
                        </div>
                        <div class="info">
                            <h4 style="margin-top: 5px;">Fundador:</h4>
                            <p><?php echo $teamData['fundador']; ?></p>
                            <h4>Sede:</h4>
                            <p><?php echo $teamData['sede']; ?></p>
                            <h4>Sitio Web:</h4>
                            <p><a href="https://www.<?php echo $teamData['sitioWeb']; ?>"><?php echo $teamData['sitioWeb']; ?></a></p>
                            <h4>Redes:</h4>
                            <p>
                                <a href="<?php echo $teamData['facebook']; ?>" target="_blank" class="icon-facebook2"></a>
                                <a href="<?php echo $teamData['twitter']; ?>" target="_blank" class="icon-x"></a>
                                <a href="<?php echo $teamData['youtube']; ?>" target="_blank" class="icon-youtube"></a>
                                <a href="<?php echo $teamData['instagram']; ?>" target="_blank" class="icon-instagram"></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php if (!is_null($teamData['piloto1_nombre'])) { ?>
                    <h2 class="tituloPilotos">Pilotos</h2>
                    <div class="pilotos">
                        <div class="piloto">
                            <div class="imagenPiloto"><img src="<?php echo $teamData['piloto1_img']; ?>" class="center"></div>
                            <img src="<?php echo $teamData['piloto1_imgNumero']; ?>" class="logo numero"><h3><?php echo $teamData['piloto1_nombre']; ?></h3>
                        </div>
                        <?php if (!is_null($teamData['piloto2_nombre'])) { ?>
                            <div class="piloto">
                                <div class="imagenPiloto"><img src="<?php echo $teamData['piloto2_img']; ?>" class="center"></div>
                                <img src="<?php echo $teamData['piloto2_imgNumero']; ?>" class="logo numero"><h3><?php echo $teamData['piloto2_nombre']; ?></h3>
                            </div>
                        <?php } ?>
                        <?php if (!is_null($teamData['piloto3_nombre'])) { ?>
                            <div class="piloto">
                                <div class="imagenPiloto"><img src="<?php echo $teamData['piloto3_img']; ?>" class="center"></div>
                                <img src="<?php echo $teamData['piloto3_imgNumero']; ?>" class="logo numero"><h3><?php echo $teamData['piloto3_nombre']; ?></h3>
                            </div>
                        <?php } ?>
                        <?php if (!is_null($teamData['piloto4_nombre'])) { ?>
                            <div class="piloto">
                                <div class="imagenPiloto"><img src="<?php echo $teamData['piloto4_img']; ?>" class="center"></div>
                                <img src="<?php echo $teamData['piloto4_imgNumero']; ?>" class="logo numero"><h3><?php echo $teamData['piloto4_nombre']; ?></h3>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </main>
    <?php } else { ?>
        <main class="holder">
            <div class="indice equipos">
                <div class="columnas">
                    <div class="columna ford" id="columnaFord">
                        <div class="contenedorLogo"><img src="img/standings/ford-logo.png" class="logo"></div>
                        <div class="lista">
                            <li><a href="teams.php?id=5">Front Row Motorsports</a></li>
                            <li><a href="teams.php?id=7">Go FAS Racing</a></li>
                            <li><a href="teams.php?id=3">Roush Fenway Racing</a></li>
                            <li><a href="teams.php?id=4">Stewart-Haas Racing</a></li>
                            <li><a href="teams.php?id=2">Team Penske</a></li>
                            <li><a href="teams.php?id=6">Wood Brothers Racing</a></li>
                        </div>
                    </div>
                    <div class="columna toyota" id="columnaToyota">
                        <div class="contenedorLogo"><img src="img/standings/toyota-logo-notext.png" class="logo"></div>
                        <div class="lista">
                            <li><a href="teams.php?id=1">Joe Gibbs Racing</a></li>
                            <li><a href="teams.php?id=8">Leavine Family Racing</a></li>
                        </div>
                    </div>
                    <div class="columna chevrolet" id="columnaChevrolet">
                        <div class="contenedorLogo"><img src="img/standings/chevrolet-logo-notext.png" class="logo"></div>
                        <div class="lista">
                            <li><a href="teams.php?id=9">Chip Ganassi Racing</a></li>
                            <li><a href="teams.php?id=10">Germain Racing</a></li>
                            <li><a href="teams.php?id=11">Hendrick Motorsports</a></li>
                            <li><a href="teams.php?id=12">JTG Daugherty Racing</a></li>
                            <li><a href="teams.php?id=13">Richard Childress Racing</a></li>
                            <li><a href="teams.php?id=14">Richard Petty Motorsports</a></li>
                        </div>
                    </div>
                </div>
            </div>        
        </main>
    <?php } ?>

    <?php include_once 'inc/footer.php'; ?>
    <script>
        // Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
        setTimeout(function() {
            document.body.style.visibility = "visible";
        }, 10); 
    </script>
</body>
</html>