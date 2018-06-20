CREATE DATABASE IF EXISTS daem_db;
CREATE DATABASE daem_db;
USE daem_db;



CREATE TABLE IF NOT EXISTS USUARIO(
    `ID_USUARIO` int NOT NULL AUTO_INCREMENT,
    `nombreUsuario` varchar(15) not null default '',
    `apellidoPaterno` varchar(15) not null default '',
    `apellidoMaterno` varchar(15) not null default '',
    `administradorUsuario` bit not null default '',
    `imagenUsuario` varchar(20) not null default '',
    `usuarioUsuario` varchar(20) not null default '',
    `usuarioPassword` varchar(20) not null default '',
    `usuarioFecha` date null,
    `usuarioEdad` int not null default '',
    `usuarioEscuela` varchar(15) not null default '',
    `usuarioOcupacion` varchar(15) not null default '',
    primary key (`ID_USUARIO`)
);

CREATE TABLE IF NOT EXISTS NOTICIA(
    `ID_NOTICIA` int NOT NULL AUTO_INCREMENT,
    `noticiaImagen` varchar(20) not null default '',
    `noticiaTxt` text not null default '',
    `seccion` int not null default '',
    `fecha` date null,
    `FK_ID_USUARIO_NOTICIA` int,
    primary key (`ID_NOTICIA`),
    foreign key (`FK_ID_USUARIO_NOTICIA`) references USUARIO (`ID_USUARIO`)
);
