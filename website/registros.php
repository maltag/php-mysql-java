<?php 
/*

Este php es para conectar a la base de datos
e imprimir los resultados de la consulta
en formato de texto plano separado por comas


Si en tu ejercicio cargabas un "listado.txt" con este formato:

Martín,20,50,99
Lucía,12,30,12
Agustín,30,85,9
...
    
Este archivo "listado.php" debería imprimir con el mismo formato
en el código fuente enviado como respuesta el resultado de la consulta
a la base de datos.

IMPORTANTE: El archivo "listado.php" debe ser llamado
por el protocolo HTTP, no por el protocolo FILE.
Osea, por ejemplo http://localhost/proyecto/listado.php

*/

/********* comienzo del scpript ************/

//lo primero es una cabecera de la respuesta
//sirve para que el cliente (el que llamó a este archivo)
//sepa que es un archivo de texto plano
header("Content-type: text/plain");


//la siguiente línea es para conectarse a la base de datos
//convendría que la pongas en un archivo aparte y lo incluyas 
require_once("front/_conexion.php");
//$mysqli = new mysqli( "localhost", "usuarioDB", "passwordDB", "nombreDB" );



//hacemos la consulta a la base de datos:
$sql = "SELECT * 
        FROM artistas_registros 
        WHERE    1";
$result = mysqli_query($conexion, $sql);
// WHERE 1 es para que no filtre nada, es decir, que traiga todo.
//Si querés filtrar algo, pones WHERE nombre = 'Julian' por ejemplo
//y obtendrías todos los registros cuyo campo 'nombre' sea igual a 'Julian'


//recorremos el resultado
while($row = $result->fetch_assoc()){
    
    //por cada fila del resultado, hacemos un echo
    //para que se vaya generando el archivo con formato de texto.
    echo $row['id_usuario'].",".$row['nombre'].",".$row['apellido'].",".$row['email'].",".$row['residencia'].",".$row['provincia_origen'].",".$row['disciplina'].",".$row['exposiciones'].",".$row['lugar_exposiciones']."\n";
    
    //importante imprimir el salto de línea al final de cada reglon

 
}



/********* fin del scpript ************/

?>