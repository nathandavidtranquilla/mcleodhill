$(document).ready(function(){
    $('#email').on('focusout',function(){
        $.ajax({
            url: '/json/validateEmail',
            dataType: 'json',
            type: 'POST',
            data: {email : $('#email').val()},
            success: function(data){
                if (data.status){
                    $('#email').addClass('verified');
                } else {
                    $('#email').removeClass('verified');
                }
            },
            error: function(){
                console.log("There was an error with email validation");
            }
        });
    });
    $('#submit').click(function(){
        $('#floatingCirclesG').show();
        $.ajax({
            url: '/json/sendEmail',
            dataType: 'json',
            type: 'POST',
            data: {email : $('#email').val(), message : $('#message').val()},
            success: function(data){
                $('#floatingCirclesG').hide();
                if (data.status){
                    $('#form-holder').slideUp('slow',function(){
                        $('#confirmation-message').show("slow",function(){
                            $('#confirmation-message').delay(2000).hide("slow");
                        });
                    });
                } else {
                    console.log("Email not sent successfully");
                }
            },
            error: function(){
                console.log("There was an error with email validation");
            }

        });
    });

    // Things to hide on page ready
    $('#form-holder').hide();
    $('#media-holder').hide();
    $('#confirmation-message').hide();
    $('#floatingCirclesG').hide();

    // click events
    $('#form-revealer').click(function(){
        $('#media-holder').slideUp("slow",function(){
            $('#form-holder').slideToggle('slow');
        });
    });
    $('#media-revealer').click(function(){
        $('#form-holder').slideUp("slow",function(){
            $('#media-holder').slideToggle('slow');
        });
    });
});

