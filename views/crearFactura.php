<?php
include '../models/Model.php';
include '../models/Facturas.php';
include '../controllers/DataBaseController.php';
include '../controllers/FacturaController.php';

use App\controllers\FacturaController;
use App\models\Facturas;

$controller = new FacturaController();
$factura = new Facturas();

$factura->set('valorFactura', $_POST['valorFactura']);
$result = $controller->crear($factura);

$referencia = $factura->get('refencia'); 
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Crear Factura</title>
</head>

<body>
    <h1><?php echo $result ? 'Factura Creada' : 'No se pudo crear la factura'; ?></h1>

    <div>
        <a href="menu.php">Menú</a> <br>
        <a href="Imprimirfactura.php?referencia=<?php echo $referencia; ?>">Imprimir Factura</a>
    </div>
</body>
</html>
``
