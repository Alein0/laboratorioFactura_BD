<?php

namespace App\controllers;

use App\models\Articulos;

class ProductoController
{
    function read()
    {
        $dataBase = new DataBaseController();
        $sql = "select * from articulos";
        $result = $dataBase->execSql($sql);
        $articulos = [];
        if ($result->num_rows == 0) {
            return $articulos;
        }
        while ($item = $result->fetch_assoc()) {
            $articulo = new Articulos();
            $articulo->set('id', $item['id']);
            $articulo->set('nombre', $item['nombre']);
            $articulo->set('precio', $item['precio']);
            array_push($articulos, $articulo);
        }
        $dataBase->close();
        return $articulos;
    }
}