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
        <a href="../register/index.php">Regístrate</a>
        <a href="../../Start/index.php">Volver</a>
    </header>
    <div class="body">
        <div class="box_session">
            <div class="circle">
                <img src="../../img/login.png" alt="" class="user__login">
            </div>
            <div class="inputs">
                <div class="field">
                    <input type="text" name="username" id="username" autocomplete="off" value="root" placeholder="Nombre de usuario">
                    <label for="username">Nombre de usuario</label>
                </div>
                <div class="field">
                    <input type="password" name="passwd" id="passwd" autocomplete="off" value="root" placeholder="Contraseña">
                    <label for="passwd">Contraseña</label>
                </div>
                <p class="error1">Campos vacíos</p>
                <p class="error2">Nombre de usuario o contraseña incorrectos</p>
                <?php
                    if(isset($_REQUEST['e'])){ ?>
                        <p class='loggeding'>Cuenta creada correctamente</p>
                    <?php
                    }
                ?>
                <button class="btn__1" id="iniciar_Session">Iniciar sessión</button>
            </div>
            </div>
        </div>
    </div>
    <script src="../../app/Js/jquery.js"></script>
    <script src="../app/js/login.js"></script>
</body>
</html>