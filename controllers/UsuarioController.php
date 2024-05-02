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
        while ($item = $result->fetch_assoc()) {
            $usuario = new Usuario();
            $usuario->set('usuario', $item['usuario']);
            $usuario->set('contraseña', $item['contraseña']);
            array_push($usuarios, $usuario);
        }
        $dataBase->close();
        return $usuarios;
    }
    function create($usuario)
    {
        $sql = "insert into usuarios(usuario,contraseña)values";
        $sql .= "(";
        $sql .= "'".$contacto->get('usuario')."',";
        $sql .= "'".$contacto->get('contraseña')."'";
        $sql .= ")";
        $dataBase = new DataBaseController();
        $result = $dataBase->execSql($sql);
        $dataBase->close();
        return $result;
    }
}

