<?php
include '../models/Model.php';
include '../models/Clientes.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';
require '../models/Usuario.php';
require '../controllers/UsuarioController.php';
include '../controllers/FacturaController.php';
include '../models/Facturas.php';

use app\controllers\UsuarioController;

$controller = new UsuarioController();
$controller->validarSesion();

use App\controllers\ClienteController;

$controller = new ClienteController();
$clientes = $controller->mostrarClienInsta(); 

use app\controllers\FacturaController;

$controller = new FacturaController();
$factura = $controller->mostrarFactInsta(); 

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/productos.css">
    <title>Factura Generada</title>
</head>

<body>
    <header>
        <h1>Cliente
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
                    </tr>
                <?php endforeach; ?>
                
            <?php else : ?>
                <tr>
                    <td >No hay cliente guardado</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <header>
        <h1>Factura</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>Referencia</th>
                <th>Fecha</th>
                <th>id Cliente</th>
                <th>Descuento</th>
                <th>Valor Factura</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($factura)) : ?>
                <?php foreach ($factura as $item) : ?>
                    <tr>
                        <td><?php echo $item->get('refencia'); ?></td>
                        <td><?php echo $item->get('fecha'); ?></td>
                        <td><?php echo $item->get('idCliente'); ?></td>
                        <td><?php echo $item->get('descuento'); ?></td>
                        <td><?php echo $item->get('valorFactura'); ?></td> 
                    </tr>
                  
                <?php endforeach; ?>
                
            <?php else : ?>
                <tr>
                    <td >No hay factura guardada.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <br>
    <a href="menu.php">Menu</a>
</body>

</html>
