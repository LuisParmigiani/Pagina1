<?php 
    session_start();
    //session_unset();
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php
            include 'header.php';   
        ?>
    </header>
    <div class="novedades" >
        <?php
            include 'novedades.php';
        ?>
    </div>
    <div class="container-fluid pro-mas-pop">
        <h2>Productos destacados</h2>
        <div class="productos-destacados">
            <div class="producto">
                <h3>Nombre del producto1</h3>
                <img src="Fotos_productos/p+p_foto.png" alt="producto1">
                <p>Descripcion del producto1</p>
                <p>Precio del producto1</p>
                <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    
    <footer>
        <?php
            include 'footer.php';   
        ?>
    </footer>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>