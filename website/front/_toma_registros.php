 <?php

//Conecta a la base de datos
require_once('_conexion.php');

/*

Valores enviados mediante POST
*/

echo "<pre>";
print_r($_POST);
echo "</pre>";

//Validar los datos
$nombre = $_POST['name01'];
$apellido = $_POST['apellido01'];
$mail = $_POST['mail01'];
$lugar_residencia = $_POST['lugar_residencia'];
$provincia = $_POST['prov_origen'];
$disciplina = $_POST['disci'];
$expos = $_POST['expos'];
$expo_origen = $_POST['expo_origen'];


//Inserta el registro
$sql = "INSERT INTO artistas_registros ( nombre, apellido, email, residencia, provincia_origen, disciplina, exposiciones, lugar_exposiciones) 
VALUES ('$nombre' , '$apellido', '$mail', '$lugar_residencia', '$provincia', '$disciplina', '$expos', '$expo_origen')" ; 
    


echo "Esta es la instrucción que vamos a ejecutar en la conexion:<br>";
echo $sql;
echo "<br>";
echo "<br>";

if ($result = mysqli_query($conexion, $sql)) {
    echo "Se insertó el registro correctamente";
    echo "<br>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    echo "<br>";

}


?> 



