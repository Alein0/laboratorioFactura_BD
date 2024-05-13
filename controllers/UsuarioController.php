<?php
namespace app\controllers;

use app\models\Usuario;

class UsuarioController {
    function validarUsuario($usuario) {
        return $usuario->getUsuario() == 'admin' && $usuario->getPwd() == '12345';
    }
    
    function validarSesion() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (empty($_SESSION['iniciarSesion'])) {
            header('Location: ../index.php');
            exit();
        }
    }
}
?>
