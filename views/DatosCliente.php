<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <title>Aplicación para generar facturas</title>
</head>
<body>
    <header>
        <h1>Registro de Cliente</h1>
    </header>
    <main>
    <section>
    <div class="container">
    <form action="verificarCliente.php" method="post">
        <div>
            <label>Nombre Completo: </label>
            <input class="formulario" type="text" name="nombre" placeholder="Ingrese su nombre completo" required>
        </div>
        <div>
            <label>Tipo de Documento: </label>
            <select class="formulario" name="tipoDocumento" required>
                <option value="">Seleccione su tipo de documento</option>
                <option value="CC">CC</option>
                <option value="CE">CE</option>
                <option value="NIT">NIT</option>
                <option value="TI">TI</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div>
            <label>Número de Documento: </label>
            <input class="formulario" type="text" name="numeroDocumento" placeholder="Ingrese su documento" required>
        </div>
        <div>
            <label>Teléfono: </label>
            <input class="formulario" type="text" name="telefono" placeholder="Ingrese su número de teléfono" required>
        </div>
        <div>
            <label>Email: </label>
            <input class="formulario" type="email" name="email" placeholder="Ingrese su correo por favor" required>
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

