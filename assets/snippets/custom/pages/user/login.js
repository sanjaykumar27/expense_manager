var SnippetLogin=function(){var e=$("#m_login"),i=function(e,i,a){var l=$('<div class="m-alert m-alert--outline alert alert-'+i+' alert-dismissible" role="alert">\t\t\t<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\t\t\t<span></span>\t\t</div>');e.find(".alert").remove(),l.prependTo(e),mUtil.animateClass(l[0],"fadeIn animated"),l.find("span").html(a)},a=function(){e.removeClass("m-login--forget-password"),e.removeClass("m-login--signin-otp"),e.removeClass("m-login--signup"),e.removeClass("m-login--after-signup"),e.removeClass("m-login--signup-doctor"), e.addClass("m-login--signin"),mUtil.animateClass(e.find(".m-login__signin")[0],"flipInX animated")},l=function(){$("#m_login_forget_password").click(function(i){i.preventDefault(),e.removeClass("m-login--signin"),e.removeClass("m-login--signin-otp"),e.removeClass("m-login--after-signup"),e.removeClass("m-login--signup"),e.addClass("m-login--forget-password"),mUtil.animateClass(e.find(".m-login__forget-password")[0],"flipInX animated")}),$("#m_login_forget_password_cancel").click(function(e){e.preventDefault(),a()}),$("#m_login_via_otp_cancel").click(function(e){e.preventDefault(),a()}),$("#m_login_signup").click(function(i){i.preventDefault(),e.removeClass("m-login--forget-password"),e.removeClass("m-login--signin-otp"),e.removeClass("m-login--after-signup"),e.removeClass("m-login--signin"),e.removeClass("m-login--signup-doctor"),e.addClass("m-login--signup"),mUtil.animateClass(e.find(".m-login__signup")[0],"flipInX animated")}),$("#enable-doctor-form").click(function(i) {i.preventDefault(), e.removeClass("m-login--forget-password"), e.removeClass("m-login--signin-otp"), e.removeClass("m-login--after-signup"), e.removeClass("m-login--signin"),e.removeClass("m-login--signup"), e.addClass("m-login--signup-doctor"), mUtil.animateClass(e.find(".m-login__signup_doctor")[0], "flipInX animated") }),$("#enable-signup-form").click(function(i) {i.preventDefault(), e.removeClass("m-login--forget-password"), e.removeClass("m-login--signin-otp"), e.removeClass("m-login--after-signup"), e.removeClass("m-login--signin"), e.removeClass("m-login--signup-doctor"), e.addClass("m-login--signup"), mUtil.animateClass(e.find(".m-login__signup")[0], "flipInX animated")}), $("#m_login_signin_otp_btn").click(function(i){i.preventDefault(),e.removeClass("m-login--forget-password"),e.removeClass("m-login--signup"),e.removeClass("m-login--after-signup"),e.removeClass("m-login--signin"),e.removeClass("m-login--signup-doctor"),e.addClass("m-login--signin-otp"),mUtil.animateClass(e.find(".m-login__signin_otp")[0],"flipInX animated")}),$("#m_login_signup_cancel").click(function(e){e.preventDefault(),a()})};return{init:function(){l(),




$("#m_login_signup_submit").click(function(l){l.preventDefault();var t=$(this),r=$(this).closest("form");r.validate({rules:{email:{required:!0,email:!0},password:{required:!0,pwcheck:true},mobile:{required:!0,customphone:true},first_name:{required:!0},last_name:{required:!0}}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
	r.ajaxSubmit({
		url:base_url+"Auth/validate/",
        type:"POST",
		success:function(data){
			data=JSON.parse(data);
			if(data.code=='1')
			{
				setTimeout(function(){
					t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1),r.validate(),a();e.removeClass("m-login--signin"),e.removeClass("m-login--signup"),e.removeClass("m-login--forget-password"),e.addClass("m-login--after-signup");l=e.find(".m-after__signup form");l.validate(),$('#est').val(data.mobile),$('#uid').val(data.uid);
				},2e3)
			}
            else
			{
				setTimeout(function(){
					t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".m-login__signup form");i(l,"danger",data.response)
				},2e3)
			}
		}}))}),

$("#m_login_signup_doctor_submit").click(function(l){l.preventDefault();var t=$(this),r=$(this).closest("form");r.validate({rules:{email:{required:!0,email:!0},password:{required:!0,pwcheck:true},mobile:{required:!0,customphone:true},first_name:{required:!0},last_name:{required:!0}}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
    r.ajaxSubmit({
        url:base_url+"Auth/validate_doctor/",
        type:"POST",
        success:function(data){
            data=JSON.parse(data);
            if(data.code=='1')
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1),r.validate(),a();e.removeClass("m-login--signin"),e.removeClass("m-login--signup"),e.removeClass("m-login--forget-password"),e.addClass("m-login--after-signup");l=e.find(".m-after__signup form");l.validate(),$('#est').val(data.mobile),$('#uid').val(data.uid);
                },2e3)
            }
            else
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".m-login__signup form");i(l,"danger",data.response)
                },2e3)
            }
        }}))}),

$("#m_login_signup_submit_register").click(function(l){l.preventDefault();var t=$(this),r=$(this).closest("form");r.validate({onkeyup: function(element) {this.element(element);},rules:{email:{required:!0,email:!0},password:{required:!0},rpassword:{equalTo : "#pwd"},agree:{required:!0},fname:{required:!0,alphanumeric: true},lname:{required:!0,alphanumeric: true}},messages:{rpassword:"Password and confirm Password must be same"}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
	r.ajaxSubmit({
		url:base_url+"Auth/Activate/",
		type:'POST',
		success:function(data){
			data=JSON.parse(data);
			if(data.code=='1')
			{
				setTimeout(function(){
					t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1),r.clearForm(),r.validate().resetForm(),a();var l=e.find(".m-login__signin form");l.clearForm(),l.validate().resetForm(),i(l,"success",data.response)
				},2e3)
			}
			else
			{
				setTimeout(function(){
					t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".m-login__signup form");i(l,"danger",data.response)
				},2e3)
			}
		}}))}),

$("#m_login_signup_send_otp").click(function(l){l.preventDefault();var t=$(this),r=$(this).closest("form");r.validate({rules:{mobile:'customphone'}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
    r.ajaxSubmit({
        url:base_url+"Auth/send_otp/",
        type:'POST',
        success:function(data){
            data=JSON.parse(data);
            if(data.code=='1')
            {
                setTimeout(function(){
                    $('#m_mobile').attr("readonly",!0);$('#phone_icon').removeClass('invisible');$('#otp').show();$('#otp').attr("disabled",!1);$('#m_login_signup_send_otp').hide();$('#m_login_signin_submit_add_no').show();$('#after_otp_sent').show();
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1).html('Resend OTP'),r.validate(),a();var l=e.find(".otp_form");i(l,"success",data.response)
                },2e3)
            }
            else
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".otp_form");i(l,"danger",data.response)
                },2e3)
            }
        }}))}),

$("#m_login_signin_submit_add_no").click(function(l){l.preventDefault();var t=$(this),r=$(this).closest("form");r.validate({rules:{mobile:{required:!0},otp:{required:!0}}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
    r.ajaxSubmit({
        url:base_url+"Auth/verify_otp/",
        type:'POST',
        success:function(data){
            data=JSON.parse(data);
            if(data.code=='1')
            {
                window.location=data.home;
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1),r.validate(),a();var l=e.find(".otp_form");i(l,"success",data.response)
                },2e3)
            }
            else
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".otp_form");i(l,"danger",data.response)
                },2e3)
            }
        }}))}),

$("#m_login_signin_submit_otp").click(function(l){l.preventDefault();var t=$(this),r=$(this).closest("form");r.validate({rules:{otp:{required:!0}}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
    r.ajaxSubmit({
        url:base_url+"Auth/login_via_otp/",
        type:'POST',
        success:function(data){
            data=JSON.parse(data);
            if(data.code=='1')
            {
                window.location=data.home;
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1),r.validate(),a();var l=e.find(".m-login__signin_otp");i(l,"success",data.response)
                },2e3)
            }
            else
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".m-login__signin_otp");i(l,"danger",data.response)
                },2e3)
            }
        }}))}),

$('.m-login__form').on('click', '#sign_up_otp', function (l){
    l.preventDefault();
    var t=$(this),r=$(this).closest("form");r.validate({rules:{otp:{required:!0}}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
    r.ajaxSubmit({
        url:base_url+"Auth/send_otp/",
        type:'POST',
        data:{mobile:t.data('cell'),
        ruwid : t.data('uid')
        },
        success:function(data){
            data=JSON.parse(data);
            if(data.code=='1')
            {
                setTimeout(function(){
                   var l=e.find(".m-login__otp_form");i(l,"success",data.response);$('#ruid').val(t.data('uid'));$('#cell_n').val(t.data('cell')),$('#after_otp_sent').show();
                },2e3)
            }
            else
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".m-login__otp_form");i(l,"danger",data.response)
                },2e3)
            }
        }}))
    $('#m_login_signin_otp_btn').click();
}),

$('.m-login__form').on('click', '#lwo', function (l){
    l.preventDefault();
    var t=$(this),r=$(this).closest("form");r.validate({rules:{email:{required:!0,customphone:true}}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
    r.ajaxSubmit({
        url:base_url+"Auth/send_otp/",
        type:'POST',
        data:{mobile:$('#username').val()
        },
        success:function(data){
            data=JSON.parse(data);
            if(data.code=='1')
            {
                var m=$('#username').val();
                console.log(m);
                setTimeout(function(){
                   var l=e.find(".m-login__otp_form");i(l,"success",data.response);$('#ruid').val(t.data('uid'));$('#cell_n').val(m),$('#after_otp_sent').show();
                },2e3)
                //$('#cell_n').val(m);
                $('#m_login_signin_otp_btn').click();
            }
            else
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".m-login__otp_form");i(l,"danger",data.response)
                },2e3)
            }
        }}))
    
}),

$('#resend_otp').click(function(l){
    l.preventDefault();
    var t=$(this),r=$(this).closest("form");r.validate({rules:{mobile:'customphone'}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
    r.ajaxSubmit({
        url:base_url+"Auth/resend_otp/",
        type:'POST',
        data:{mobile:$('#m_mobile').val(),
        ruwid : $('#ruwid').val()
        },
        success:function(data){
            data=JSON.parse(data);
            if(data.code=='1')
            {
                setTimeout(function(){
                    $('#m_mobile').attr("readonly",!0);$('#phone_icon').removeClass('invisible');$('#otp').show();$('#otp').attr("disabled",!1);$('#m_login_signup_send_otp').hide();$('#m_login_signin_submit_add_no').show();$('#after_otp_sent').show();
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1).html('Resend OTP'),r.validate(),a();var l=e.find(".otp_form");i(l,"success",data.response)
                },2e3)
            }
            else
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".otp_form");i(l,"danger",data.response)
                },2e3)
            }
        }}))
}),

$('#otp_resend').click(function(l){
    l.preventDefault();
    var t=$(this),r=$(this).closest("form");(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),
    r.ajaxSubmit({
        url:base_url+"Auth/resend_otp/",
        type:'POST',
        
        
        success:function(data){
            data=JSON.parse(data);
            if(data.code=='1')
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".m-login__otp_form");i(l,"success",data.response)
                },2e3)
            }
            else
            {
                setTimeout(function(){
                    t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1);var l=e.find(".m-login__otp_form");i(l,"danger",data.response)
                },2e3)
            }
        }}))
}),


$("#m_login_signup_email").keyup(function(l){l.preventDefault();var t=$(this),r=$(this).closest("form");$('#m_login_signup_submit').attr("disabled",!0);r.validate({rules:{email:{required:!0,email:!0}}}),r.valid()&&($('#m_login_signup_submit').attr("disabled",!1))}),


$("#m_login_forget_password_submit").click(function(l){l.preventDefault();var t=$(this),r=$(this).closest("form");r.validate({rules:{email:{required:!0,email:!0}}}),r.valid()&&(t.addClass("m-loader m-loader--right m-loader--light").attr("disabled",!0),r.ajaxSubmit({url:base_url+"Auth/forget_password/",type:"POST",success:function(data){
    data=JSON.parse(data);
    if(data.code=='1')
    {
        setTimeout(function(){t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1),r.validate(),a();var l=e.find(".m-login_forget_form");i(l,"success",data.response)},2e3)
    }
    else
    {
        setTimeout(function(){t.removeClass("m-loader m-loader--right m-loader--light").attr("disabled",!1),r.validate(),a();var l=e.find(".m-login_forget_form");i(l,"danger",data.response)},2e3)
    }

    }}))})}}}();jQuery(document).ready(function(){SnippetLogin.init()});

$("input#pwd").on("focus keyup", function () {
         
});
 
$("input#pwd").blur(function () {
         
});
$("input#pwd").on("focus keyup", function () {
        var score = 0;
        var a = $(this).val();
        var desc = new Array();
 
        // strength desc
        desc[0] = "Too short";
    desc[1] = "Weak";
    desc[2] = "Good";
    desc[3] = "Strong";
    desc[4] = "Best";
         
});
 
$("input#pwd").blur(function () {
 
});
$("input#pwd").on("focus keyup", function () {
        var score = 0;
        var a = $(this).val();
        var desc = new Array();
 
        // strength desc
        desc[0] = "Too short";
        desc[1] = "Weak";
        desc[2] = "Good";
        desc[3] = "Strong";
        desc[4] = "Best";
         
        // password length
        if (a.length >= 6) {
            $("#length").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#length").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 digit in password
        if (a.match(/\d/)) {
            $("#pnum").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#pnum").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 capital & lower letter in password
        if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
            $("#capital").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#capital").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 special character in password {
        if ( a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) {
                $("#spchar").removeClass("invalid").addClass("valid");
                score++;
        } else {
                $("#spchar").removeClass("valid").addClass("invalid");
        }
 
 
        if(a.length > 0) {
                //show strength text
                $("#passwordDescription").text(desc[score]);
                // show indicator
                $("#passwordStrength").removeClass().addClass("strength"+score);
        } else {
                $("#passwordDescription").text("Password not entered");
                $("#passwordStrength").removeClass().addClass("strength"+score);
        }
});
 
$("input#pwd").blur(function () {
 
});
$("input#pwd").on("focus keyup", function () {
        var score = 0;
        var a = $(this).val();
        var desc = new Array();
 
        // strength desc
        desc[0] = "Too short";
        desc[1] = "Weak";
        desc[2] = "Good";
        desc[3] = "Strong";
        desc[4] = "Best";
 
        $("#pwd_strength_wrap").fadeIn(400);
         
        // password length
        if (a.length >= 6) {
            $("#length").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#length").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 digit in password
        if (a.match(/\d/)) {
            $("#pnum").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#pnum").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 capital & lower letter in password
        if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
            $("#capital").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#capital").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 special character in password {
        if ( a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) {
                $("#spchar").removeClass("invalid").addClass("valid");
                score++;
        } else {
                $("#spchar").removeClass("valid").addClass("invalid");
        }
 
 
        if(a.length > 0) {
                //show strength text
                $("#passwordDescription").text(desc[score]);
                // show indicator
                $("#passwordStrength").removeClass().addClass("strength"+score);
        } else {
                $("#passwordDescription").text("Password not entered");
                $("#passwordStrength").removeClass().addClass("strength"+score);
        }
});
 
$("input#pwd").blur(function () {
        $("#pwd_strength_wrap").fadeOut(400);
});

$.validator.addMethod('customphone', function (value, element) {
    return this.optional(element) || /^\d{3}-\d{3}-\d{4}$/.test(value);
}, "Please enter a valid phone number");

$('#edit_email').click(function()
{
    $('#est').removeAttr('readonly')
    //$('#m_login_signup').click();
});

$('#resend_email').click(function(){

    var mobile=$('#est').val();
    var uid=$('#uid').val();
    
    $.ajax
    ({ 
        url: base_url+'Auth/resend_otp',
        data: {mobile: mobile,uid:uid},
        type: 'post',
        success: function(data)
        {
            data=JSON.parse(data);
            $('.success').html('Email Sent Please check') ;           
        }
    });
});

$('#m_login_signin_otp').click(function(){

    var mobile=$('#est').val();
    var uid=$('#uid').val();
    var otp=$('#eotp').val();
    
    $.ajax
    ({ 
        url: base_url+'Auth/verify_otp',
        data: {mobile: mobile,uid:uid,otp:otp},
        type: 'post',
        success: function(data)
        {
            data=JSON.parse(data);
            if(data.code==1)
            {
                window.location=data.home;
            }
            else
            {
                $('.success').html(data.response) ;
            }
                       
        }
    });
});

$('.m-login__form').on('click', '#login_now', function (){
    $('#m_login_signup_cancel').click();
});


$('.m-login__form').on('click', '#reset_now', function (){
    $('#m_login_forget_password').click();
});

$(document).ready(function () {
    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[\w.]+$/i.test(value);
    }, "Letters, numbers, and underscores only please");

    
})

$('.name').keyup(function(l){
        l.preventDefault();

        var t=$(this),r=$(this).closest("form");
        r.validate({
            onkeyup: function(element) {this.element(element);},
            rules:{
                fname:{required:!0,alphanumeric: true},
                lname:{required:!0,alphanumeric: true}
            }
        }),
        t.valid()
    })



$('#phone_icon').click(function(){
    $('#m_mobile').attr('readonly',!1);
})

$('.m-login__form').on('click', '#sign_up_now', function (){
    $('#m_login_signup').click();
});

$('.m-login__form').on('click', '#forget', function (){
    $('#m_login_forget_password').click();
});

$.validator.addMethod('customphone', function (value, element) {
    return this.optional(element) || /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/.test(value);
}, "Please enter a valid phone number");

"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$"

$.validator.addMethod('pwcheck', function (value, element) {
    return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/.test(value);
}, "Password Must have Minimum eight and maximum 10 characters, at least one uppercase letter, one lowercase letter, one number and one special character");




