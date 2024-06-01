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

$referencia = $_GET['referencia'] ?? $_POST['referencia'] ?? null;

if (!$referencia) {
    die("No se proporcionó una referencia de factura.");
}

$facturaController = new FacturaController(); 
$clienteController = new ClienteController(); 

$factura = $facturaController->ImprimirFactura($referencia);

if (!$factura) {
    die("Factura no encontrada.");
}

$cliente = $clienteController->ImprimirCliente($factura->get('idCliente'));

if (!$cliente) {
    die("Cliente no encontrado.");
}
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
        
        <div class="AlinearDatos">
            <h2>Datos del Cliente</h2>
            <p><strong>Nombre Completo:</strong> <?php echo $cliente->get('nombreCompleto'); ?></p>
            <p><strong>Tipo de Documento:</strong> <?php echo $cliente->get('tipoDocumento'); ?></p>
            <p><strong>Número de Documento:</strong> <?php echo $cliente->get('numeroDocumento'); ?></p>
            <p><strong>Email:</strong> <?php echo $cliente->get('email'); ?></p>
            <p><strong>Teléfono:</strong> <?php echo $cliente->get('telefono'); ?></p>
        </div>
        
        <div class="AlinearDatos">
            <h2>Datos de la Factura</h2>
            <p><strong>Referencia:</strong> <?php echo $factura->get('refencia'); ?></p>
            <p><strong>Fecha:</strong> <?php echo $factura->get('fecha'); ?></p>
            <p><strong>Descuento:</strong> <?php echo $factura->get('descuento'); ?>%</p>
            <p><strong>Valor de la Factura:</strong> $<?php echo number_format($factura->get('valorFactura')); ?></p>
        </div>

        <div class="AlinearBoton">
            <form action="menu.php" >
                <input type="submit" value="Menú" class="menuBoton">
            </form>
        </div>
    </div>
</body>
</html>

