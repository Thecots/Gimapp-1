<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workots</title>
    <link rel="stylesheet" href="Css/global.css">
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

        /*$sql = "SELECT * FROM tb_musculos INNER JOIN tb_musculos_img on tb_musculos.id_musculo = tb_musculos_img.id_musculo WHERE tb_musculos.id_musculo = '".$musculo."';";
        $result=mysqli_query($dblink, $sql) or exit (mysqli_error($dblink));
        $res=mysqli_fetch_array($result);*/
    ?>
    <div class="body">
        <div class="template">
          <div class="template_header">
            <h1>Rutinas</h1>
            <a href="explorar.php"><img src="img/back.png" alt="" id="back"></a>
          </div>
         
        </div>
    </div>
    <script src="app/Js/jquery.js"></script>
    <script src="app/Js/global.js"></script>
</body>
</html>