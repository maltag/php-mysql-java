<?php
require_once("_conexion.php");

$id_usuario = $_GET['id_usuario'];

$query = "
    DELETE FROM
        artistas_registros
    WHERE id_usuario = '$id_usuario'
";

$result =  mysqli_query($conexion, $query);

if ( $result ) {
    echo "Se borró";

} else {
    echo "Error al borrar";
    echo "<br>";
    echo mysqli_error($conexion);

}

?>
<h2>Borrado</h2>
<p>ID: <?php echo $_GET['id_usuario'] ?>