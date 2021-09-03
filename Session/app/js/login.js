$("#iniciar_Session").click(function(){
    $(".error1").css('display','none');
    $(".error2").css('display','none');
    $(".loggeding").css('display','none');

    const postData = {
        username:  $('#username').val(),
        passwd:  $('#passwd').val(),

    };

    $.post('../app/ajax/login.php',postData, function(response) {
        if(response == 0){
            //camposp vacios
            $(".error1").css('display','block');
        }else if(response == 1){
            //iniciar session
        window.location.replace("../../index.php");
        }else if(response == 2){
            //usuario o contraseña incorrectos
            $(".error2").css('display','block');
        }
    })
});