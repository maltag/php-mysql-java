<h1 class="h1">Registro de usuarios</h1>
<?php 

//Carga el archivo que tiene la conexion:
include('_conexion.php');

//Chequea los registros de la tabla Puntos
$sql = "SELECT * 
        FROM artistas_registros	
        WHERE    1";
$result = mysqli_query($conexion, $sql);

//Si no hay registros, $result es false
if ( !$result ) {
    echo "No hay registros en la tabla usuario";
} else {

    echo "El resultado tiene " . mysqli_num_rows($result) . " registros.";
    echo "<br><br>";

    echo "<table border='5' style='width:100%'>";

    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NOMBRE</th>";
    echo "<th>APELLIDO</th>";
    echo "<th>MAIL</th>";
    echo "<th>RESIDENCIA</th>";
    echo "<th>LUGAR DE NACIMIENTO</th>";
    echo "<th>DISCIPLINA</th>";
    echo "<th>EXPOSICIONES</th>";
    echo "<th>LUGAR DE EXPOSICIONES</th>";
    echo "</tr>";
    

    //Muestra los registros
    
        while( $este = mysqli_fetch_assoc($result) ) {
            echo "<tr>";
            $id_usuario = $este['id_usuario'];
            echo "<td>" . $este['id_usuario'] . "</td>";
            echo "<td>" . $este['nombre'] . "</td>";
            echo "<td>" . $este['apellido'] . "</td>";
            echo "<td>" . $este['email'] . "</td>";
            echo "<td>" . $este['residencia'] . "</td>";
            echo "<td>" . $este['provincia_origen'] . "</td>";
            echo "<td>" . $este['disciplina'] . "</td>";
            echo "<td>" . $este['exposiciones'] . "</td>";
            echo "<td>" . $este['lugar_exposiciones'] . "</td>";
            echo "<td><a href='index.php?p=elimina_registros&id_usuario=$id_usuario'>";
            echo "  BORRAR";
            echo "</a></td>";
        }
    echo "</table>";
    echo "<br><br>";
}

?>


