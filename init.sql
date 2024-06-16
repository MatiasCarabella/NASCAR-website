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
    titulo VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    descripcion TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    img_noticia VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    cuerpo TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    vid_noticia VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    vid_preview VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO noticias (titulo, descripcion, img_noticia, cuerpo, vid_noticia, vid_preview) 
VALUES (
    '¡Final de infarto en Watkins Glen!', 
    'Tres autos, circuito mojado, un accidente y intenso duelo por la entregan dejan un final histórico en Watkins Glen International.', 
    'img/noticias/2012-watkinsglen.jpg', 
    'En lo que sólo puede describirse como una de las carreras más emocionantes en la historia de la categoría, la carrera celebrada en el icónico circuito de Watkins Glen International entregó un final electrizante para el recuerdo.\n\nA medida que la carrera entraba en sus últimas vueltas, la tensión era palpable. Kyle Busch (#18), Brad Keselowski (#2) y Marcos Ambrose (#9) estaban envueltos en un reñido duelo por el 1° puesto. Con tres vueltas restantes y Kyle Busch (#18) liderando el trío ya mencionado, el coche número 47 de Bobby Labonte sufrió una falla de motor, dejando aceite por todo el circuito. Esto causó que el circuito, ya resbaladizo, se volviera aún más complicado. Los pilotos se vieron obligados a navegar la superficie aceitosa a toda velocidad para ganar posiciones o, en el caso de lider, defender el 1° puesto.\n\nEn la última vuelta, el duelo entre los tres protagonistas alcanzó su clímax: Keselowski (#2) hizo un movimiento audaz para intentar adelantar a Busch (#18), ingresaron lado a lado a "las eses" del circuito y ninguno cedió, hubo contacto entre ambos lo cual dejó a Busch (#18) accidentado y fuera de la pelea, y a Keselowski (#2) con daños leves. Ambrose (#9), quien previo a esto se encontraba 3°, aprovechó la oportunidad para cerrar la brecha con el nuevo líder de la carrera. En una demostración impresionante de control del auto y destreza, Keselowski (#2) y Ambrose (#9) fueron rueda a rueda a través de las últimas curvas. La multitud estalló cuando Ambrose logró adelantarse en la última curva, asegurando la victoria.\n\n''¡No lo puedo creer!'' exclamó Ambrose en la entrevista posterior a la carrera. ''Fue una carrera increíble, y ganarla de esta manera es simplemente increíble. Tengo que agradecer a mi equipo por darme un auto increíble y a Brad por competir limpio hasta el final.''\n\nCon esta victoria, Ambrose no solo asegura su lugar en la historia de NASCAR, sino que también envía un fuerte mensaje a sus competidores. A medida que la temporada avanza, la batalla por el campeonato se intensifica, prometiendo más emoción y drama en las próximas carreras.', 
    'video/2012-watkinsglen-finish.mp4', 
    'img/noticias/2012-watkinsglen-videopreview.jpg'
);


INSERT INTO noticias (titulo, descripcion, img_noticia, cuerpo) VALUES ('Sample News 2', 'This is a sample news description.', 'img/default.jpg', 'Cuerpo Lorem Cuerpo Lorem');
INSERT INTO noticias (titulo, descripcion, img_noticia, cuerpo) VALUES ('Sample News 3', 'This is a sample news description.', 'img/default.jpg', 'Cuerpo Lorem Cuerpo Lorem');
INSERT INTO noticias (titulo, descripcion, img_noticia, cuerpo) VALUES ('Sample News 4', 'This is a sample news description.', 'img/default.jpg', 'Cuerpo Lorem Cuerpo Lorem');
INSERT INTO noticias (titulo, descripcion, img_noticia, cuerpo) VALUES ('Sample News 5', 'This is a sample news description.', 'img/default.jpg', 'Cuerpo Lorem Cuerpo Lorem');
INSERT INTO noticias (titulo, descripcion, img_noticia, cuerpo) VALUES ('Sample News 6', 'This is a sample news description.', 'img/default.jpg', 'Cuerpo Lorem Cuerpo Lorem');

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
