<?php

namespace App\controllers;

use App\models\Usuario;

class UsuarioController
{
    function read($sqls)
    {
        $dataBase = new DataBaseController();
        $sql = $sqls;
        $result = $dataBase->execSql($sql);
        $usuarios = [];
        if ($result->num_rows == 0) {
            return $usuarios;
        }
        while ($item = $result->fetch_assoc()) {
            $usuario = new Usuario();
            $usuario->set('usuario', $item['usuario']);
            $usuario->set('pwd', $item['pwd']);
            array_push($usuarios, $usuario);
        }
        $dataBase->close();
        return $usuarios;
    }
}

