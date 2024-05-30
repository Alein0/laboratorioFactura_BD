<?php
include '../models/Model.php';
include '../models/Facturas.php';
include '../controllers/DataBaseController.php';
include '../controllers/FacturaController.php';

use App\controllers\FacturaController;
use App\models\Facturas;
$controller = new FacturaController();

$controller = new FacturaController();
$factura = new Facturas();

$factura->set('valorFactura', $_POST['valorFactura']);
$result = $controller->crear($factura);

$mensaje = $result ? 'Datos guardados' : 'No se pudo guardar el registro';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resgitrar valor factura</title>
</head>
<body>
    <h1><?php echo $mensaje; ?></h1>
    <br>
    <a href="menu.php">Volver</a>
    <?php if ($result) : ?>
        <br>
        <a href="CreacionFactura.php">Generar Factura</a>
    <?php endif; ?>
</body>
</html>