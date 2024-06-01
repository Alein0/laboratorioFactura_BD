<?php
include '../models/Model.php';
include '../models/Facturas.php';
include '../controllers/DataBaseController.php';
include '../controllers/FacturaController.php';
include '../controllers/ClienteController.php';

use App\controllers\FacturaController;
use App\controllers\ClienteController;
use App\models\Facturas;
use App\models\Clientes;


$controller = new FacturaController();
$factura = new Facturas();

$factura->set('valorFactura', $_POST['valorFactura']);
$result = $controller->crear($factura);

if ($result) {
  
    $referencia = $factura->get('referencia');
    header("Location: Imprimirfactura.php?referencia=$referencia");
    exit();
} else {
    echo "No se pudo crear la factura";
}


?>

<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Crear y mostrar Factura</title>
</head>

<body>

    <div>
        <a href="menu.php">Menú</a> <br>
        <a href="Imprimirfactura.php">Imprimir Factura</a>
    </div>
</body>
</html>


