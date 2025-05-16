create database gestor_tareas;
use gestor_tareas;

drop table tareas;
CREATE TABLE usuarios (
id_usuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre_usuario varchar(50) NOT NULL UNIQUE,
password_usuario varchar(255) NOT NULL UNIQUE,
email varchar(150),
idioma varchar(3) DEFAULT "ESP"
);

CREATE TABLE tareas (
id_tarea int NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_usuario int,
nombre_tarea varchar(50) NOT NULL,
descripcion_tarea varchar(100),
estado_tarea varchar(50),
fecha_creacion datetime,
fecha_plazo datetime,
fecha_finalizacion datetime,
prioridad varchar(15)
);

CREATE USER 'usuario'@'%' IDENTIFIED BY 'usuario';
GRANT select, insert, update, delete ON gestor_tareas.* to 'usuario'@'%';
