<?php session_start();?>    
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
    <?php include '../header.php';?>
</header>
    <div class="container agreprod">
        <br>
        <h2>Agregar producto</h2><br>
        <form action="agregarProdBase.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion del producto</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label"> Foto del producto</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio del producto</label>
                <input type="text" class="form-control" id="precio" name="precio">
            </div>
            <button type="submit" class="btn btn-primary">Agregar producto</button>
        </form>

    </div>
    

<footer>
    <?php include '../footer.php';?>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>