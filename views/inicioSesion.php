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

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Inicio de sesión exitoso!";
} else {
    echo "Usuario y/o contraseña incorrectos. Inténtalo de nuevo.";
}

?> 