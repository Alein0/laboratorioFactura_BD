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
        <h1>Menú   
            <?php echo $_SESSION['iniciarSesion'];?>
            <a href="cerrarSesion.php">Cerrar sesion</a>
        </h1>
    </header>
    <main>
        <section>
            <div class="container">
                <nav class="menu">
                    <ul>
                        <li><a href="datosCliente.php">Comprar</a></li>
                        <li><a href="tablaClientes.php">Clientes</a></li>
                        <li><a href="#">Facturas</a></li>
                        <li><a href="cerrarSesion.php">Cerrar sesión</a></li> 
                </nav>
            </div>
        </section>
    </main>
</body>
</html>
