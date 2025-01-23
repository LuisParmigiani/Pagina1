<?php 
include '../conexion/function.php';
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$foto = $_FILES['foto'];
$marca = $_POST['marca'];   
$categoria = $_POST['categoria'];
$ruta = "../Fotos_productos/".$foto['name'];
$query = "SELECT * FROM productos WHERE nombre = '$nombre' OR descripcion = '$descripcion' ";
$resultado = consultaSQL( $query);
if(mysqli_num_rows($resultado) > 0){
    header("Location: ../dueno_local/agregarProd.php?error=1");
    exit();
}
$query = "INSERT INTO productos (nombre, descripcion, precio, foto, marca, categoria) VALUES ('$nombre', '$descripcion', '$precio', '$ruta', '$marca', '$categoria')";
$resultado = consultaSQL( $query);
if($resultado){
    move_uploaded_file($foto['tmp_name'], $ruta);
    header("Location: ../dueno_local/agregarProdtalle.php?nombre=$nombre");
}else{
    header("Location: ../dueno_local/agregarProd.php?error=2");
}