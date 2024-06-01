<?php
include '../models/Model.php';
include '../models/Clientes.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';
require '../models/Usuario.php';
require '../controllers/UsuarioController.php';

use app\controllers\UsuarioController;

$controller = new UsuarioController();
$controller->validarSesion();

use App\controllers\ClienteController;

$controller = new ClienteController();
$clientes = $controller->read(); 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/productos.css">
    <title>Clientes guardados</title>
</head>

<body>
    <header>
        <h1>Clientes guardados
            <?php echo $_SESSION['iniciarSesion'];?>
            <a href="cerrarSesion.php">Cerrar sesion</a>
        </h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>Nombre completo</th>
                <th>Tipo documento</th>
                <th>Numero documento</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($clientes)) : ?>
                <?php foreach ($clientes as $item) : ?>
                    <tr>
                        <td><?php echo $item->get('nombreCompleto'); ?></td>
                        <td><?php echo $item->get('tipoDocumento'); ?></td>
                        <td><?php echo $item->get('numeroDocumento'); ?></td>
                        <td><?php echo $item->get('email'); ?></td>
                        <td><?php echo $item->get('telefono'); ?></td>
                        <td><form action="EditarCliente.php?id=<?php echo $item->get('id'); ?>" method="post">

                                <input type="submit" value="Editar">
                            </form></td>
                    </tr>
                  
                <?php endforeach; ?>
                
            <?php else : ?>
                <tr>
                    <td >No hay clientes guardados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>
