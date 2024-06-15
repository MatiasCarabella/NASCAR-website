CREATE DATABASE IF NOT EXISTS sitioNASCAR;
USE sitioNASCAR;

CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (usuario, password, email) VALUES ('root', 'password', 'root@example.com');

CREATE TABLE IF NOT EXISTS noticias (
    id_noticia INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    img_noticia VARCHAR(255),
    vid_noticia VARCHAR(255)
);

INSERT INTO noticias (titulo, descripcion, img_noticia, vid_noticia) VALUES ('Sample News 1', 'This is a sample news description.', 'img/noticias/1.jpg', 'video/2012-watkinsglen-finish.mp4');
INSERT INTO noticias (titulo, descripcion, img_noticia) VALUES ('Sample News 2', 'This is a sample news description.', 'img/default.jpg');
INSERT INTO noticias (titulo, descripcion, img_noticia) VALUES ('Sample News 3', 'This is a sample news description.', 'img/default.jpg');
INSERT INTO noticias (titulo, descripcion, img_noticia) VALUES ('Sample News 4', 'This is a sample news description.', 'img/default.jpg');
INSERT INTO noticias (titulo, descripcion, img_noticia) VALUES ('Sample News 5', 'This is a sample news description.', 'img/default.jpg');
INSERT INTO noticias (titulo, descripcion, img_noticia) VALUES ('Sample News 6', 'This is a sample news description.', 'img/default.jpg');

CREATE TABLE IF NOT EXISTS comentarios (
    id_comentario INT AUTO_INCREMENT PRIMARY KEY,
    id_noticia INT,
    id_usuario INT,
    comentario TEXT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO comentarios (id_noticia, id_usuario, comentario) VALUES (1, 1, 'This is a sample comment.');
INSERT INTO comentarios (id_noticia, id_usuario, comentario) VALUES (1, 1, 'Another comment.');
