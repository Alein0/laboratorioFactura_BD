<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Aplicacion para generar facturas</title>
</head>
<body>
    <form action="views/inicioSesion.php" method="post">
    <header>
        <h1>Generador de facturas</h1>   
    </header>
    <main>
    <section>
    <div class="container">
     <div>
     <div >
        <img src="img/inicio.png" class="imgsesion">
        </div>
            <label>Usuario: </label>
            <input class="formulario" type="text" name="usuario" placeholder="Ingrese su usuario por favor" required>
        </div>
        <div>
            <label>Contraseña: </label>
           
            <input class="formulario" type="passwordd" name="contraseña" placeholder="Ingrese su contraseña por favor" required>
        </div>
        <div> <br>
        <input class="enviar" type="submit" value="Iniciar sesión">
        </div>
       
        </form>  
        
 
        </main>
         </section>
</div>
    </body>
</html>

