<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php include_once '../header.php';?>
    </header>
    <div class="agregar-prod">
        <input type="button" class="btn btn-primary" value="Agregar producto" onclick="location.href='agregarProd.php'">

    </div>
    <div class="container d-flex justify-content-center" style="margin-top: 5px;">
        <div>
            <h1>Productos disponibles: </h1>
            <h3>aca va a ir la lista de los productos </h3>
            <div class="card text-center" style="width: 18rem; margin: auto; margin-bottom: 10px;">
                <div class="card-body">
                    <h5 class="card-title">Nombre del producto</h5> 
                    <p class="card-text">Descripcion del producto</p>
                    <p class="card-text">Precio del producto</p>
                    <button class="btn btn-primary">dar de baja</button>
                </div>
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>