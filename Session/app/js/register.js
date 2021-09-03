$("#registrar").click(function(){
    $(".error1").css('display','none');
    $(".error2").css('display','none');
    $(".error3").css('display','none');

    const postData = {
        username:  $('#username').val(),
        passwd1:  $('#passwd1').val(),
        passwd2:  $('#passwd2').val()
    };

    $.post('../app/ajax/register.php',postData, function(response) {
        if(response == 0){
            //campos vacios
            $(".error1").css('display','block');
        }else if(response == 1){
            //Registrar
            window.location = "../login/index.php?e=1";
        }else if(response == 2){
            //Las contraseñas no coinciden
            $(".error2").css('display','block');
        }else if(response == 3){
            //Usuario ya registrado
            $(".error3").css('display','block');

        }
    })
});