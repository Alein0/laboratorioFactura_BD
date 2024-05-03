<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion para generar piedra</title>
</head>
<body>
    <form action="views/inicioSesion.php" method="post">
     <div>
            <label>Usuario: </label>
            <input type="text" name="usuario" required>
        </div>
        <div>
            <label>Contraseña: </label>
            <input type="pwd" name="contraseña" required>
        </div>
        <div>
        <input type="submit" value="Iniciar sesión">
        </div>
        </form>  
        
    <table>
        <thead>
            <tr>
               <th>Usuario</th>
               <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php
         //   foreach ($contactos as $item) {
         //       echo '<tr>';
         //       echo '  <td>' . $item->get('usuario') . '</td>';
         //       echo '  <td>' . $item->get('contraseña') . '</td>';
         //       echo '</tr>';
         //   }
            ?>
        </tbody>
        </table>
       
    </body>
</html>
