DROP DATABASE  IF EXISTS data_learning;
CREATE DATABASE data_learning;
USE data_learning;

CREATE TABLE Usuario(
id_usuario INTEGER AUTO_INCREMENT PRIMARY KEY,
usuario VARCHAR(60) NOT NULL COMMENT"Nombre de el usuario",
password VARCHAR(250) NOT NULL COMMENT"Contrasela de el usario",
email VARCHAR(60) NOT NULL COMMENT"Email de el usario",
fecha_acceso DATETIME COMMENT"Fecha de el ultimo acceso de el usuario",
imagen VARCHAR(150) COMMENT"Imagen dee el usuario",
ip_acceso VARCHAR(100) NOT NULL COMMENT"Ip de acceso",
estado ENUM("Activo","Inactivo") NOT NULL,
FOREIGN KEY (usuario) REFERENCES registro(usuario)
);
INSERT INTO usuario (usuario,password,email,fecha_acceso,imagen,ip_acceso,estado) VALUES ('armagedon','1234','yeimar112003@gmail.com','Mon, 10 May 2021 04:32:40 -0500','','192.168.1.9','Activo');

CREATE TABLE registro (
  id_registro INTEGER  AUTO_INCREMENT PRIMARY KEY COMMENT 'primary key',
  nombre VARCHAR(60) NOT NULL COMMENT"Nombre",
  apellido VARCHAR(60) NOT NULL COMMENT"Apellido",
  usuario VARCHAR(155) NOT NULL COMMENT 'Nombre de Usuario',
  email VARCHAR(60) NOT NULL COMMENT 'email de el Usario',
  privilegio BOOLEAN DEFAULT 0 NOT NULL COMMENT"Rol de el usario",
  password VARCHAR(250) NOT NULL COMMENT 'Contraseña de el usario',
  fecha_registro VARCHAR(50) NOT NULL COMMENT 'Fecha de registro'
);
INSERT INTO registro(nombre,apellido,usuario,email,privilegio,password,fecha_registro) VALUES
("Yeimar","Lemus","armagedon","yeimar112003@gmail.com","Profesor","%php_dbadmi","Mon, 10 May 2021 04:32:40 -0500");

CREATE TABLE privilegios(
id_privilegio INTEGER AUTO_INCREMENT PRIMARY KEY,
descripcion TEXT(60)
);
INSERT INTO privilegios(descripcion)VALUES("Admin");
INSERT INTO privilegios(descripcion)VALUES("Profesor");
INSERT INTO privilegios(descripcion)VALUES("Alumno");


