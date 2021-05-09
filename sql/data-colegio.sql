DROP DATABASE IF EXISTS data_learning;

CREATE DATABASE data_learning;

USE data_learning;

CREATE TABLE Profesor(
	idprofesor INTEGER auto_increment primary key,
    NombreProfesor VARCHAR(60) not null,
    ApellidoProfesor VARCHAR(60) not null,
    Cedula VARCHAR (25) not null,
    FechaRegistro datetime,
    telefono VARCHAR (25) not null
);

CREATE TABLE Alumnos(
	idalumno integer auto_increment primary key,
    NombreAlumno VARCHAR(60) not null,
    ApellidoAlumno VARCHAR(60) not null,
    identidad  VARCHAR(60) not null,
    telefono VARCHAR(25) not null
);

CREATE TABLE Usuarios(
	usuario VARCHAR (60) not null primary key,
    password VARCHAR (255) not null,
    idprofesor integer,
    index(idprofesor),
    FOREIGN KEY Usuarios(idprofesor) references Profesor(idprofesor)
);

SELECT 'Usuarios' = usuario, 'Nombre del profesor' = NombreProfesor, 'Apellido Profesor' = ApellidoProfesor, Cedula, 'Fecha de registro' = FechaRegistro from Usuarios 
INNER JOIN Profesor ON Profesor.idprofesor = Usuarios.idprofesor WHERE usuario = 'Yeimar';
