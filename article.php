<?php
include "inc/nav.php";
$estaPagina = "Noticia";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noticia | NASCAR</title>
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

    <?php 
    if (isset($_GET["id_noticia"])) {
        $id_noticia = $_GET["id_noticia"];
        $noticia = get_noticia($id_noticia);
    } else {
        header("location:index.php");
        exit();
    }
    ?>

    <main class="holder noticia">
        <?php if (!is_null($noticia["id_noticia"])) { ?>
            <div class="cuerpoNoticia">
                <h1><?php echo utf8_decode($noticia["title"]); ?></h1>
                <p><?php echo utf8_decode($noticia["description"]); ?></p>
            </div>
            <?php if (!is_null($noticia["image_main"])) { ?>
                <img class="imgPrincipal" src="<?php echo $noticia["image_main"]; ?>">
            <?php } ?>
            <div class="cuerpoNoticia">
                <p><?php echo utf8_decode($noticia["body"]); ?></p>
            </div>
            <?php if (!is_null($noticia["video_embed_url"])) { ?>
            <div class="videoNoticia">
                <iframe width="560" height="315" src="<?php echo $noticia["video_embed_url"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <?php } ?>
            <div class="comentarios">
                <div class="titulo"><h1 class="titulo" style="margin-top: 4px;">Comentarios</h1></div>
                <?php
                $comentarios = mysqli_query(
                    $conexion,
                    "SELECT id_usuario, comentario, fecha FROM comentarios WHERE id_noticia = $id_noticia ORDER BY fecha ASC LIMIT 10"
                );
                if ($comentarios && mysqli_num_rows($comentarios) > 0) { ?>
                <div class="comentarios-list">
                    <?php while ($comentario = mysqli_fetch_array($comentarios)) { ?>
                    <div class="comentario">
                        <div class="comentario-header">
                            <img src="img/usuarios/default.png">
                            <span class="comentario-usuario"><?php echo nombre_usuario($comentario["id_usuario"]); ?></span>
                            <span class="comentario-fecha"><?php echo $comentario["fecha"]; ?></span>
                        </div>
                        <div class="comentario-body">
                            <p><?php echo $comentario["comentario"]; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } else { ?>
                <p>Aún no hay comentarios, ¡sé el primero!</p>
                <?php } ?>
                <?php if (isset($_SESSION["id_usuario"])) { ?>
                <form action="comment-create.php" method="POST">
                    <input type="hidden" name="id_noticia" value="<?php echo $noticia["id_noticia"]; ?>">
                    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION["id_usuario"]; ?>">
                    <div class="comentario-form">
                        <div class="comentario-form-header">
                            <img src="img/usuarios/default.png">
                            <span><?php echo nombre_usuario($_SESSION["id_usuario"]); ?></span>
                        </div>
                        <div class="comentario-form-body">
                            <textarea name="comentario" placeholder="¿Cuál es tu opinión? ¡Únete a la conversación dejando un comentario!" rows="5" cols="77"></textarea>
                        </div>
                        <div class="comentario-form-footer">
                            <input type="submit" value="Enviar">
                        </div>
                    </div>
                </form>
                <?php } else { ?>
                <p>¿Cuál es tu opinión? <a href="log-in.php">Inicia Sesión</a> o <a href="register.php">Regístrate</a> para comentar.</p>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="cuerpoNoticia">
                <h1>Noticia no encontrada</h1>
                <p>La noticia solicitada no está disponible.</p>
            </div>
        <?php } ?>
    </main>

    <?php include "inc/footer.php"; ?>

    <script>
        // Delay the display of the body content to prevent Flash of Unstyled Content (FOUC)
        setTimeout(function() {
            document.body.style.visibility = "visible";
        }, 10); 
    </script>
    
</body>
</html>
