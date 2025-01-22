<?php 
    
    if(!(isset($_SESSION['tipo']))){
        $cod = 0;
    }else{
        $cod = $_SESSION['tipo'];
    }
    
?>

    <div class="nav">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li class=" <?php if ($cod == 'dueno' )echo 'd-none'?>"><a href="carrito.php">Carrito</a></li>
            <li class = " <?php if($cod != "dueno")echo 'd-none';?>"><a href="dueno_Local/prods_general.php">Agregar producto</a></li>
            <li class=" <?php if($cod != 0)echo 'd-none';?>"><a href="Usuarios/Login.php">Login</a></li>
        </ul>
    </div>