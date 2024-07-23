<?php
    include "db-connection.php";
    $estaPagina = 'Posiciones';
    include 'inc/navbar.php';

    $query = "SELECT * FROM posiciones ORDER BY puntos DESC";
    $resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posiciones | NASCAR</title>
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
    <main class="holder degradePosiciones">
        <div class="tablaDePosiciones">
            <h1>Posiciones ─ Temporada 2019</h1>
            <table id="posiciones">
                <thead>
                    <tr>
                        <th>Pos.</th>
                        <th style="text-align: left;">Piloto</th>
                        <th>Marca</th>
                        <th>Puntos</th>
						<th>Diferencia</th>
                        <th>Ganadas</th>
                        <th>Top 5s</th>
                        <th>Top 10s</th>
                        <th>NTs</th>
                        <th>Vueltas<br>Lideradas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $posicion = 1;
                        while ($fila = mysqli_fetch_assoc($resultado)) {
							if ($posicion == 1) {
								$maxPoints = $fila['puntos'];
							}
                            $marca_logo = ''; // You can assign logo paths based on 'marca' if needed
                            $marca_url = ''; // You can assign URLs based on 'marca' if needed
							switch ($fila['marca']) {
								case 'Toyota':
									$marca_logo = 'img/standings/toyota-logo-notext.png';
									$marca_url = 'https://www.toyota.com/racing';
									break;
								case 'Ford':
									$marca_logo = 'img/standings/ford-logo.png';
									$marca_url = 'https://performance.ford.com/';
									break;
								case 'Chevrolet':
									$marca_logo = 'img/standings/chevrolet-logo-notext.png';
									$marca_url = 'https://www.chevrolet.com/motorsports';
									break;
							}

                            $diff = $fila['puntos'] - $maxPoints; // Calculate difference
							$diff == 0 ? $diff = '-' : $diff;

                            echo "<tr>";
                            echo "<td>$posicion</td>";
                            echo "<td><img src='{$fila['piloto_logo']}' class='logo numero'><span class='nombre'><b>{$fila['piloto_nombre']}</b></span></td>";
                            echo "<td><a href='$marca_url' target='_blank'><img src='$marca_logo' class='logo marca'></a></td>";
                            echo "<td>{$fila['puntos']}</td>";
							echo "<td>{$diff}</td>";
                            echo "<td>{$fila['ganadas']}</td>";
                            echo "<td>{$fila['top_5']}</td>";
                            echo "<td>{$fila['top_10']}</td>";
                            echo "<td>{$fila['nts']}</td>";
                            echo "<td>{$fila['vueltas_lideradas']}</td>";
                            echo "</tr>";

                            $posicion++;
                        }
                    ?>
                </tbody>
            </table>
            <p style="font-style: italic; font-size: 0.9em; margin-bottom: 0;">Un nombre en <span style="font-weight: bold;">negrita</span> indica que el piloto ganó una carrera en la presente temporada.</p>
        </div>
    </main>

    <?php include 'inc/footer.php'; ?>

    <script>
        // Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
        setTimeout(function() {
            document.body.style.visibility = 'visible';
        }, 10); 
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.tablesorter.min.js"></script>
</body>
</html>
