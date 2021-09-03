<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workots</title>
    <link rel="stylesheet" href="Css/global.css">
    <link rel="stylesheet" href="Css/inicio.css">
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
            <div class="cards explorar" id="explorar">
                <h1>EXPLORAR</h1>
            </div>
            <div class="cards entrenar">
                <h1>ENTRENAR</h1>
            </div>
            <div class="cards nueva_rutina">
                <h1>NUEVA RUTINA</h1>
            </div>
        </div>
    </div>
    <script src="app/Js/jquery.js"></script>
    <script src="app/Js/global.js"></script>
    <script>
    $("#explorar").click(function(){
        window.location = "explorar.php";
    });
    </script>
</body>
</html>