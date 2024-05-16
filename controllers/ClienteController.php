<?php

namespace App\controllers;

use App\models\Clientes;

class ClienteController
{
    function read()
    {
        $dataBase = new DataBaseController();
        $sql = "INSERT INTO clientes (nombreCompleto, tipoDocumento, numeroDocumento, email, telefono)
        VALUES ('$nombre', '$tipoDocumento', '$numDocumento', '$telefono', '$correo')";

        $result = $dataBase->execSql($sql);
        $clientes = [];
        if ($result->num_rows == 0) {
            return $articulos;
        }
        while ($item = $result->fetch_assoc()) {
            $cliente = new Articulos();
            $cliente->set('id', $item['id']);
            $cliente->set('nombreCompleto', $item['nombreCompleto']);
            $cliente->set('tipoDocumento', $item['tipoDocumento']);
            $cliente->set('numeroDocumento', $item['numeroDocumento']);
            $cliente->set('email', $item['email']);
            $cliente->set('telefono', $item['telefono']);
            array_push($clientes, $cliente);
        }
        $dataBase->close();
        return $clientes;
    }

    function guardar(){
        
    }
}