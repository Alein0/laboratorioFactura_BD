<?php
session_start();
require '../models/Usuario.php';
require '../controllers/UsuarioController.php';

use app\controllers\UsuarioController;

$controller = new UsuarioController();
$controller->validarSesion();
if (isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] === true) {
    header('Location: ../menu.php');
    exit();
}
?>
