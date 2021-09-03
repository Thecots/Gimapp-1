<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workots</title>
    <link rel="stylesheet" href="Css/global.css">
    <link rel="stylesheet" href="Css/global_explorar.css">
    <link rel="stylesheet" href="Css/ejercicios.css">
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

        $sql = "SELECT * FROM tb_musculos INNER JOIN tb_musculos_img on tb_musculos.id_musculo = tb_musculos_img.id_musculo ORDER BY tren;";
        $result=mysqli_query($dblink, $sql) or exit (mysqli_error($dblink));
        $res=mysqli_fetch_array($result);
    ?>
    <div class="body">
        <div class="template">
            <div class="template_header">
                <h1>Ejercicios</h1>
                <a href="explorar.php"><img src="img/back.png" alt="" id="back"></a>
            </div>
            <div class="e__global_blox">
                <div class="e__options">
                    <div class="e__box">
                       <div class="">
                        <div class="e__div">
                                <h1>Filtros</h1>
                        </div>
                            <div class="e__div">
                                <p>Palabra clave:</p>
                                <input type="text" class="e__input" id="keyword">
                            </div>
                            <div class="e__div">
                                <p>Musculos:</p>
                                <div class="___select"></div>
                                <div class="___options">
                                    <?php
                                        $n = 0;
                                        while($res=mysqli_fetch_array($result)){ $n++?>
                                            <input id="a<?php echo $n ;?>" readonly onclick="add('a<?php echo $n ;?>')" value="<?php echo $res['musculo'];?>"></input>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                       </div>
                        <div class="e__div">
                            <button id="___search">Buscar</button>
                        </div>
                    </div>
                </div>
                <div class="e__content">
                </div>
            </div>
        </div>
    </div>
    <script src="app/Js/jquery.js"></script>
    <script src="app/Js/global.js"></script>
    <script>
    var select = 0;
    $(".___select").click(function(){
    if(select == 0){
        $(".___options").css("display","flex");
        select++;
    }else{
        $(".___options").css("display","none");
        select--;
    }
    });

    var array = [];

    function add(a){      
        array[array.length] = $("#"+a).val();
        $("#"+a).attr("onclick","remove('"+a+"')");
        $( ".___select" ).append("<a id='"+(a+"e")+"'>"+$("#"+a).val()+"<span onclick='removeTotal(`"+(a+"e")+"`)'><img class='___exit_img' src='img/close.png'></img></span>");
        $( "#"+a ).addClass( "___active" );

    }

    function remove(a){
        r = $("#"+a).val();
        for(var i = 0; i < array.length; i++){
            if(array[i] == r){
                delete array[i];
                break;
            }
        }
        
        $("#"+a).attr("onclick","add('"+a+"')");
        $("#"+(a+"e")).remove();
        array = array.filter(el => {return el != null})
        $( "#"+a ).removeClass( "___active" );
    }

    function removeTotal(a){
        var x = a.replace('e','');
        $("#"+a).remove();
        remove(x);

        if(select == 0){
        $(".___options").css("display","flex");
        select++;
        }else{
            $(".___options").css("display","none");
            select--;
        }
        $( "#"+a ).removeClass( "___active" );

    }

    $("#___search").click(function(){
        console.log(array);
        var a =$('#keyword').val();
        consle.log(a);
    });

    </script>
</body>
</html>