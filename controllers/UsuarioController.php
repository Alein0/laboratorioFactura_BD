<?php

namespace App\controllers;

use App\models\Usuario;

class UsuarioController
{
    function read()
    {
        $dataBase = new DataBaseController();
        $sql = "select * from usuarios";
        $result = $dataBase->execSql($sql);
        $usuarios = [];
        if ($result->num_rows == 0) {
            return $usuarios;
        }
    }
}