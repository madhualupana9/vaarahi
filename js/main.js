document.addEventListener("touchstart",function(){},false);
(function($){
    "use strict";
    $(function(){
        // Change this to set a 9-day countdown from now
        var nineDaysLater = new Date();
        nineDaysLater.setDate(nineDaysLater.getDate() + 9); // Add 9 days to current date
        
        $('#defaultCountdown').countdown({until: nineDaysLater});
        $('#year').text(nineDaysLater.getFullYear());
    });
    
    // Rest of your existing code remains the same
    $('#mc-form').ajaxChimp({url:'https://www.google.com/'});
    $("#contactForm").validator().on("submit",function(event){
        if(event.isDefaultPrevented()){
            formError();
            submitMSG(false,"Please fill in the form properly!");
        }else{
            event.preventDefault();
            submitForm();
        }
    });
    
    function submitForm(){
        var fname=$("#fname").val();
        var email=$("#email").val();
        var phone=$("#phone").val();
        var message=$("#message").val();
        var validphone=isPhone(phone);
        if(validphone>0){
            $.ajax({
                type:"POST",
                url:"contact-process.php",
                data: $( "#contactForm" ).serialize(),
                success:function(text){
                    if(text==="success"){
                        formSuccess();
                    }else{
                        formError();
                        submitMSG(false,text);
                    }
                }
            });
        }
        else{
            submitMSG(false,"Please enter valid phone!!!");
            return false;
        }
    }
    
    function isPhone(phone){
        var filter=/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
        if(filter.test(phone)){
            var validphone=1;
        }else{
            var validphone=0;
        }
        return validphone;
    }
    
    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true,"Your Message Submitted Successfully!")
    }
    
    function formError(){
        $(".help-block.with-errors").removeClass('hidden');
    }
    
    function submitMSG(valid,msg){
        if(valid){
            var msgClasses="h3 text-center text-success";
        }else{
            var msgClasses="h3 text-center text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
})(jQuery);

// Rest of your existing functions remain the same
function openSubscribe(){
    $("#Main").removeClass("opacity-one");
    $("#Main").addClass("opacity-zero");
    $("#Subscribe").addClass("show");
}
function closeSubscribe(){
    $("#Subscribe").removeClass("show");
    $("#Main").removeClass("opacity-zero");
    $("#Main").addClass("opacity-one");
}
function openContact(){
    $("#Main").removeClass("opacity-one");
    $("#Main").addClass("opacity-zero");
    $("#myContact").addClass("show");
}
function closeContact(){
    $("#myContact").removeClass("show");
    $("#Main").removeClass("opacity-zero");
    $("#Main").addClass("opacity-one");
}
function openServicesStyle2(){
    $("#Main").addClass("slide-dowun");
    $("#Services").addClass("show");
}
function closeServicesStyle2(){
    $("#Services").removeClass("show");
    $("#Main").removeClass("slide-dowun");
}
function openSubscribeStyle2(){
    $("#Main").addClass("slide-right");
    $("#Subscribe").addClass("show");
}
function closeSubscribeStyle2(){
    $("#Subscribe").removeClass("show");
    $("#Main").removeClass("slide-right");
}
function openContactStyle2(){
    $("#Main").addClass("slide-left");
    $("#myContact").addClass("show");
}
function closeContactStyle2(){
    $("#myContact").removeClass("show");
    $("#Main").removeClass("slide-left");
}
function openServicesStyle3(){
    $("#Main").addClass("slide-dowun");
    $("#Services").addClass("show");
}
function closeServicesStyle3(){
    $("#Services").removeClass("show");
    $("#Main").removeClass("slide-dowun");
}
function openContactStyle3(){
    $("#Main").addClass("slide-up");
    $("#myContact").addClass("show");
}
function closeContactStyle3(){
    $("#myContact").removeClass("show");
    $("#Main").removeClass("slide-up");
}
function openServicesStyle4(){
    $("#Main").addClass("slide-dowun");
    $("#Services").addClass("show");
}
function closeServicesStyle4(){
    $("#Services").removeClass("show");
    $("#Main").removeClass("slide-dowun");
}
function openSubscribeStyle4(){
    $("#Main").addClass("slide-right");
    $("#Subscribe").addClass("show");
}
function closeSubscribeStyle4(){
    $("#Subscribe").removeClass("show");
    $("#Main").removeClass("slide-right");
}
function openContactStyle4(){
    $("#Main").addClass("slide-left");
    $("#myContact").addClass("show");
}
function closeContactStyle4(){
    $("#myContact").removeClass("show");
    $("#Main").removeClass("slide-left");
}
$('span#mgsYear').html( new Date().getFullYear() );