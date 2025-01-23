<?php
include '../conexion/function.php';
$nombre = $_POST['nombre'];
$query = "SELECT * FROM marcas WHERE nombre = '$nombre'";
$resultado = consultaSQL($query);
if(mysqli_num_rows($resultado) > 0){
    header("Location: prods_general.php?error=1");
    exit();
}else{
    $query = "INSERT INTO marcas (nombre) VALUES ('$nombre')";
    $resultado = consultaSQL($query);
    header("location: prods_general.php?error=0");
}
