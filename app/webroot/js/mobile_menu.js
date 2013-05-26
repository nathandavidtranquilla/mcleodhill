$(document).ready(function(){
    $('#mobile_menu').hide();
    $('#mobile_nav').on('click',function(){
        $('#mobile_menu').slideDown("slow",function(){
            $('#mobile_menu > table').show();
        });
    });
});

