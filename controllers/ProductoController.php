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
/*
    if ($conn->query($sql) === TRUE) {
        echo "El cliente ha sido guardado exitosamente.";
        echo '<br>';
        echo '<a href="../menu.php">Volver</a>';
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
*/
}