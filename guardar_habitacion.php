<?php
// Obtener los datos del formulario
$tipoHabitacion = $_POST['tipoHabitacion'];
$piso = $_POST['piso'];
$estado = $_POST['estado'];
$numero =$_POST['numero'];
// Conexión a la base de datos
$servername = "localhost";
$username = "user";
$password = "123456";
$database = "hotel";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Preparar la consulta SQL
$sql = "INSERT INTO habitaciones (numero, tipohabitacion,piso, estado) VALUES ('$numero','$tipoHabitacion', '$piso', '$estado')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
