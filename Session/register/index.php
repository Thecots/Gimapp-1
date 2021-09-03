<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workots</title>
    <link rel="icon" href="../../img/logo.png">
    <link rel="stylesheet" href="../../Css/session.css">
    <link rel="stylesheet" href="../../Start/Css/style.css">
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['id'])){ 
        header('Location: ../../index.php');
    }
    
?>
    <header>
        <a href="../login/index.php">Iniciar sesión</a>
        <a href="../../Start/index.php">Volver</a>
    </header>
    <div class="body">
        <div class="box_session">
            <div class="circle">
                <img src="../../img/register.png" alt="" class="user__login">
            </div>
            <div class="inputs">
                <div class="field">
                    <input type="text" name="username" id="username" autocomplete="off" placeholder="Nombre de usuario">
                    <label for="username">Nombre de usuario</label>
                </div>
                <div class="field">
                    <input type="password" name="passwd1" id="passwd1" autocomplete="off" placeholder="Contraseña">
                    <label for="passwd1">Contraseña</label>
                </div>
                <div class="field">
                    <input type="password" name="passwd2" id="passwd2" autocomplete="off" placeholder="Confirmar contraseña">
                    <label for="passwd2">Confirmar contraseña</label>
                </div>
                <p class="error1">Campos vacíos</p>
                <p class="error2">Las contraseñas no coinciden</p>
                <p class="error3">Usuario ya registrado</p>
                
                <button class="btn__1" id="registrar">Regístrarme en Workots</button>
            </div>
            </div>
        </div>
    </div>
    <script src="../../app/Js/jquery.js"></script>
    <script src="../app/js/register.js"></script>
</body>
</html>