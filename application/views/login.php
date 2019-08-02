
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
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/demo/default/media/img/logo/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700&display=swap" rel="stylesheet">
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <style>
        .m-login.m-login--1 .m-login__wrapper .m-login__form .m-login__form-sub .m-link
        {
            color: #fff;
        }
        .m-login.m-login--1 .m-login__wrapper .m-login__form .m-login__form-sub .m-checkbox
        {
            color: #fff;
        }
        .m-login.m-login--1 .m-login__wrapper .m-login__form .m-login__form-action .btn
        {
            font-size: 15px;
        }
        .m-login.m-login--1 .m-login__account .m-login__account-link
        {
            color: #fff;
        }
        .m-login.m-login--1 .m-login__wrapper .m-login__form .m-form__group .form-control
        {
            border-radius: 44px;
            border: 0;
            border-bottom: 4px solid #f17a25 !important;
            padding: 1rem 0;
            margin-top: 1.1rem;
            padding-left: 15px;
            font-size: 14px;
        }
        
        html, body{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
                <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside" style="background: #232121">
                    <div class="m-stack m-stack--hor m-stack--desktop">
                        <div class="m-stack__item m-stack__item--fluid">
                            <div class="m-login__wrapper" style="padding-top:20px;">
                                <div class="m-login__logo" style="margin-bottom: 0px;">
                                    <a href="#">
                                        <img style="height: 230px;" src="<?php echo base_url(); ?>assets/uploads/exp_manager.png">
                                    </a>
                                </div>
                                <div class="m-login__signin">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title" style="color:#fff;font-weight: 300">
                                            Sign In To Admin
                                        </h3>
                                    </div>
                                    <form class="m-login__form m-form" action="">
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                        </div>
                                        <div class="row m-login__form-sub">
                                            <div class="col m--align-left">
                                                <label class="m-checkbox m-checkbox--focus">
                                                    <input type="checkbox" name="remember">
                                                    Remember me
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col m--align-right">
                                                <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                                    Forget Password ?
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-login__form-action">
                                            <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
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
                                                <label class="m-checkbox m-checkbox--focus">
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
                                            <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                                Sign Up
                                            </button>
                                            <button id="m_login_signup_cancel" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">
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
                                            <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                                Request
                                            </button>
                                            <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="m-stack__item m-stack__item--center">
                            <div class="m-login__account">
                                <span class="m-login__account-msg">
                                    Don't have an account yet ?
                                </span>
                                &nbsp;&nbsp;
                                <a href="javascript:;" id="m_login_signup" class="m-link m-link--focus m-login__account-link">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(<?php echo base_url(); ?>assets/uploads/login_background.jpg)">
                    <div class="m-grid__item m-grid__item--middle" style="padding:20px; background: #232121d9;border-radius: 10px;">
                        <h4 class="m-login__welcome" style="font-weight: 300;">
                            Expense Management System
                        </h4>
                        <p class="m-login__msg" style="text-align: right">
                            Your Personal Financial System
                            <br><small>-- Sanjay Kumar Chaurasia</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
                <!--<script src="../../../assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>
                end::Page Snippets -->
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
    </body>
    <!-- end::Body -->
</html>
