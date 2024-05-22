<?php
include '../models/Model.php';
require '../models/Articulos.php';
include '../controllers/DataBaseController.php';
require '../controllers/ProductoController.php';

use app\controllers\ProductoController;

$controlador = new ProductoController();
$producto = $controller->read();
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura Producto</title>
</head>
<body>

</body>
