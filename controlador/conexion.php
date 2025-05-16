<?php

// Datos de acceso a la Base de Datos
$host = "127.0.0.1";
// $host = "localhost";
$database = "gestor_tareas";
$port = 3307;
$user = "usuario";
$password = "usuario";


try {
    $conn = new PDO ("mysql:host=$host;port=$port;dbname=$database;", $user, $password );
    

} catch (PDOException $e) {
    echo $e->getMessage();
}
