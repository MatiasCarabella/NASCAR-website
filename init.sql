CREATE DATABASE IF NOT EXISTS sitioNASCAR CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sitioNASCAR;

-- Drop existing tables if they exist
DROP TABLE IF EXISTS noticias;
DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS comentarios;

-- Create 'usuarios' table
CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    password VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    email VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO usuarios (usuario, password, email) VALUES ('root', '$2y$10$WNtlWT.Dkl0XDnZpovJo8.u8eH3mBaj9xlO3FUb71hwtiJmDYIGrm', 'root@example.com');

-- Create 'noticias' table
CREATE TABLE IF NOT EXISTS noticias (
    id_noticia INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    description TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    image_main VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    body TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    image_article VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    video_embed_url VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    video_preview VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO noticias (title, description, image_main, body, video_embed_url, video_preview) 
VALUES (
    '¡Final de infarto en Watkins Glen!',
    'Tres autos, circuito mojado, un accidente y un intenso duelo por la victoria dieron lugar a un final histórico en Watkins Glen International.', 
    'img/articles/2012-watkinsglen-finish/image_main.jpg',
    'En lo que sólo puede describirse como una de las carreras más emocionantes en la historia de la categoría, la carrera celebrada en el icónico circuito de Watkins Glen International entregó un final electrizante para el recuerdo.\n\nA medida que la carrera entraba en sus últimas vueltas, la tensión era palpable. Kyle Busch (#18), Brad Keselowski (#2) y Marcos Ambrose (#9) estaban envueltos en un reñido duelo por el 1° puesto. Con tres vueltas restantes y Kyle Busch (#18) liderando el trío ya mencionado, el coche número 47 de Bobby Labonte sufrió una falla de motor, dejando aceite por todo el circuito. Esto causó que el circuito, ya resbaladizo, se volviera aún más complicado. Los pilotos se vieron obligados a navegar la superficie aceitosa a toda velocidad para ganar posiciones o, en el caso de lider, defender el 1° puesto.\n\nEn la última vuelta, el duelo entre los tres protagonistas alcanzó su clímax: Keselowski (#2) hizo un movimiento audaz para intentar adelantar a Busch (#18), ingresaron lado a lado a "las eses" del circuito y ninguno cedió, hubo contacto entre ambos lo cual dejó a Busch (#18) accidentado y fuera de la pelea, y a Keselowski (#2) con daños leves. Ambrose (#9), quien previo a esto se encontraba 3°, aprovechó la oportunidad para cerrar la brecha con el nuevo líder de la carrera. En una demostración impresionante de control del auto y destreza, Keselowski (#2) y Ambrose (#9) fueron rueda a rueda a través de las últimas curvas. La multitud estalló cuando Ambrose logró adelantarse en la última curva, asegurando la victoria.\n\n''¡No lo puedo creer!'' exclamó Ambrose en la entrevista posterior a la carrera. ''Fue una carrera increíble, y ganarla de esta manera es simplemente increíble. Tengo que agradecer a mi equipo por darme un auto increíble y a Brad por competir limpio hasta el final.''\n\nCon esta victoria, Ambrose no solo asegura su lugar en la historia de NASCAR, sino que también envía un fuerte mensaje a sus competidores. A medida que la temporada avanza, la batalla por el campeonato se intensifica, prometiendo más emoción y drama en las próximas carreras.', 
    'https://www.youtube-nocookie.com/embed/X9jpolH14Lg?si=mBmBTGQJikAu87oA',
    'video/2012-watkinsglen-finish/video_preview.mp4'
);


INSERT INTO noticias (title, description, image_main, body) VALUES (
    '¡Marcos Ambrose gana de nuevo en Watkins Glen!',
    'El piloto australiano logró reivindicar su triunfo del año pasado.',
    'img/articles/ambrose-winner/image_main.jpg',
    'El piloto australiano Marcos Ambrose se alzó con una victoria espectacular en la carrera de este fin de semana en Watkins Glen. Esta victoria no solo es un hito personal para Ambrose, sino que también reafirma su dominio en este circuito, habiendo ganado también el año pasado en circunstancias igualmente emocionantes.\n\nLa carrera de este año será recordada por su final de infarto, con Ambrose manteniendo la calma y la precisión en medio del caos, del cual logró emerger victorioso.\n\nEsta victoria es especialmente significativa para Ambrose, quien ha demostrado ser uno de los mejores pilotos en circuitos de carretera, destacándose entre sus competidores por su habilidad y determinación. Con esta victoria, Ambrose no solo añade un segundo trofeo a su colección de la máxima categoría, sino que también se asegura un lugar destacado en la historia del circuito.'
);

INSERT INTO noticias (title, description, image_main, body) VALUES (
    '"Es decepcionante"',
    'Kyle Busch expresa su frustración tras la colisión en la última vuelta.',
    'img/articles/kyle-busch-interview/image_main.jpg',
    'El emocionante desenlace de la carrera en Watkins Glen dejó a algunos de sus protagonistas eufóricos, pero siempre existe la contracara de los menos afortunados:\n\nKyle Busch (#18) era el líder de la carrera hasta la última vuelta, cuando un contacto con Brad Keselowski lo hizo perder el control y acabó contra uno de los muros del circuito, relegándolo así al séptimo lugar.\n\nEn una entrevista posterior a la carrera, Busch no ocultó su frustración: "Es decepcionante, estábamos en una posición perfecta para ganar. Llevamos el coche al límite durante toda la carrera y, en la última vuelta, el incidente con Keselowski me dejó fuera. Es una forma muy dura de perder una carrera".\n\nA pesar de su evidente descontento, Busch extendió sus felicitaciones al ganador: "Quiero felicitar a Marcos [Ambrose] por su victoria. Hizo una gran carrera y supo aprovechar su oportunidad en el momento justo. Aunque no estoy contento con cómo terminó para nosotros, así es el automovilismo, y hay que seguir adelante y pensar en la próxima carrera".'
);

INSERT INTO noticias (title, description, image_main, body) VALUES (
    '¡Nuevo circuito se une al calendario: Charlotte Roval!',
    'El calendario de 2020 se enriquece con un nuevo circuito de carretera.',
    'img/articles/charlotte-roval/image_main.jpg',
    'NASCAR ha confirmado su más reciente modificación al calendario de carreras para la temporada 2020: La esperada incorporación del Charlotte Roval.\n\nEste innovador trazado combina las características de un óvalo tradicional con las de un circuito de carretera, ofreciendo un desafío único tanto para los pilotos como para los equipos. Ubicado en el icónico Charlotte Motor Speedway, el Roval promete carreras llenas de adrenalina y estrategias complejas.\n\nLos fans han manifestado su entusiasmo por la llegada de este circuito, cuya primera edición promete una experiencia completamente nueva y duelos sobre el asfalto para el recuerdo.'
);

INSERT INTO noticias (title, description, image_main, body, image_article) VALUES (
    'Martin Truex Jr. extiende su contrato con FRR',
    '"MTJ" continuará en Furniture Row Racing por varias temporadas más.',
    'img/articles/mtj-furniture-row-extension/image_main.jpg',
    'Furniture Row Racing ha anunciado la extensión del contrato con su piloto estrella: Martin Truex Jr., quien actualmente es uno de los pilotos más talentosos, respetados y cotizados de la categoría.\n\nEsta renovación es un voto de confianza mutuo entre el piloto y el equipo, que han logrado grandes éxitos juntos en los últimos años. Truex Jr. ha sido una pieza clave en el éxito de Furniture Row Racing, destacándose por su consistencia y habilidad en la pista. Con esta renovación, tanto el equipo como el piloto buscan continuar cosechando victorias y aspirando a campeonatos.\n\n"Estoy muy emocionado de seguir siendo parte de Furniture Row Racing," dijo Truex Jr. "Tenemos un equipo increíble y estoy seguro de que juntos lograremos aún más éxitos en el futuro."',
    'img/articles/mtj-furniture-row-extension/image_article.jpg'
);

INSERT INTO noticias (title, description, image_main, body, image_article) VALUES (
    'Matt DiBenedetto se une a Wood Brothers Racing',
    'Conducirá el icónico auto #21 para la temporada 2020.',
    'img/articles/dibenedetto-joins-wbr/image_main.jpg',
    'En lo que seguramente será una de las transferencias del año, Matt DiBenedetto (actual piloto del auto #95 del humilde equipo Leavine Family Racing) ha sido confirmado como el nuevo piloto del auto #21 para el equipo Wood Brothers Racing a partir de la temporada 2020.\n\nEste anuncio llega tras una serie de destacadas actuaciones de DiBenedetto, quien ha demostrado ser un competidor tenaz y talentoso en la pista. Su habilidad y determinación le han ganado esta oportunidad, y tanto el piloto como el equipo están entusiasmados con las posibilidades que se presentan.\n\n"Conducir para Wood Brothers Racing es un sueño hecho realidad," comentó DiBenedetto. "Estoy listo para darlo todo y representar a este equipo histórico con orgullo." La incorporación de DiBenedetto al equipo promete traer nuevas emociones y éxitos en las próximas temporadas.',
    'img/articles/dibenedetto-joins-wbr/image_article.jpg'
);

-- Create 'comentarios' table
CREATE TABLE IF NOT EXISTS comentarios (
    id_comentario INT AUTO_INCREMENT PRIMARY KEY,
    id_noticia INT,
    id_usuario INT,
    comentario TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_noticia) REFERENCES noticias(id_noticia),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO comentarios (id_noticia, id_usuario, comentario) VALUES (1, 1, 'This is a sample comment.');
INSERT INTO comentarios (id_noticia, id_usuario, comentario) VALUES (1, 1, 'Another comment.');
