<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Variable GET
//Que contenido incluir:

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = "home";
}

include("front/header.php");

$archivo_a_cargar = "front/_" . $p . ".php";

if (file_exists($archivo_a_cargar)) {
    include($archivo_a_cargar);
} else {
    include("front/_404.php");
}

include("front/footer.php");

echo "<script>console.log('indexok' );</script>";
?>