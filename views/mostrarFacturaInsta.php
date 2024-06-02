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
    <link rel="stylesheet" href="../CSS/Factura.css">
    <title>Facturas Del Cliente</title>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Facturas del Cliente</h1>
            <a href="cerrarSesion.php" class="Botoncerrarsesion">Cerrar sesión</a>
        </div>
    </header>
    <section class="section-container">
        <h2>Datos del Cliente</h2>
        <?php if (!empty($clientes)) : ?>
            <?php foreach ($clientes as $item) : ?>
                <div class="invoice-section">
                    <p><strong>Nombre completo:</strong> <?php echo $item->get('nombreCompleto'); ?></p>
                    <p><strong>Tipo documento:</strong> <?php echo $item->get('tipoDocumento'); ?></p>
                    <p><strong>Número documento:</strong> <?php echo $item->get('numeroDocumento'); ?></p>
                    <p><strong>Email:</strong> <?php echo $item->get('email'); ?></p>
                    <p><strong>Teléfono:</strong> <?php echo $item->get('telefono'); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No hay cliente guardado</p>
        <?php endif; ?>
    </section>
    <section class="section-container">
        <h2>Facturas</h2>
        <?php if (!empty($factura)) : ?>
            <?php foreach ($factura as $item) : ?>
                <div class="invoice-section">
                    <p><strong>Referencia:</strong> <?php echo $item->get('refencia'); ?></p>
                    <p><strong>Fecha:</strong> <?php echo $item->get('fecha'); ?></p>
                    <p><strong>ID Cliente:</strong> <?php echo $item->get('idCliente'); ?></p>
                    <p><strong>Descuento:</strong> <?php echo $item->get('descuento'); ?>%</p>
                    <p><strong>Valor Factura:</strong> $<?php echo number_format($item->get('valorFactura')); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No hay facturas guardadas.</p>
        <?php endif; ?>
    </section>
    <footer>
        <a href="menu.php" class="Botoncerrarsesion">Menú</a>
    </footer>
</body>
</html>
