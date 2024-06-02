<?php
include '../models/Model.php';
include '../models/Clientes.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';
require '../models/Usuario.php';
require '../controllers/UsuarioController.php';

use app\controllers\UsuarioController;

$controller = new UsuarioController();
$controller->validarSesion();

use App\controllers\DataBaseController;

$dataBase = new DataBaseController();

$id = $_GET['id'];

$query = "SELECT * FROM clientes WHERE id = $id";
$result = $dataBase->execSql($query);
$record = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <title>Editar Cliente</title>
</head>
<body>
    <header>
        <h1>Editar Cliente
            <a href="cerrarSesion.php">Cerrar sesion</a>
        </h1>
    </header>
    <main>
        <section>
            <div class="container">
                <form action="guardarClienteEditado.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
                    <div>
                        <label>Nombre y apellidos: </label>
                        <input value="<?php echo $record['nombreCompleto']; ?>" class="formulario" type="text" name="nombre" placeholder="Ingrese su nombre completo" required>
                    </div>
                    <div>
                        <label>Tipo de documento: </label>
                        <select class="formulario" name="tipoDocumento" required>
                            <option value="CC" <?php echo $record['tipoDocumento'] == 'CC' ? 'selected' : ''; ?>>CC</option>
                            <option value="CE" <?php echo $record['tipoDocumento'] == 'CE' ? 'selected' : ''; ?>>CE</option>
                            <option value="NIT" <?php echo $record['tipoDocumento'] == 'NIT' ? 'selected' : ''; ?>>NIT</option>
                            <option value="TI" <?php echo $record['tipoDocumento'] == 'TI' ? 'selected' : ''; ?>>TI</option>
                            <option value="otro" <?php echo $record['tipoDocumento'] == 'otro' ? 'selected' : ''; ?>>Otro</option>
                        </select>
                    </div>
                    <div>
                        <label>Numero de documento: </label>
                        <input value="<?php echo $record['numeroDocumento']; ?>" class="formulario" type="text" name="numeroDocumento" placeholder="Ingrese su documento" required>
                    </div>
                    <div>
                        <label>Telefono: </label>
                        <input value="<?php echo $record['telefono']; ?>" class="formulario" type="text" name="telefono" placeholder="Ingrese su numero de telefono" required>
                    </div>
                    <div>
                        <label>Email: </label>
                        <input value="<?php echo $record['email']; ?>" class="formulario" type="email" name="email" placeholder="Ingrese su correo por favor" required>
                    </div>
                    <div>
                        <br>
                        <input class="enviar" type="submit" value="Guardar datos">
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
