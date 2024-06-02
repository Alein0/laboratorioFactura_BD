<?php
require '../models/Usuario.php';
require '../controllers/UsuarioController.php';

use app\controllers\UsuarioController;

$controller = new UsuarioController();
$controller->validarSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="../CSS/Menu.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Menú</h1>
            <a href="cerrarSesion.php" class="btn">Cerrar sesión</a>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <nav class="menu">
                    <ul>
                        <li><a href="datosCliente.php">Comprar</a></li>
                        <li><a href="tablaClientes.php">Clientes</a></li>
                        <li><a href="buscarFacturas.php">Facturas</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>
</body>
</html>
