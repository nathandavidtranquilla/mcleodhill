<?= $this->Html->css('contact_us');?>
<?= $this->Html->css('spinning_icon');?>
<script>
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

</script>


<h3>Contact Information</h3>
<table id="contact-info" class="holders">
    <tr><td>179 McLeod Hill Road</td></tr>
    <tr><td>Fredericton, NB</td></tr>
    <tr><td>E3G 986</td></tr>
    <tr><td>1 (506) 459-4896</td></tr>
</table>

<table id="no-styling">
    <tr>
        <td><h4 id="form-revealer" class="revealers">Send us a message</h4></td>
        <td id="confirmation-message">Email sent successfully</td>
    </tr>
</table>

<div id="form-holder" class="holders">

    <table id="no-styling">
        <tr>
            <td>
                <label for="email">Enter your email address</label>
                <input id="email" name="email" type="text" value="" />
            </td>
            <td>
                <label for="name">Enter your name</label>
                <input id="name" name="name" type="text" value="" />
            </td>
        </tr>
    </table>


    <label for="message">Enter your message</label>
    <textarea id="message" name="message" type="textarea" value="" ></textarea>

    <button class="ajaxButton" id="submit" type="submit" >Send</button>
    <div id="floatingCirclesG">
        <div class="f_circleG" id="frotateG_01">
        </div>
        <div class="f_circleG" id="frotateG_02">
        </div>
        <div class="f_circleG" id="frotateG_03">
        </div>
        <div class="f_circleG" id="frotateG_04">
        </div>
        <div class="f_circleG" id="frotateG_05">
        </div>
        <div class="f_circleG" id="frotateG_06">
        </div>
        <div class="f_circleG" id="frotateG_07">
        </div>
        <div class="f_circleG" id="frotateG_08">
        </div>
    </div>
</div>

<table id="no-styling">
    <tr>
        <td><h4 id="media-revealer" class="revealers">Find us on the map</h4></td>
    </tr>
</table>

<div id="media-holder" class="holders">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=179+McLeod+Hill+Road,+Fredericton,+NB&amp;aq=0&amp;oq=179+mcleod+hil&amp;sll=46.000301,-66.670361&amp;sspn=0.057357,0.166683&amp;ie=UTF8&amp;hq=&amp;hnear=179+McLeod+Hill+Rd,+Fredericton,+New+Brunswick+E3G+9H6&amp;ll=45.998441,-66.666351&amp;spn=0.028677,0.083342&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.ca/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=179+McLeod+Hill+Road,+Fredericton,+NB&amp;aq=0&amp;oq=179+mcleod+hil&amp;sll=46.000301,-66.670361&amp;sspn=0.057357,0.166683&amp;ie=UTF8&amp;hq=&amp;hnear=179+McLeod+Hill+Rd,+Fredericton,+New+Brunswick+E3G+9H6&amp;ll=45.998441,-66.666351&amp;spn=0.028677,0.083342&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>



