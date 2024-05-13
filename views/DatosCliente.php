<?php
// Establecer conexión con la base de datos

 $host = 'localhost';
 $user = 'root';
 $pwd = '';
 $db = 'facturacion_tienda_db';
 $conex;

$conn = new mysqli($host, $user, $pwd, $db);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$tipoDocumento = $_POST['tipoDocumento'];
$numDocumento = $_POST['numDocumento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

// Preparar la consulta SQL
$sql = "INSERT INTO clientes (nombreCompleto, tipoDocumento, numeroDocumento, telefono, email)
        VALUES ('$nombre', '$tipoDocumento', '$numDocumento', '$telefono', '$correo')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
  echo "El cliente ha sido guardado exitosamente.";
  echo '<br>';
  echo '<a href="../menu.php">Volver</a>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión con la base de datos
$conn->close();
?>
