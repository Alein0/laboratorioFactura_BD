<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Aplicacion para generar facturas</title>
</head>
<body>
    <header>
        <h1>Generar Factura</h1>   
    </header>
    <main>
    <section>
    <div class="container">
    <form action="views/verificarCliente.php" method="post">
        <div>
            <label>Nombre y apellidos: </label>
            <input class="formulario" type="text" name="nombre" placeholder="Ingrese su nombre completo" required>
        </div>
        <div>
            <label>Tipo de documento: </label>
            <select class="formulario" name="tipoDocumento" required>
                <option value="">Seleccione su tipo de documento</option>
                <option value="Tarjeta de Identidad">TI</option>
                <option value="Cédula">CC</option>
            </select>
        </div>
        <div>
            <label>Numero de documento: </label>
            <input class="formulario" type="text" name="numDocumento" placeholder="Ingrese su documento" required>
        </div>
       
        <div>
            <label>Telefono: </label>
            <input class="formulario" type="text" name="telefono" placeholder="Ingrese su numero de telefono" required>
        </div>
        <div>
            <label>Email: </label>
            <input class="formulario" type="email" name="correo" placeholder="Ingrese su correo por favor" required>
        </div>
        <div>
            <br>
            <input class="enviar" type="submit" value="Generar Factura">
        </div>
    </form>
    </div>
    </section>
    </main>
</body>
</html>
