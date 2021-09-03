<?php
  $username = $_POST['username'];
  $passwd = $_POST['passwd'];

  if($username == "" || $passwd ==""){
      //SI HAY CAMPOS VACIOS
      echo 0;
  }else{
    //SI NO HAY CAMPOS VACIOS
    include('../../../DataBase/db.php');
    
    $sql = "SELECT * FROM tb_users WHERE username = '$username' AND passwd = '$passwd';";
    $result=mysqli_query($dblink, $sql) or exit (mysqli_error($dblink));
    $res=mysqli_fetch_array($result);

    if(isset($res)){
       //Usuario y contraseña correctos 
        session_start();
        $_SESSION['id'] = $res['id_user'];
        $_SESSION['username'] = $res['username'];
        $_SESSION['img'] = $res['user_img'];
        $_SESSION['user_type'] = $res['user_type'];
        echo 1;
    }else{
        //Usuario o contraseña incorrectos
        echo 2;
    }

}
?>