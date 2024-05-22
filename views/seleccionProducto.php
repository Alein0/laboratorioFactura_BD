<?php
include '../models/Model.php';
include '../models/Articulos.php';
include '../controllers/DataBaseController.php';
include '../controllers/ProductoController.php';

use App\controllers\ProductoController;

$controller = new ProductoController();
$articulos = $controller->read();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/productos.css">
    <title>Articulos</title>
</head>

<body>
    <h1>Lista de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>precio</th>
                <th>Seleccionar</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
        <form action="crearFactura.php" method="post">
            <?php
                foreach ($articulos as $item) {
                    echo '<tr>';
                    echo '  <td>' . $item->get('nombre') . '</td>';
                    echo '  <td>' . $item->get('precio') . '</td>';
                    echo '  <td>';
                    ?>
                    <input type="checkbox" name="seleccion" value="<?php $item->get('id')?>">
                    <?php
                    echo '  </td>';
                    echo '  <td>';
                    ?>
                    <input type="number" name="cantidad" id="<?php $item->get('id')?>" min="1">
                    <?php
                    echo '  </td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
            <input class="enviar" type="submit" value="Comprar">
        </form>
</body>
</html>