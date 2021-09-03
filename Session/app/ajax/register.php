<?php
  $username = $_POST['username'];
  $passwd1 = $_POST['passwd1'];
  $passwd2 = $_POST['passwd2'];

  if($username == "" || $passwd1 == "" || $passwd2 == ""){
      //Si hay campos vacios
      echo 0;
  }else if($passwd1 != $passwd2){
      //Si las contraseñas no coinciden
      echo 2;
  }else{
    //Si no hay campos vacios
    include('../../../DataBase/db.php');
    
    $sql = "SELECT * FROM tb_users WHERE username = '$username';";
    $result=mysqli_query($dblink, $sql) or exit (mysqli_error($dblink));
    $res=mysqli_fetch_array($result);

    if(!isset($res)){
        //usuario disponible
        $sql = "INSERT INTO tb_users VALUES (null,'$username','$passwd1','img/users/default.jpg',1);";
        $result=mysqli_query($dblink, $sql) or exit (mysqli_error($dblink));
        echo 1;
    }else{
        //Usuario no disponible
        echo 3;
    }

}
?>