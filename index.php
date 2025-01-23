<?php 
    include 'conexion/function.php';    
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
    <div class="container-fluid pro-mas-pop text-center">
        <h2>Productos destacados: </h2>
        <?php
            $query = "SELECT * FROM productos";
            $resultado = consultaSQL($query);
            if(mysqli_num_rows($resultado) > 0){
                while($fila = mysqli_fetch_array($resultado)){
                    $id = $fila['id'];
                    $nombre = $fila['Nombre'];
                    $descripcion = $fila['Descripcion'];
                    $precio = $fila['Precio'];
                    $foto = $fila['Foto'];
                    $marca = $fila['Marca'];
                    $categoria = $fila['Categoria'];
                    $foto = "FOTO a futuro";
                    ?>
                    <div class="card m-2 d-inline-block" style="width: 18rem;">
                        <img src="<?php echo $foto; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $nombre; ?></h5>
                            <p class="card-text"><?php echo $precio; ?></p>
                            <a href="" class="btn btn-primary">agregar al carrito</a>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
    
    <footer>
        <?php
            include 'footer.php';   
        ?>
    </footer>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>