<?php
include '../models/Model.php';
include '../models/Facturas.php';
include '../controllers/DataBaseController.php';
include '../controllers/FacturaController.php';

use App\controllers\FacturaController;
use App\models\Facturas;
$controller = new FacturaController();
$factura = new Facturas();

$factura->set('refencia', $_POST['refencia']);
$factura->set('estado', $_POST['estado']);

$result = $controller->cambioestado($factura);

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
    <h1><?php echo $result ? 'Estado de la factura cambiado' : 'No se pudo cambiar el estado de la factura'; ?></h1>
    <br>
    <a href="menu.php">menu</a>
</body>
</html>