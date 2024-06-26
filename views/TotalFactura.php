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
    <link rel="stylesheet" href="../CSS/ValorFactura.css">
    <title>Aplicacion para generar facturas</title>
</head>
<body>
    <header>
        <h1>Valor factura
            <a href="cerrarSesion.php" class="btn">Cerrar sesion</a>
        </h1>
    </header>
    <main>
        <section>
            <div class="container">
                <form action="crearFactura.php" method="post">
                    <div>
                        <label>Valor Factura: </label>
                        <input class="formulario" type="number" name="valorFactura" min=100 placeholder="Ingrese el valor total de la factura" required>
                    </div>   
                    <div>
                        <br>
                        <input class="enviar" type="submit" value="Guardar valor">
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>


