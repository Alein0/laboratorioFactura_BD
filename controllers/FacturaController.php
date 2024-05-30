<?php

namespace App\controllers;

use App\models\Facturas;

class FacturaController
{
    function read()
    {
        $dataBase = new DataBaseController();
        $sql = "SELECT * FROM facturas";
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
            $factura->set('descuento', $item['descuento']);
            $factura->set('valorFactura', $item['valorFactura']);
            array_push($facturas, $factura);
        }
        $dataBase->close();
        return $facturas;
    }

    function crear($factura)
    {
        date_default_timezone_set('America/Bogota');
        $fecha = date("Y-m-d H:i:s");
        $fecharef = date("ymd-Hi");
        $referencia = $fecharef . "-" . $factura->get('idCliente');
        $valorFactura = $factura->get('valorFactura');

        $sql = "INSERT INTO facturas (refencia, fecha, idCliente, descuento, valorFactura) VALUES (";
        $sql .= "'" . $referencia . "',";
        $sql .= "'" . $fecha . "',";
        $sql .= "'" . $factura->get('idCliente') . "',";
        $sql .= "'" . $factura->get('descuento') . "',";
        $sql .= "'" . $valorFactura . "')";

        $dataBase = new DataBaseController();
        $result = $dataBase->execSql($sql);
        $dataBase->close();
        return $result;
    }
}

