<?php
include '../models/Model.php';
include '../models/Clientes.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';
require '../models/Usuario.php';
require '../controllers/UsuarioController.php';

use App\controllers\UsuarioController;
use App\controllers\ClienteController;


$usuarioController = new UsuarioController();
$usuarioController->validarSesion();


$clienteController = new ClienteController();
$clientes = $clienteController->read(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <title>Aplicacion para generar facturas</title>
</head>
<body>
    <header>
        <h1>Valor factura - Usuario: <?php echo $_SESSION['iniciarSesion']; ?></h1>
    </header>
    <main>
        <section>
            <div class="container">
                <form action="crearFactura.php" method="post">
                    <div>
                        <label>Valor Factura: </label>
                        <input class="formulario" type="text" name="valorFactura" placeholder="Ingrese el valor total de la factura" required>
                    </div>
                    <input type="submit" value="Guardar valor">
                </form>
                <br>
                <a href="cerrarSesion.php">Cerrar sesión</a>
            </div>
        </section>
    </main>
</body>
</html>
