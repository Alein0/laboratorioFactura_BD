<?php
include '../models/Model.php';
include '../models/Facturas.php';
include '../controllers/DataBaseController.php';
include '../controllers/FacturaController.php';
include '../models/Articulos.php';
include '../controllers/ProductoController.php';

use App\controllers\ProductoController;
$ProductoController = new ProductoController();
$articulos = $ProductoController->read();

use App\controllers\FacturaController;
$FacturaController = new FacturaController();
$factura = $FacturaController->read();


?>

<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Aplicacion para generar facturas</title>
</head>

<body>
    
</body>
</html>

