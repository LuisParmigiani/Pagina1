<?php
include '../conexion/function.php';
$nombre = $_POST['nombre'];
$query = "SELECT * FROM productos WHERE nombre = '$nombre'";
$resultado = consultaSQL($query);
if(mysqli_num_rows($resultado) > 0){
    while($fila = mysqli_fetch_array($resultado)){
        $id_prod = $fila['id_prod'];
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>

</header>
    <form method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="id_prod" class="form-label">ID del producto</label>
            <input type="text" class="form-control" id="id_prod" name="id_prod" value="<?php echo $id_prod; ?>" readonly>
        </div>
        <div class="mb-3">
            <?php
            $query = "SELECT * FROM talles";
            $resultado = consultaSQL($query);
            if(mysqli_num_rows($resultado) > 0){
                while($fila = mysqli_fetch_array($resultado)){
                    $id_talle = $fila['id_talle'];
                    $talle = $fila['talle'];
                    ?>
                    <div class="mb-3">
                        <label for="talle" class="form-label">Talle: <?php echo $talle; ?> </label>
                        <input type="number" class="form-control" id="talle" name="talle" value="0" >
                    </div><?php
                }
            }

            ?>
        </div>
        <button type="submit" class="btn btn-primary">Agregar producto</button>
    </form>
<footer>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>