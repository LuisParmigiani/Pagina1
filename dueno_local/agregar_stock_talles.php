<?php
include '../conexion/function.php';
    $nombre = $_POST['nombre'];
    $id_prod = $_POST['id_prod'];
    $query = "SELECT * FROM talles";
    $resultado = consultaSQL($query);
    if(mysqli_num_rows($resultado) > 0){
        while($fila = mysqli_fetch_array($resultado)){
            $id_talle = $fila['id_prenda'];
            $talle = $fila['Nombre']; 
            $cantidad = $_POST[$fila['Nombre']]; 
            $query1 = "INSERT INTO stock (id_prenda, id_talle, cantidad,talle) VALUES ('$id_prod', '$id_talle', '$cantidad','$talle')";
            $resultado1 = consultaSQL($query1);
        }
    }
    header("Location: prods_general.php");
    exit();
?>