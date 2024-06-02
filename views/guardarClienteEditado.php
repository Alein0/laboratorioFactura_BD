<?php
include '../models/Model.php';
include '../models/Clientes.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';

use App\controllers\ClienteController;
use App\models\Clientes;

$controller = new ClienteController();

$cliente = new Clientes();
$cliente->set('id', $_POST['id'] ?? null);
$cliente->set('nombreCompleto', $_POST['nombre']);
$cliente->set('tipoDocumento', $_POST['tipoDocumento']);
$cliente->set('numeroDocumento', $_POST['numeroDocumento']);
$cliente->set('email', $_POST['email']);
$cliente->set('telefono', $_POST['telefono']);

$clienteExiste = $controller->clienteExiste($cliente->get('numeroDocumento'));
if ($clienteExiste) {
    $result = false;
    $mensaje = 'Cliente Editado';
} else {
    $result = empty($cliente->get('id'))
        ? $controller->editar($cliente)
        : $controller->update($cliente);
    $mensaje = $result ? 'Datos Editados' : 'No se pudo Editar el Cliente';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Editado</title>
</head>
<body>
    <h1><?php echo $mensaje; ?></h1>
    <br>
    <a href="menu.php">Menu</a>
</body>
</html>