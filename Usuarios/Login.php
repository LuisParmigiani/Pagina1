<?php
    session_start();
    if(isset($_SESSION['email'])){
        header('Location: ../index.php');
    }
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == 1){
            echo "<script>alert('Usuario o contraseña incorrectos')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    <header>

    </header>
    <div class="container login-form" >
    <form action="existe-usuario.php" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <div class="input-group">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="*********" required>
                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                    <i class="bi bi-eye-slash" id="toggleIcon"></i>
                </button>
            </div>
            <script>// Para poder ver la contraseña en el input
                const togglePassword = document.querySelector('#togglePassword');
                const password = document.querySelector('#contrasena');
                const toggleIcon = document.querySelector('#toggleIcon');
                togglePassword.addEventListener('click', function (e) {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                toggleIcon.classList.toggle('bi-eye');
                toggleIcon.classList.toggle('bi-eye-slash');
                });
            </script>
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-primary col-3" name="enviar" >Iniciar sesión</button>
        </div>
    </form>
        <a href="Recuperar.php">Recuperar contraseña</a><br>
        <a href="Registrarse.php">Crear cuenta</a> 
    </div>
    </div>
    <footer>
        <?php
            include '../footer.php';
        ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>