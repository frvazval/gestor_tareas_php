create database gestor_tareas;
use gestor_tareas;

CREATE TABLE usuarios (
id_usuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre_usuario varchar(50) NOT NULL UNIQUE,
password_usuario varchar(255) NOT NULL UNIQUE,
idioma varchar(3) DEFAULT "ESP"
);

CREATE TABLE tareas (
id_tarea int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre_tarea varchar(50) NOT NULL,
descripcion_tarea varchar(100),
estado_tarea varchar(50),
fecha_creacion datetime,
fecha_plazo datetime,
fecha_finalizacion datetime,
idioma varchar(3) DEFAULT "ESP"
);

CREATE USER 'usuario'@'%' IDENTIFIED BY 'usuario';
GRANT select, insert, update, delete ON colores.* to 'usuario'@'%';
