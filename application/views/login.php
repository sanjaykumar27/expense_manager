
<!DOCTYPE html>
<!-- 

-->
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            Metronic | Login Page - 1
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/snippets/custom/ripple.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/demo/default/media/img/logo/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700&display=swap" rel="stylesheet">
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <style>
        html, body{
            font-family: 'Open Sans', sans-serif;
        }
        .m-login.m-login--2.m-login-2--skin-3 .m-login__container .m-login__head .m-login__title
        {
            color:#fff;
            font-weight: 300;
            font-size: 26px;
        }
        .m-login.m-login--2.m-login-2--skin-3 .m-login__container .m-login__form .form-control
        {
            background-color: #ececec;
            color:#000;
        }
        .m-login.m-login--2.m-login-2--skin-3 .m-login__container .m-login__form
        {
            color: #000;
        }
        .btn-focus
        {
            background-color: #e84793;
            color:#fff;
            font-weight: 16px;
            border: 2px solid #fff;
        }
        .btn-focus:hover
        {
            background-color: #7d3959;
            color:#fff;
            border: 2px solid #fff;
        }
        .m-login.m-login--2.m-login-2--skin-3 .m-login__container .m-login__form .m-login__form-sub .m-checkbox, .m-login.m-login--2.m-login-2--skin-3 .m-login__container .m-login__form .m-login__form-sub .m-link ,.m-login.m-login--2.m-login-2--skin-3 .m-login__container .m-login__form .m-login__form-sub .m-link:hover
        {
            color:#fff;
        }
        .m-login.m-login--2.m-login-2--skin-3 .m-login__container .m-login__account .m-login__account-link:hover, .m-login.m-login--2.m-login-2--skin-3 .m-login__container .m-login__account .m-login__account-msg
        {
            color:#fff;
        }
        .m-login.m-login--2 .m-login__wrapper .m-login__container .m-login__form .m-form__group .form-control
        {
            font-size: 16px !important;
            color: #000;
            padding: 1.2rem;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-color: #1b2129;">
                <div class="m-grid__item m-grid__item--fluid m-login__wrapper" style="padding-top:30px;  margin-top: 30px;border-radius: 10px;">
                    <div class="m-login__container">
                        <div class="m-login__logo" style="margin-bottom: 30px;">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/app/media/img//logos/logo-1.png">
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    Sign In To Admin
                                </h3>
                            </div>
                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Enter username or mobile" name="username" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="row m-login__form-sub">
                                    <div class="col m--align-left m-login__form-left">
                                        <label class="m-checkbox  m-checkbox--light">
                                            <input type="checkbox" name="remember">
                                            Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col m--align-right m-login__form-right">
                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                            Forget Password ?
                                        </a>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn ripple">
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="m-login__signup">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    Sign Up
                                </h3>
                                <div class="m-login__desc">
                                    Enter your details to create your account:
                                </div>
                            </div>
                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
                                </div>
                                <div class="row form-group m-form__group m-login__form-sub">
                                    <div class="col m--align-left">
                                        <label class="m-checkbox m-checkbox--light">
                                            <input type="checkbox" name="agree">
                                            I Agree the
                                            <a href="#" class="m-link m-link--focus">
                                                terms and conditions
                                            </a>
                                            .
                                            <span></span>
                                        </label>
                                        <span class="m-form__help"></span>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
                                        Sign Up
                                    </button>
                                    &nbsp;&nbsp;
                                    <button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="m-login__forget-password">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    Forgotten Password ?
                                </h3>
                                <div class="m-login__desc">
                                    Enter your email to reset your password:
                                </div>
                            </div>
                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                        Request
                                    </button>
                                    &nbsp;&nbsp;
                                    <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="m-login__account">
                            <span class="m-login__account-msg">
                                Don't have an account yet ?
                            </span>
                            &nbsp;&nbsp;
                            <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Snippets 
        <script src="<?php echo base_url(); ?>assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>-->
        <!--end::Page Snippets -->
    </body>
    <script>
            $("#m_login_signin_submit").click(function (e) {
                e.preventDefault();
                var a = $(this),
                        l = $(this).closest("form");
                l.validate({
                    rules: {
                        email: {
                            required: !0
                        },
                        password: {
                            required: !0
                        }
                    }
                }), l.valid() && (a.addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0),
                        l.ajaxSubmit({
                            url: "<?php echo base_url(); ?>Auth/login",
                            type: "POST",
                            success: function (data) {
                                data = JSON.parse(data);
                                if (data.code == '1') {
                                    a.removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1);
                                    window.location = data.home;

                                } else {
                                    setTimeout(function () {
                                        a.removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1), i(l, "danger", data.response)
                                    }, 2e3)
                                }

                            }
                        }));
            });
        </script>
    <!-- end::Body -->
</html>
