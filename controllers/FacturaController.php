<?php

namespace App\controllers;

use App\models\Facturas;

class FacturaController
{
    function read()
    {
        $dataBase = new DataBaseController();
        $sql = "select * from facturas";
        $result = $dataBase->execSql($sql);
        $facturas = [];
        if ($result->num_rows == 0) {
            return $facturas;
        }
        while ($item = $result->fetch_assoc()) {
            $factura = new Facturas();
            $factura->set('refencia', $item['refencia']);
            $factura->set('fecha', $item['fecha']);
            $factura->set('idCliente', $item['idCliente']);
            $factura->set('estado', $item['estado']);
            $factura->set('descuento', $item['descuento']);
            array_push($facturas, $factura);
        }
        $dataBase->close();
        return $facturas;
    }

    function crear($factura)
    {
        $fecha = date("Y-m-d H:i:s");
        $$fecharef = date("ymd-Hi");
        $estado = "Pagada";
        $referencia = $fecha . "-" . $factura->get('idCliente');

        $sql = "insert into facturas(refencia,fecha,idCliente,estado,descuento)values";
        $sql .= "(";
        $sql .= "'" . $referencia . "',";
        $sql .= "'" . $fecha . "',";
        $sql .= "'" . $factura->get('idCliente') . "',";
        $sql .= "'" . $estado . "',";
        $sql .= "'" . $factura->get('descuento') . "'";
        $sql .= ")";
        $dataBase = new DataBaseController();
        $result = $dataBase->execSql($sql);
        $dataBase->close();
        return $result;
    }

    function cambioestado($factura)
    {
        $sql = "UPDATE facturas SET ";
        $sql .= "estado='" . $factura->get('estado') . "' ";
        $sql .= "WHERE refencia=" . $factura->get('refencia');
        $dataBase = new DataBaseController();
        $result = $dataBase->execSql($sql);
        $dataBase->close();
        return $result;
    }
}
