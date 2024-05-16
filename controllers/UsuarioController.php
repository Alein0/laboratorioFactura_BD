<?php
namespace app\controllers;

use app\models\Usuario;

class UsuarioController {
   
    function validarUsuario($usuariose) {
        $dataBase = new DataBaseController();
        $sqls = "SELECT * FROM usuarios WHERE usuario='".$usuariose->getUsuario()."' AND pwd='".$usuariose->getPwd()."'";
        $result = $dataBase->execSql($sqls);
            $usuarios = [];
            if ($result->num_rows == 0) {
                return $usuarios;
            }
                while ($item = $result->fetch_assoc()) {
                    $usuario = new Usuario();
                    $usuario->setUsuario('usuario', $item['usuario']);
                    $usuario->setPwd('pwd', $item['pwd']);
            array_push($usuarios, $usuario);
        }        
        $dataBase->close();
        return $usuarios;
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
