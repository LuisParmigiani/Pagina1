<?php
session_start();

include_once '../conexion/function.php';
$query = "SELECT * FROM usuarios WHERE Mail = '".$_POST['email']."' AND Contrasena = '".$_POST['contrasena']."'";
$resultado = consultaSQL($query);
if(mysqli_num_rows($resultado) > 0){
    $_SESSION['email'] = $_POST['email'];
    while($fila = mysqli_fetch_array($resultado)){
        $_SESSION['nombre'] = $fila['Nombre'];
        $_SESSION['apellido'] = $fila['Apellido'];
        $_SESSION['dni'] = $fila['DNI'];
        $_SESSION['tipo'] = $fila['Tipo'];	

    }
    

    header('Location: ../index.php');
    exit();
}else{
    header('Location: Login.php?error=1');  
    exit();
};
