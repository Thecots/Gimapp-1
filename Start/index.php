<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workots</title>
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <?php
      session_start();
      if(isset($_SESSION['id'])){
          header('Location: ../index.php');
      }
    ?>
    <header>
        <a href="../Session/login/index.php">Iniciar sesión</a>
        <a href="../Session/register/index.php">Regístrate</a>
    </header>
    <div class="body">
      <div class="box">                    
        <a class="aplicacion">APLICACIÓN WEB</a>
        <a class="workots">WORKOTS</a>
        <div class="nombre">
            <span class="linea"></span>
            <span class="david">David Cots</span>
            <span class="linea"></span>
        </div>
      </div>
    </div>
</body>
</html>
