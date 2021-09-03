var usermenu = 0;

$(".user-box").click(function(){
    if(usermenu == 0){
        $(".user-box .box").css("height","auto");
        $(".user-box .box").css("border","1px solid rgb(204, 204, 204");
        usermenu++;
    }else{
        $(".user-box .box").css("height","50px");
        $(".user-box .box").css("overflow","hidden");
        $(".user-box .box").css("border","1px solid transparent");
        usermenu--;
    }
});

$("#cerrar_sesion").click(function(){
    $.post('Session/destroy_session.php', function(response) {
        window.location.replace("index.php");
    })  
});    

$(".body").click(function(){
    if(usermenu == 1){
        $(".user-box .box").css("height","50px");
        $(".user-box .box").css("overflow","hidden");
        $(".user-box .box").css("border","1px solid transparent");
        usermenu--;
    }
});    
$(".menu").click(function(){
    if(usermenu == 1){
        $(".user-box .box").css("height","50px");
        $(".user-box .box").css("overflow","hidden");
        $(".user-box .box").css("border","1px solid transparent");
        usermenu--;
    }
});    