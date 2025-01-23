<?php session_start(); 
include '../conexion/function.php' ;?>
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
    <div class="agregar-prod m-1 mb-0 my-0">
        <input type="button" class="btn btn-primary w-100 my-3" value="Agregar producto" onclick="location.href='agregarProd.php'">
    </div>
    <div class="agregar-marca m-1">
                <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary w-100 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar marca </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="agregarmar.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Marca: </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de la marca</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Agregar marca</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center" style="margin-top: 5px;">
        <?php
            $quey = "SELECT * FROM productos";
            $resultado = consultaSQL($quey);
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
                    <div class="card text-center" style="width: 18rem; margin: auto; margin-bottom: 10px;">
                        <img src="<?php echo $foto; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nombre: <?php echo $nombre; ?></h5>
                            <p class="card-text">Descripcion: <?php echo $descripcion; ?></p>
                            <p class="card-text">Precio:<?php echo $precio; ?></p>
                            <p class="card-text">Marca:<?php echo $marca; ?></p>
                            <p class="card-text">Categotia:<?php echo $categoria; ?></p>
                            <p class="card-text">Id: <?php echo $id; ?></p>
                            <p class="card-text">En el futuro una tabla del stock</p> 
                            <button class="btn btn-primary">Ver detalles</button>
                            <button class="btn btn-primary">Editar</button>
                            <button class="btn btn-primary">Eliminar</button>
                        </div>
                    </div>
                    <?php
                }
            }

        ?>
        
    </div>
    <footer>
        <?php include_once '../footer.php';   ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>