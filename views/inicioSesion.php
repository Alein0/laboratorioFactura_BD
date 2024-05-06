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

if ($result) {
    echo '<h2>Inicio de sesión exitoso!</h2>';
} else {
    echo '<h2 id="mensaje-error">Usuario y/o contraseña incorrectos. Inténtalo de nuevo.</h2>';
}
?>
