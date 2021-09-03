<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workots</title>
    <link rel="stylesheet" href="Css/global.css">
    <link rel="stylesheet" href="Css/explorar.css">
    <link rel="stylesheet" href="Css/global_explorar.css">
    <link rel="icon" href="img/logo.png">
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['id'])){
            header('Location: Start/index.php');
        }
        include('DataBase/db.php');

        include('Templates/header.php');
        include('Templates/menu.php');
    ?>
    <div class="body">
        <div class="template">
          <div class="template_header">
            <h1>Explorar</h1>
            <img src="img/back.png" alt="" id="back">
          </div>
        <div class="t__box t__rutinas" onclick="window.location = 'rutinas.php';">
            <h1>Rutinas</h1>
        </div>
        <div class="t__box t__ejercicios" onclick="window.location = 'ejercicios.php';">
                <h1>Ejercicios</h1>
        </div>
        <div class="t__box t__musculos" onclick="window.location = 'musculos.php';">
            <h1>Músculos</h1>
        </div>
        <div class="t__box t__material" onclick="window.location = 'material.php';">
            <h1>Material</h1>
        </div>
        </div>
    </div>
    <script src="app/Js/jquery.js"></script>
    <script src="app/Js/global.js"></script>
    <script>
    $("#back").click(function(){
        window.location = "index.php";
    });
    </script>
</body>
</html>