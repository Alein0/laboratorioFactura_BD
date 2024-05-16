<?php
include '../models/Model.php';
include '../models/Clientes.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';

use App\controllers\ClienteController;

$controller = new ClienteController();

//este archivo va a ser para verificar si ya estan registrados los clientes
//si está, que siga con lo siguiente que será generar la factura (que lo deje generar xd)
//si no está, que diga un mensage (no esta registrado) y tenga un boton 
//de volver que lo devuleva al generar factura y otro
//que diga registrar y mande esos datos del cliente a otro que haga que los registre
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos Cliente</title>
</head>
<body>
  
</body>
</html>
