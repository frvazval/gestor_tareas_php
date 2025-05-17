<?php

// Datos de acceso a la Base de Datos
$host = "127.0.0.1";
// $host = "localhost";
$database = "gestor_tareas";
$port = 3306;
$user = "root";
$password = "root";


try {
    $conn = new PDO ("mysql:host=$host;port=$port;dbname=$database;", $user, $password );
    

} catch (PDOException $e) {
    echo $e->getMessage();
}
