var eoeo1,eoeo2,eoeo3;

    $( "#login_form_userid" ).focus(function() {
        var hhh=$("#login_form_label1");
        hhh.animate({left:'3.3px',top:'-15px',fontSize:'16px'}, 100);
    });
    $( "#login_form_userid" ).focusout(function() {
        if ($(this).val().length ===0 ) {
            var hhh=$("#login_form_label1");
            hhh.animate({left:'2px',top:'-2px',fontSize:'22px'}, "fast");
        }
    });
    $( "#login_form_password" ).focus(function() {
        var hhh=$("#login_form_label2");
        hhh.animate({left:'3.3px',top:'-15px',fontSize:'16px'}, 100);
    });
    $( "#login_form_password" ).focusout(function() {
        if ($(this).val().length ===0 ) {
        var hhh=$("#login_form_label2");
        hhh.animate({left:'2px',top:'-2px',fontSize:'22px'}, "fast");
        }
    });
    $( "#signup_form_name" ).focus(function() {
        var hhh=$("#signup_form_label1");
        hhh.animate({left:'3.3px',top:'-15px',fontSize:'16px'}, 100);
    });
    $( "#signup_form_name" ).focusout(function() {
        if ($(this).val().length ===0 ) {
            var hhh=$("#signup_form_label1");
            hhh.animate({left:'2px',top:'-2px',fontSize:'22px'}, "fast");
        }
    });
    $( "#signup_form_userid" ).focus(function() {
        var hhh=$("#signup_form_label2");
        hhh.animate({left:'3.3px',top:'-15px',fontSize:'16px'}, 100);
    });
    $( "#signup_form_userid" ).focusout(function() {
        if ($(this).val().length ===0 ) {
            var hhh=$("#signup_form_label2");
            hhh.animate({left:'2px',top:'-2px',fontSize:'22px'}, "fast");
        }
    });
    $( "#signup_form_password" ).focus(function() {
        var hhh=$("#signup_form_label3");
        hhh.animate({left:'3.3px',top:'-15px',fontSize:'16px'}, 100);
    });
    $( "#signup_form_password" ).focusout(function() {
        if ($(this).val().length ===0 ) {
            var hhh=$("#signup_form_label3");
            hhh.animate({left:'2px',top:'-2px',fontSize:'22px'}, "fast");
        }
    });
    $( "#signup_form_confirmpassword" ).focus(function() {
        var hhh=$("#signup_form_label4");
        hhh.animate({left:'3.3px',top:'-15px',fontSize:'16px'}, 100);
    });
    $( "#signup_form_confirmpassword" ).focusout(function() {
        if ($(this).val().length ===0 ) {
            var hhh=$("#signup_form_label4");
            hhh.animate({left:'2px',top:'-2px',fontSize:'22px'}, "fast");
        }
    });

    $( "#signup_form_mbno" ).focus(function() {
        var hhh=$("#signup_form_label5");
        hhh.animate({left:'3.3px',top:'-15px',fontSize:'16px'}, 100);
    });
    $( "#signup_form_mbno" ).focusout(function() {
        if ($(this).val().length ===0 ) {
            var hhh=$("#signup_form_label5");
            hhh.animate({left:'2px',top:'-2px',fontSize:'22px'}, "fast");
        }
    });

    function pushslide(q)
    {
        var i;
        var a=document.getElementsByClassName("mainbar");
        for(i=0;i<a.length;i++)
        {
           if(a[i].style.display=="block")
           {
               break;
           }
        }
        show(i+q);
    }
    function show(n){

        var a=document.getElementsByClassName("mainbar");
        var k=document.getElementsByClassName("dot");
        var i;
        if(n>=a.length)
            n=0;
        if(n<0)
            n=a.length-1;

        a[n].style.animation.direction="reverse";
        for(i=0;i<a.length;i++)
        {
            a[i].style.display="none";
            k[i].style.background="rgb(141, 138, 138)";
        }
        a[n].style.display="block";
        k[n].style.background="rgb(0, 0, 0, 0.69)";
        return;
    }
    function showsidebar() {
        
        var x=document.getElementById("sidebar");
        x.style.display="block";
        setTimeout(function() { x.style.animationPlayState="paused";}, 500);

        var y=document.getElementById("all");
        $("#all").fadeTo(450,0.6);
        y.style.display="block";

        document.body.style.overflow="hidden";
    }
    function hidesidebar(){
        var x=document.getElementById("sidebar");
 
        x.style.animationPlayState="running";
        $("#all").fadeOut(480,0);

        setTimeout(function() { x.style.display="none";
            var y=document.getElementById("all");
            y.style.display="none";
            document.body.style.overflow="scroll";
        }, 470);
    }
    function login_signup(){
        var jj=0;
        var x=document.getElementById("login_signupcontainer");
        x.style.display="block";

        document.body.style.overflow="hidden";

        $('#login_signup').css('display',"block");
        function fun (){
            var l1 = ($(window).height()); 
            var l2 = ($(window).width()); 
            $('#login_signup').css('width', l2/2);
            $('#login_signup').css('height', 4*l1/6);
            $('#login_signup').css('top', l1/6);
            $('#login_signup').css('left', l2/4);
        }
        eoeo1=setInterval(fun,50);
        
    }
    function hidelogin_signup(){
        $(document).ready(function(){
        var a=document.getElementsByClassName("login_signup_para3");
        var x=document.getElementsByClassName("login_signup_para4");
        var j;

        $('#login_signup').css('display',"none");
        $('#login_signupcontainer').css('display',"none");
        clearInterval(eoeo1);
        clearInterval(eoeo2);
        for(j=0;j<a.length;j++)
        {
            a[j].style.display="none";
            x[j].style.display="none";
        }
        document.body.style.overflow="scroll";
        });
    }
    function change_quote()
    {
        $(document).ready(function(){
            var a=document.getElementsByClassName("login_signup_para3");
            var x=document.getElementsByClassName("login_signup_para4");
            var i,j;

            i=Math.floor((Math.random() * 5));
            a[i].style.display="block ";
            x[i].style.display="block";

            function funny2 (){

                $(a[i]).slideToggle(600,
                function() { 
                    i=Math.floor((Math.random() * 5));
                    $(a[i]).slideToggle(700);
                });
                $(x[i]).slideToggle(600,
                function() { 
                    $(x[i]).slideToggle(700);
                });
            } 
            eoeo2=setInterval(funny2,6000);
        });
    }
    function login_validate()
    {
        var regx=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var a=document.getElementById("login_signup_userid_validate");
        var b=document.getElementById("login_signup_pass_validate");
        var x=document.getElementById("login_form_userid");
        var y=document.getElementById("login_form_password");

        a.style.visibility="hidden";
        x.style.borderBottom="0.7px solid  rgba(0, 0, 0, 0.34)";
        b.style.visibility="hidden";
        y.style.borderBottom="0.7px solid  rgba(0, 0, 0, 0.34)";

        // var f=document.getElementById("login_form");
        if(x.value.trim()=="")
        {
            a.innerHTML="Email id cannot be empty";
            a.style.visibility="visible";
            x.style.borderBottom=" 2px solid red";
            $("#login_form_userid").effect( "shake" );
            return false;
        }
        else if(y.value.trim()=="")
        {
            b.innerHTML="Password cannot be empty";
            b.style.visibility="visible";
            y.style.borderBottom="2px solid red";
            $(y).effect("shake");
            return false;
        }
        else if(!regx.test(x.value))
        {
            a.innerHTML="Invalid Email id";
            a.style.visibility="visible";
            x.style.borderBottom=" 2px solid red";
            $("#login_form_userid").effect( "shake" );
            return false;
        }
        return true;
    }
    function signup_validate()
    {
        var a1=document.getElementById("signup_name_validate");
        var a2=document.getElementById("signup_userid_validate");
        var a3=document.getElementById("signup_password_validate");
        var a4=document.getElementById("signup_confirmpassword_validate");
        var a5=document.getElementById("signup_mbno_validate");
        var x1=document.getElementById("signup_form_name");
        var x2=document.getElementById("signup_form_userid");
        var x3=document.getElementById("signup_form_password");
        var x4=document.getElementById("signup_form_confirmpassword");
        var x5=document.getElementById("signup_form_mbno");

        a1.style.visibility="hidden";
        x1.style.borderBottom="0.7px solid  rgba(0, 0, 0, 0.34)";
        a2.style.visibility="hidden";
        x2.style.borderBottom="0.7px solid  rgba(0, 0, 0, 0.34)";
        a3.style.visibility="hidden";
        x3.style.borderBottom="0.7px solid  rgba(0, 0, 0, 0.34)";
        a4.style.visibility="hidden";
        x4.style.borderBottom="0.7px solid  rgba(0, 0, 0, 0.34)";
        a5.style.visibility="hidden";
        x5.style.borderBottom="0.7px solid  rgba(0, 0, 0, 0.34)";

        var regx1=/^[A-Z a-z]$/;
        var regx2=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var regx3=/^$/;

        // var f=document.getElementById("login_form");
        if(x1.value.trim()=="")
        {
            a1.innerHTML="Name cannot be empty";
            a1.style.visibility="visible";
            x1.style.borderBottom=" 2px solid red";
            $("#signup_form_name").effect( "shake" );
            return false;
        }
        else if(x2.value.trim()=="")
        {
            a2.innerHTML="Email cannot be empty";
            a2.style.visibility="visible";
            x2.style.borderBottom="2px solid red";
            $(x2).effect("shake");
            return false;
        }
        else if(x3.value.trim()=="")
        {
            a3.innerHTML="Password cannot be empty";
            a3.style.visibility="visible";
            x3.style.borderBottom="2px solid red";
            $(x3).effect("shake");
            return false;
        }
        else if(x4.value.trim()=="")
        {
            a4.innerHTML="Password cannot be empty";
            a4.style.visibility="visible";
            x4.style.borderBottom="2px solid red";
            $(x4).effect("shake");
            return false;
        }
        else if(x5.value.trim()=="")
        {
            a5.innerHTML="Password cannot be empty";
            a5.style.visibility="visible";
            x5.style.borderBottom="2px solid red";
            $(x5).effect("shake");
            return false;
        }
        else if(!regx1.test(x1.value))
        {
            a1.innerHTML="Name can only have Alphabets";
            a1.style.visibility="visible";
            x1.style.borderBottom=" 2px solid red";
            $("x1").effect( "shake" );
            return false;
        }
        else if(!regx2.test(x2.value))
        {
            a2.innerHTML="Invalid Email id";
            a2.style.visibility="visible";
            x2.style.borderBottom=" 2px solid red";
            $("#signup_form_userid").effect( "shake" );
            return false;
        }
        else if(!regx3.test(x3.value))
        {
            a3.innerHTML="Please";
            a3.style.visibility="visible";
            x3.style.borderBottom=" 2px solid red";
            $("x3").effect( "shake" );
            return false;
        }
        return true;
    }
    $(".login_signup_flip").click(function(){
        if($("#login_form_container").css('display')=='none'){
            $("#signup_form_container").hide("fast")
          $("#signup_form_side").hide("slow", function(){
              $("#login_form_container").show("fast");
           });
        }
        else {
            $("#login_form_container").hide("slow", function(){
                $("#signup_form_container").show("fast");
                $("#signup_form_side").show("fast");
           });
        }
    });