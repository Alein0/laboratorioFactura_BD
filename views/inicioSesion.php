<?php
include '../models/Model.php';
include '../models/Usuario.php';
include '../controllers/DataBaseController.php';
include '../controllers/UsuarioController.php';

use App\controllers\UsuarioController;
use App\models\Usuario;

$controller = new UsuarioController();
$usuario = new Usuario();

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$sqls = "SELECT * FROM usuarios WHERE usuario='$usuario' AND pwd='$contraseña'";
$result = $controller->read($sqls);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>

<body>
    <h1><?php echo $result ? 'Inicio de sesión exitoso!' :
     'Usuario y/o contraseña incorrectos. Inténtalo de nuevo. <br><a href="../index.php">Volver</a>'; ?></h1>
</body>

</html>
