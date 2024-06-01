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

$facturaController = new FacturaController(); 
$facturas = $facturaController->read();

$clienteController = new ClienteController(); 
$clientes = $clienteController->read(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturas Guardadas</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <header>
        <h1>Facturas Guardadas</h1>   
    </header>
    <main>
        <section>
            <div class="container">
                <?php if (count($facturas) > 0): ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Número de Documento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
            <?php if (!empty($clientes)) : ?>
                <?php foreach ($clientes as $item) : ?>
                    <tr>
                        <td><?php echo $item->get('nombreCompleto'); ?></td>
                        <td><?php echo $item->get('numeroDocumento'); ?></td>
                        <td>
              <form action="Imprimirfactura.php" method="get">
            <input type="hidden" name="referencia" value="<?php echo $item->get('id'); ?>">
            <input type="submit" value="Ver factura">
                </form>
           </td>

                    </tr>     
                <?php endforeach; ?>  
            <?php else : ?>
                <tr>
                    <td >No hay clientes guardados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
                <?php else: ?>
                    <p>No se encontraron facturas guardadas.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
</body>
</html>
