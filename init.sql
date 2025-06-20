CREATE DATABASE IF NOT EXISTS sitioNASCAR CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sitioNASCAR;

-- Drop existing tables if they exist
DROP TABLE IF EXISTS noticias;
DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS comentarios;
DROP TABLE IF EXISTS equipos;

-- Create 'usuarios' table
CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    password VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    email VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    profile_pic VARCHAR(255) DEFAULT 'img/user/profile_pics/default.png'
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO usuarios (usuario, password, email) VALUES ('root', '$2y$10$WNtlWT.Dkl0XDnZpovJo8.u8eH3mBaj9xlO3FUb71hwtiJmDYIGrm', 'root@example.com');
INSERT INTO usuarios (usuario, password, email, profile_pic) VALUES ('jorge', '$2y$10$WNtlWT.Dkl0XDnZpovJo8.u8eH3mBaj9xlO3FUb71hwtiJmDYIGrm', 'jorge@example.com', 'img/user/profile_pics/boke.jpeg');

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
    'Marcos Ambrose logra el doblete en Watkins Glen',
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

INSERT INTO comentarios (id_noticia, id_usuario, comentario) VALUES (1, 2, 'This is a sample comment.');
INSERT INTO comentarios (id_noticia, id_usuario, comentario) VALUES (1, 2, 'Another comment.');

-- Creating the 'posiciones' table
CREATE TABLE IF NOT EXISTS posiciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    piloto_nombre VARCHAR(255) NOT NULL,
    piloto_logo VARCHAR(255) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    puntos INT NOT NULL,
    ganadas INT NOT NULL,
    top_5 INT NOT NULL,
    top_10 INT NOT NULL,
    nts INT NOT NULL,
    vueltas_lideradas INT NOT NULL
);

-- Sample inserts for the 'posiciones' table
INSERT INTO posiciones (piloto_nombre, piloto_logo, marca, puntos, ganadas, top_5, top_10, nts, vueltas_lideradas) VALUES
('Kyle Busch', 'img/standings/kyle-busch-18-logo.png', 'Toyota', 5040, 5, 17, 27, 2, 1582),
('Martin Truex Jr', 'img/standings/martin-truex-jr-19-logo.png', 'Toyota', 5035, 7, 15, 24, 2, 1371),
('Kevin Harvick', 'img/standings/kevin-harvick-4-logo.png', 'Ford', 5033, 4, 15, 26, 3, 953),
('Denny Hamlin', 'img/standings/denny-hamlin-11-logo.png', 'Toyota', 5027, 6, 19, 24, 1, 922),
('Joey Logano', 'img/standings/joey-logano-22-logo.png', 'Ford', 2380, 2, 12, 21, 0, 899),
('Kyle Larson', 'img/standings/kyle-larson-42-logo.png', 'Chevrolet', 2339, 1, 8, 17, 8, 529),
('Ryan Blaney', 'img/standings/ryan-blaney-12-logo.png', 'Ford', 2339, 1, 11, 18, 4, 422),
('Brad Keselowski', 'img/standings/brad-keselowski-2-logo.png', 'Ford', 2318, 3, 13, 19, 4, 1085),
('Clint Bowyer', 'img/standings/clint-bowyer-14-logo.png', 'Ford', 2290, 0, 7, 18, 7, 138),
('Chase Elliot', 'img/standings/chase-elliot-9-logo.png', 'Chevrolet', 2275, 3, 11, 15, 6, 601),
('William Byron', 'img/standings/william-byron-24-logo.png', 'Chevrolet', 2274, 0, 15, 13, 3, 233),
('Alex Bowman', 'img/standings/alex-bowman-88-logo.png', 'Chevrolet', 2274, 1, 7, 12, 2, 200),
('Kurt Busch', 'img/standings/kurt-busch-1-logo.png', 'Chevrolet', 2237, 1, 6, 18, 2, 212),
('Aric Almirola', 'img/standings/aric-almirola-10-logo.png', 'Ford', 2234, 0, 3, 12, 3, 180),
('Ryan Newman', 'img/standings/ryan-newman-6-logo.png', 'Ford', 2219, 0, 3, 14, 1, 19),
('Erik Jones', 'img/standings/erik-jones-20-logo.png', 'Toyota', 2194, 1, 10, 17, 5, 172),
('Daniel Suarez', 'img/standings/daniel-suarez-41-logo.png', 'Ford', 846, 0, 4, 11, 4, 166),
('Jimmie Johnson', 'img/standings/jimmie-johnson-48-logo.png', 'Chevrolet', 835, 0, 3, 12, 4, 131),
('Paul Menard', 'img/standings/paul-menard-21-logo.png', 'Ford', 777, 0, 0, 4, 1, 11),
('Chris Buescher', 'img/standings/chris-buescher-37-logo.png', 'Chevrolet', 729, 0, 0, 4, 4, 13),
('Austin Dillon', 'img/standings/austin-dillon-3-logo.png', 'Chevrolet', 700, 0, 0, 6, 3, 70),
('Matt DiBenedetto', 'img/standings/matt-dibenedetto-95-logo.png', 'Toyota', 699, 0, 3, 7, 5, 152),
('Ricky Stenhouse Jr', 'img/standings/ricky-stenhouse-jr-17-logo.png', 'Ford', 679, 0, 1, 3, 5, 109),
('Ty Dillon', 'img/standings/ty-dillon-13-logo.png', 'Chevrolet', 613, 0, 1, 3, 0, 14),
('Daniel Hemric', 'img/standings/daniel-hemric-8-logo.png', 'Chevrolet', 530, 0, 1, 2, 5, 22),
('Ryan Preece', 'img/standings/ryan-preece-47-logo.png', 'Chevrolet', 507, 0, 1, 3, 6, 1),
('Michael McDowell', 'img/standings/michael-mcdowell-34-logo.png', 'Ford', 485, 0, 2, 2, 5, 18),
('Bubba Wallace', 'img/standings/bubba-wallace-43-logo.png', 'Chevrolet', 437, 0, 1, 1, 3, 1),
('Corey LaJoie', 'img/standings/corey-lajoie-32-logo.png', 'Ford', 401, 0, 0, 2, 4, 0),
('David Ragan', 'img/standings/david-ragan-38-logo.png', 'Ford', 388, 0, 0, 0, 8, 3),
('Matt Tifft', 'img/standings/matt-tifft-36-logo.png', 'Ford', 352, 0, 0, 1, 4, 1),
('Reed Sorenson', 'img/standings/spire-motorsports-77-logo.png', 'Chevrolet', 118, 0, 0, 0, 9, 0),
('Quin Houff', 'img/standings/spire-motorsports-77-logo.png', 'Chevrolet', 77, 0, 0, 0, 3, 0);


CREATE TABLE IF NOT EXISTS equipos (
    id_equipo INT AUTO_INCREMENT PRIMARY KEY,
    nombre_equipo VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    nombre_abreviado VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    imgLogo VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    imgEquipo VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    sobreEquipo TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    fundador VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    sede VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    sitioWeb VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    facebook VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    twitter VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    youtube VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    instagram VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto1_nombre VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    piloto1_img VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    piloto1_imgNumero VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    piloto2_nombre VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto2_img VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto2_imgNumero VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto3_nombre VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto3_img VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto3_imgNumero VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto4_nombre VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto4_img VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    piloto4_imgNumero VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO equipos (
    nombre_equipo,
    nombre_abreviado,
    imgLogo,
    imgEquipo,
    sobreEquipo,
    fundador,
    sede,
    sitioWeb,
    facebook,
    twitter,
    youtube,
    instagram,
    piloto1_nombre,
    piloto1_img,
    piloto1_imgNumero,
    piloto2_nombre,
    piloto2_img,
    piloto2_imgNumero,
    piloto3_nombre,
    piloto3_img,
    piloto3_imgNumero,
    piloto4_nombre,
    piloto4_img,
    piloto4_imgNumero
) VALUES (
    'Joe Gibbs Racing',
    'JGR',
    'img/teams/joe-gibbs-racing/logo.png',
    'img/teams/joe-gibbs-racing/banner.jpg',
    'Fundado en 1992 por Joe Gibbs, exentrenador de los Washington Redskins, JGR se consolidó con el correr de los años como una potencia en la categoría:\n5 campeonatos (2000, 2002, 2005, 2015, 2019) y cientos de victorias de la mano de varios pilotos históricos entre los que se destacan Bobby Labonte, Tony Stewart, Denny Hamlin y Kyle Busch, han contribuido a la rica historia de la organización.',
    'Joe Gibbs',
    'Huntersville, North Carolina',
    'joegibbsracing.com',
    'https://www.facebook.com/joegibbsracing',
    'https://twitter.com/joegibbsracing',
    'https://www.youtube.com/@JoeGibbsRacingTV',
    'https://www.instagram.com/joegibbsracing',
    'Denny Hamlin',
    'img/teams/joe-gibbs-racing/drivers/denny-hamlin.png',
    'img/standings/denny-hamlin-11-logo.png',
    'Kyle Busch',
    'img/teams/joe-gibbs-racing/drivers/kyle-busch.png',
    'img/standings/kyle-busch-18-logo.png',
    'Martin Truex Jr.',
    'img/teams/joe-gibbs-racing/drivers/martin-truex-jr.png',
    'img/standings/martin-truex-jr-19-logo.png',
    'Erik Jones',
    'img/teams/joe-gibbs-racing/drivers/erik-jones.png',
    'img/standings/erik-jones-20-logo.png'
);

INSERT INTO equipos (
    nombre_equipo,
    nombre_abreviado,
    imgLogo,
    imgEquipo,
    sobreEquipo,
    fundador,
    sede,
    sitioWeb,
    facebook,
    twitter,
    youtube,
    instagram,
    piloto1_nombre,
    piloto1_img,
    piloto1_imgNumero,
    piloto2_nombre,
    piloto2_img,
    piloto2_imgNumero,
    piloto3_nombre,
    piloto3_img,
    piloto3_imgNumero,
    piloto4_nombre,
    piloto4_img,
    piloto4_imgNumero
) VALUES (
    'Team Penske',
    'Penske',
    'img/teams/team-penske/logo.png',
    'img/teams/team-penske/banner.jpg',
    'Fundado en 1966 por Roger Penske, Team Penske se ha convertido en una fuerza dominante en el automovilismo. Sus más grandes logros en NASCAR incluyen: 2 campeonatos (2012 y 2018), una impresionante cantidad de victorias y la participación de pilotos legendarios como Rusty Wallace, Kurt Busch, Brad Keselowski y Joey Logano. Team Penske sigue siendo una potencia, destacándose por su competitividad y éxito constante en la pista.',
    'Roger Penske',
    'Mooresville, North Carolina',
    'teampenske.com',
    'https://www.facebook.com/TeamPenske',
    'https://twitter.com/Team_Penske',
    'https://www.youtube.com/@Team_Penske',
    'https://www.instagram.com/team_penske/',
    'Brad Keselowski',
    'img/teams/team-penske/drivers/brad-keselowski.png',
    'img/standings/brad-keselowski-2-logo.png',
    'Ryan Blaney',
    'img/teams/team-penske/drivers/ryan-blaney.png',
    'img/standings/ryan-blaney-12-logo.png',
    'Joey Logano',
    'img/teams/team-penske/drivers/joey-logano.png',
    'img/standings/joey-logano-22-logo.png',
    NULL,
    NULL,
    NULL
);
