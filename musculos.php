<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workots</title>
    <link rel="stylesheet" href="Css/global.css">
    <link rel="stylesheet" href="Css/global_explorar.css">
    <link rel="stylesheet" href="Css/musculos.css">
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
            <h1>Músculos</h1>
            <a href="explorar.php"><img src="img/back.png" alt="" id="back"></a>
          </div>
          <!-- Tren superior -->
          <div class="tren" id="sup">
                <div class="tren_top" id="tren_superior">
                        <div>
                            <img class="m__img_top" src="img/musculos/tren_superior.png" alt=""> <h1>Tren superior</h1>
                        </div>
                        <img class="m__down" src="img/down.png" alt="">
                </div>
                <div class="tren-bottom">
                    <?php
                         $sql = "SELECT * FROM tb_musculos INNER JOIN tb_musculos_img on tb_musculos.id_musculo = tb_musculos_img.id_musculo WHERE tren = 0;";
                         $result=mysqli_query($dblink, $sql) or exit (mysqli_error($dblink));
                         while($res=mysqli_fetch_array($result)){ ?>
                                <a href="musculos-info.php?musculo=<?php echo $res["id_musculo"]?>">
                                    <div class="tren_div">
                                        <div class="m__img_bottom">
                                            <img src="<?php echo $res['musculo_img'];?>" alt=""><p><?php echo $res['musculo']; ?></p>
                                        </div>
                                        <img class="m__info" src="img/info.png" alt="">
                                    </div>
                                </a>
                            <?php
                         }
                    ?>
                </div>
          </div>
            <!-- Tren superior -->
        <div class="tren" id="inf">
            <div class="tren_top" id="tren_inferior">
                <div>
                    <img class="m__img_top" src="img/musculos/tren_inferior.png" alt=""> <h1>Tren inferior</h1>
                </div>
                <img class="m__down" src="img/down.png" alt="">
            </div>
            <div class="tren-bottom">
            <?php
                $sql = "SELECT * FROM tb_musculos INNER JOIN tb_musculos_img on tb_musculos.id_musculo = tb_musculos_img.id_musculo WHERE tren = 1;";
                $result=mysqli_query($dblink, $sql) or exit (mysqli_error($dblink));
                while($res=mysqli_fetch_array($result)){ ?>
                    <a href="musculos-info.php?musculo=<?php echo $res["id_musculo"]?>">
                        <div class="tren_div">
                            <div class="m__img_bottom">
                                <img src="<?php echo $res['musculo_img'];?>" alt=""><p><?php echo $res['musculo']; ?></p>
                            </div>
                            <img class="m__info" src="img/info.png" alt="">
                        </div>
                    </a>
                <?php
                }
            ?>
        </div>
    </div>
    </div>
    <script src="app/Js/jquery.js"></script>
    <script src="app/Js/global.js"></script>
    <script>
    var superior = 0;
    var inferior = 0;

    $("#sup #tren_superior").click(function(){
       if(superior == 0){
        $("#sup .tren-bottom").css("display","flex");
        $("#sup .m__down").css("transform","rotate(180deg)");

        superior++;
       }else{
        $("#sup .tren-bottom").css("display","none");
        $("#sup .m__down").css("transform","rotate(0deg)");
        superior--;
       }
    });  

    $("#inf #tren_inferior").click(function(){
       if(inferior == 0){
        $("#inf .tren-bottom").css("display","flex");
        $("#inf .m__down").css("transform","rotate(180deg)");

        inferior++;
       }else{
        $("#inf .tren-bottom").css("display","none");
        $("#inf .m__down").css("transform","rotate(0deg)");
        inferior--;
       }
    });  


    id="tren_inferior"
    </script>
</body>
</html>