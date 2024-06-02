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
    <link rel="stylesheet" href="../CSS/Clientes.css">
    <title>Buscar Facturas</title>
</head>
<body>
<header>
    <div class="header-container">
        <h1> Buscar facturas</h1>
        <a href="cerrarSesion.php" class="btn">Cerrar sesión</a>
    </div>
</header>
    <div class="container">
    <form action="facturas.php" method="post">
        <div>
            <label>Numero de Documento: </label>
            <input class="formulario" type="text" name="numeroDocumento" placeholder="Ingrese su numero de Documento" required>
        </div>   
        <div>
            <br>
            <input class="enviar" type="submit" value="Buscar Facturas">
        </div>
    </form>
    </body>
</html>
