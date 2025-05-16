<?php
session_start(); // -> $_SESSION
$_SESSION['token'] = bin2hex(random_bytes(64));



require_once 'controlador/conexion.php';

$idiomesJSON = "idiomas.json";
$file = file_get_contents($idiomesJSON);
$idiomas = json_decode($file, true);
$idioma = $_SESSION['idioma'] ?? "CAT";

?>

<!DOCTYPE html>
<html lang="<?= $idiomas[$idioma]['lang'] ?>">

<head>
<?php include_once 'modulos/head.php';?>
    <title>My TO-DO APP</title>
      
</head>

<body>
<?php include_once 'modulos/header.php';?>
    <main class="main-index">
        
<section >
<?php
$formulario = $_GET['formulario'] ?? 'login';

switch ($formulario) {
    case "login":
        include_once 'formularios/form_login.php';
        break;
    case "crear_cuenta":
        include_once 'formularios/form_crear_usuario.php';
        break;
    case "reset":
        include_once 'formularios/form_reset_password.php';
        break;
}

?>
           
</section>
    </main>

    <script src="js/index.js"></script>
</body>

</html>
<?php
