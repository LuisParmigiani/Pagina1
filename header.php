<?php 
    
    if(!(isset($_SESSION['tipo']))){
        $cod = 0;
    }else{
        $cod = $_SESSION['tipo'];
    }
    
?>
<style>
    .nav a{
        text-decoration: none;
        color: white;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bold;
    }
</style>
    <div class="nav row" >
            <div class="col-2 padding-left: 20px;"> <a href="http://localhost/pagina1/index.php"><img  style="width: 110px ; height: auto" src="Fotos_Logo/p+p_foto.png" href="http://localhost/pagina1/index.php" alt="Logo"></a></div>
            <div class="col-7 d-flex justify-content-center"> 
                <ul>
                    <li><a href="http://localhost/pagina1/nosotros.php">Nosotros</a></li>
                    <li><a href="http://localhost/pagina1/servicios.php">Servicios</a></li>
                    <li><a href="http://localhost/pagina1/contacto.php">Contacto</a></li>  
                    <li class = " <?php if($cod != "dueno")echo 'd-none';?>"><a href="http://localhost/pagina1/dueno_Local/prods_general.php">Agregar producto</a></li>
                </ul>    
            </div>
            <div class="col-3">
                <ul>
                    <li class=" <?php if ($cod == 'dueno' )echo 'd-none'?>"><a href="carrito.php">Carrito</a></li>
                    <li class=" <?php if($cod != 0)echo 'd-none';?>"><a href="http://localhost/pagina1/ Usuarios/Login.php">Login</a></li>
                    <li class=" <?php if($cod == 0)echo 'd-none';?>"><a href="http://localhost/pagina1/ Usuarios/perfil.php">perfil</a></li>
                </ul>
            </div>
        
    </div>