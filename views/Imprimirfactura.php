<?php
include '../models/Model.php';
include '../models/Facturas.php';
include '../models/Clientes.php';
include '../controllers/DataBaseController.php';
include '../controllers/FacturaController.php';
include '../controllers/ClienteController.php';

use App\controllers\FacturaController;
use App\controllers\ClienteController;
use App\models\Facturas;
use App\models\Clientes;

$referencia = $_GET['referencia'] ?? null;
if ($referencia === null) {
   
    echo "Referencia de factura no encontrada.";
    exit(); 
}

$facturaController = new FacturaController();
$factura = $facturaController->ImprimirFactura($referencia);

$clienteController = new ClienteController();
$cliente = $clienteController->ImprimirCliente($_GET['referencia']);
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Factura.css">
    <title>Mostrar Factura</title>
</head>

<body>
    <div class="container">
        <h1>Factura</h1>
        
        <?php if ($cliente): ?>
        <div class="AlinearDatos">
            <h2>Datos del Cliente</h2>
            <p><strong>Nombre Completo:</strong> <?php echo $cliente->get('nombreCompleto'); ?></p>
            <p><strong>Tipo de Documento:</strong> <?php echo $cliente->get('tipoDocumento'); ?></p>
            <p><strong>Número de Documento:</strong> <?php echo $cliente->get('numeroDocumento'); ?></p>
            <p><strong>Email:</strong> <?php echo $cliente->get('email'); ?></p>
            <p><strong>Teléfono:</strong> <?php echo $cliente->get('telefono'); ?></p>
        </div>
        <?php else: ?>
        <div class="AlinearDatos">
            <p>Cliente no encontrado</p>
        </div>
        <?php endif; ?>
        
        <?php if ($factura): ?>
        <div class="AlinearDatos">
            <h2>Datos de la Factura</h2>
            <p><strong>Referencia:</strong> <?php echo $factura->get('referencia'); ?></p>
            <p><strong>Fecha:</strong> <?php echo $factura->get('fecha'); ?></p>
            <p><strong>Descuento:</strong> <?php echo $factura->get('descuento'); ?>%</p>
            <p><strong>Valor de la Factura:</strong> $<?php echo number_format($factura->get('valorFactura')); ?></p>
        </div>
        <?php else: ?>
        <div class="AlinearDatos">
            <p>Factura no encontrada</p>
        </div>
        <?php endif; ?>

        <div class="AlinearBoton">
            <form action="menu.php" >
                <input type="submit" value="Menú" class="menuBoton">
            </form>
        </div>
    </div>
</body>
</html>
