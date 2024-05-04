<?php

$servidor       = "localhost"; //Dirección del servidor
$usuario        = "root";      //Usuario de la base de datos
$password       = "";   //Clave del usuario de la base de datos
$base_de_datos  = "db_registros"; //Nombre de la base de datos

$conexion = mysqli_connect($servidor, $usuario, $password, $base_de_datos);

//CHECK
if (!$conexion) {
   
    die("Conexión fallida: " . mysqli_connect_error() );
    
} else {
    echo "Conexión exitosa";
    
    echo "<br>";
}

?>

