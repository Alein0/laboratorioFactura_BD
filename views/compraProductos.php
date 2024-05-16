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
    <title>Articulos</title>
</head>

<body>
    <h1>Lista de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($articulos as $item) {
                echo '<tr>';
                echo '  <td>' . $item->get('nombre') . '</td>';
                echo '  <td>' . $item->get('precio') . '</td>';
                echo '  <td>';
                echo '      <a href="views/formularioContacto.php?id='.$item->get('id').'">Modificar</a>';
                echo '  </td>';
                echo '  <td>';
                echo '      <a href="views/confirmarEliminacionContacto.php?id='.$item->get('id').'">Eliminar</a>';
                echo '  </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>