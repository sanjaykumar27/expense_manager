<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            Expense Manager | Dashboard
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
        <link href="<?php echo base_url(); ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors -->
        <link href="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b953b3b300.js" crossorigin="anonymous"></script>
    </head>
    <style>
        html, body{
            font-family: 'Open Sans', sans-serif;
        }
        .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item>.m-menu__heading .m-menu__link-text, .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item>.m-menu__link .m-menu__link-text, .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item>.m-menu__heading .m-menu__ver-arrow, .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item>.m-menu__link .m-menu__ver-arrow
        {
            color:#e6e6e6;
        }
        .m-aside-menu .m-menu__nav .m-menu__item>.m-menu__heading:hover, .m-aside-menu .m-menu__nav .m-menu__item>.m-menu__link:hover
        {
            background-color: #3f4252;
        }
        .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item>.m-menu__heading .m-menu__link-icon, .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item>.m-menu__link .m-menu__link-icon
        {
            color: #b0b0b1;
        }
        .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__section .m-menu__section-text
        {
            color: #a77635;
        }
        .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item .m-menu__submenu .m-menu__item>.m-menu__heading .m-menu__link-text, .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item .m-menu__submenu .m-menu__item>.m-menu__link .m-menu__link-text
        {
            color: #cac9c9;
        }
        .m-aside-menu .m-menu__nav .m-menu__subnav
        {
            background-color: #22242f;
        }
        .m-aside-left--minimize .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item.m-menu__item--active>.m-menu__link>.m-menu__link-icon, .m-aside-left--minimize .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item.m-menu__item--expanded>.m-menu__link>.m-menu__link-icon, .m-aside-left--minimize .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item>.m-menu__link>.m-menu__link-icon
        {
            color: #fff;
        }
        .m-subheader
        {
            padding: 12px 30px 0 32px;
        }
        .m-subheader .m-subheader__title
        {
            text-transform: uppercase;
            font-weight: 300;
            font-size: 22px;
        }.m-subheader .m-subheader__title
        {
            font-family: 'Open Sans', sans-serif;
        }
        .icon-font{font-size: 20px !important;}
    </style>
    <!-- end::Head -->
    <!-- end::Body -->
    <body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand  m-brand--skin-dark ">
                            <div class="m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="index.html" class="m-brand__logo-wrapper">
                                        <img alt="" src="<?php echo base_url(); ?>assets/demo/default/media/img/logo/logo_default_dark.png"/>
                                    </a>
                                </div>
                                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                    <!-- BEGIN: Left Aside Minimize Toggle -->
                                    <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
                     ">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
            <!-- BEGIN: Topbar Toggler -->
                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                        <i class="flaticon-more"></i>
                                    </a>
                                    <!-- BEGIN: Topbar Toggler -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                            <!-- BEGIN: Horizontal Menu -->
                            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                                <i class="la la-close"></i>
                            </button>
                            <!-- This is the page header --->
                            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                                <div class="m-subheader">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-auto">
                                            <h3 class="m-subheader__title ">
                                               Dashboard
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">
                                        <li class="
    m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light    m-list-search m-list-search--skin-light" 
    m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown" m-dropdown-persistent="1">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-nav__link-icon">
                                                    <i class="flaticon-search-1"></i>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                                <div class="m-dropdown__inner ">
                                                    <div class="m-dropdown__header">
                                                        <form  class="m-list-search__form">
                                                            <div class="m-list-search__form-wrapper">
                                                                <span class="m-list-search__form-input-wrapper">
                                                                    <input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
                                                                </span>
                                                                <span class="m-list-search__form-icon-close" id="m_quicksearch_close">
                                                                    <i class="la la-remove"></i>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
                                                            <div class="m-dropdown__content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                                            <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                                <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                                <span class="m-nav__link-icon">
                                                    <i class="flaticon-music-2"></i>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: url(<?php echo base_url(); ?>assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                        <span class="m-dropdown__header-title">
                                                            9 New
                                                        </span>
                                                        <span class="m-dropdown__header-subtitle">
                                                            User Notifications
                                                        </span>
                                                    </div>
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                                                        Alerts
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
                                                                        Events
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item m-tabs__item">
                                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
                                                                        Logs
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                                    <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                                                        <div class="m-list-timeline m-list-timeline--skin-light">
                                                                            <div class="m-list-timeline__items">
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        12 new users registered
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        Just now
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        System shutdown
                                                                                        <span class="m-badge m-badge--success m-badge--wide">
                                                                                            pending
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        14 mins
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        New invoice received
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        20 mins
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        DB overloaded 80%
                                                                                        <span class="m-badge m-badge--info m-badge--wide">
                                                                                            settled
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        1 hr
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        System error -
                                                                                        <a href="#" class="m-link">
                                                                                            Check
                                                                                        </a>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        2 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span href="" class="m-list-timeline__text">
                                                                                        New order received
                                                                                        <span class="m-badge m-badge--danger m-badge--wide">
                                                                                            urgent
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        7 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        Production server down
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        3 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge"></span>
                                                                                    <span class="m-list-timeline__text">
                                                                                        Production server up
                                                                                    </span>
                                                                                    <span class="m-list-timeline__time">
                                                                                        5 hrs
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                                    <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                                                        <div class="m-list-timeline m-list-timeline--skin-light">
                                                                            <div class="m-list-timeline__items">
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        New order received
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        Just now
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        New invoice received
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        20 mins
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        Production server up
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        5 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        New order received
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        7 hrs
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        System shutdown
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        11 mins
                                                                                    </span>
                                                                                </div>
                                                                                <div class="m-list-timeline__item">
                                                                                    <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                    <a href="" class="m-list-timeline__text">
                                                                                        Production server down
                                                                                    </a>
                                                                                    <span class="m-list-timeline__time">
                                                                                        3 hrs
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                                    <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                        <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                            <span class="">
                                                                                All caught up!
                                                                                <br>
                                                                                No new logs.
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                                <span class="m-nav__link-icon">
                                                    <i class="flaticon-share"></i>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: url(<?php echo base_url(); ?>assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                        <span class="m-dropdown__header-title">
                                                            Quick Actions
                                                        </span>
                                                        <span class="m-dropdown__header-subtitle">
                                                            Shortcuts
                                                        </span>
                                                    </div>
                                                    <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                        <div class="m-dropdown__content">
                                                            <div class="data" data="false" data-height="380" data-mobile-height="200">
                                                                <div class="m-nav-grid m-nav-grid--skin-light">
                                                                    <div class="m-nav-grid__row">
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-file"></i>
                                                                            <span class="m-nav-grid__text">
                                                                                Generate Report
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-time"></i>
                                                                            <span class="m-nav-grid__text">
                                                                                Add New Event
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="m-nav-grid__row">
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                            <span class="m-nav-grid__text">
                                                                                Create New Task
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="m-nav-grid__item">
                                                                            <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                            <span class="m-nav-grid__text">
                                                                                Completed Tasks
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-topbar__userpic">
                                                    <img src="<?php echo base_url(); ?>assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                                                    <!--
                                                    <span class="m-type m--bg-brand">
                                                        <span class="m--font-light">
                                                            S
                                                            <span>
                                                                <span>
                                                                    -->
                                                                </span>
                                                                <span class="m-topbar__username m--hide">
                                                                    Nick
                                                                </span>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__header m--align-center" style="background: url(<?php echo base_url(); ?>assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                                        <div class="m-card-user m-card-user--skin-dark">
                                                                            <div class="m-card-user__pic">
                                                                                <img src="<?php echo base_url(); ?>assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                                                                                <!--
                                                                                <span class="m-type m-type--lg m--bg-danger">
                                                                                    <span class="m--font-light">
                                                                                        S
                                                                                        <span>
                                                                                            <span>
                                                                                                -->
                                                                                            </div>
                                                                                            <div class="m-card-user__details">
                                                                                                <span class="m-card-user__name m--font-weight-500">
                                                                                                    Mark Andre
                                                                                                </span>
                                                                                                <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                                                    mark.andre@gmail.com
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav m-nav--skin-light">
                                                                                                <li class="m-nav__section m--hide">
                                                                                                    <span class="m-nav__section-text">
                                                                                                        Section
                                                                                                    </span>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="header/profile.html" class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                                                        <span class="m-nav__link-title">
                                                                                                            <span class="m-nav__link-wrap">
                                                                                                                <span class="m-nav__link-text">
                                                                                                                    My Profile
                                                                                                                </span>
                                                                                                                <span class="m-nav__link-badge">
                                                                                                                    <span class="m-badge m-badge--success">
                                                                                                                        2
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="header/profile.html" class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                            Activity
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="header/profile.html" class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                            Messages
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="header/profile.html" class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                            FAQ
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="header/profile.html" class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                            Support
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                                                        Logout
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                                                <span class="m-nav__link-icon">
                                                                                    <i class="flaticon-grid-menu"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- END: Topbar -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                            <!-- END: Header -->        
        <!-- begin::Body -->
                                            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                                                <!-- BEGIN: Left Aside -->
                                                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                                                    <i class="la la-close"></i>
                                                </button>
                                                <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
                                                    <!-- BEGIN: Aside Menu -->
    <div 
        id="m_ver_menu" 
        class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
        m-menu-vertical="1"
         m-menu-scrollable="1" m-menu-dropdown-timeout="500"  
        style="position: relative;">
                                                        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                                                            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                                                                <a  href="index.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                                                                    <span class="m-menu__link-title">
                                                                        <span class="m-menu__link-wrap">
                                                                            <span class="m-menu__link-text">
                                                                                Dashboard
                                                                            </span>
                                                                            <span class="m-menu__link-badge">
                                                                                <span class="m-badge m-badge--danger">
                                                                                    2
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__section ">
                                                                <h4 class="m-menu__section-text">
                                                                    Actions
                                                                </h4>
                                                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-layers"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Base
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Base
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/state.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    State Colors
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/typography.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Typography
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/stack.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Stack
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/tables.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Tables
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/dropdown.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Dropdown
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Tabs
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/base/tabs/bootstrap.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Bootstrap Tabs
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/base/tabs/line.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Line Tabs
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/accordions.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Accordions
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/navs.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Navs
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/lists.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Lists
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/treeview.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Tree View
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/bootstrap-notify.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Bootstrap Notify
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/toastr.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Toastr
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/base/sweetalert2.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    SweetAlert2
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-share"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Icons
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/icons/flaticon.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Flaticon
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/icons/fontawesome5.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Fontawesome 5
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/icons/lineawesome.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Lineawesome
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/icons/socicons.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Socicons
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-multimedia-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Buttons
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Buttons
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Button Base
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/buttons/base/default.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Default Style
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/buttons/base/square.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Square Style
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/buttons/base/pill.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Pill Style
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/buttons/base/air.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Air Style
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/buttons/group.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Button Group
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/buttons/dropdown.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Button Dropdown
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Button Icon
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/buttons/icon/lineawesome.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Lineawesome Icons
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/buttons/icon/fontawesome.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Fontawesome Icons
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/buttons/icon/flaticon.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Flaticon Icons
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-interface-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Portlets
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Portlets
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/portlets/base.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Base Portlets
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/portlets/advanced.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Advanced Portlets
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/portlets/creative.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Creative Portlets
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/portlets/tabbed.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Tabbed Portlets
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/portlets/draggable.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Draggable Portlets
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/portlets/tools.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Portlet Tools
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/portlets/sticky-head.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Sticky Head
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-interface-6"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Timeline
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Timeline
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/timeline/timeline-1.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Timeline 1
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/timeline/timeline-2.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Timeline 2
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-network"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Widgets
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Widgets
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/widgets/general.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    General Widgets
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/widgets/chart.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Chart Widgets
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-calendar"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Calendar
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Calendar
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/calendar/basic.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Basic Calendar
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/calendar/list-view.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    List Views
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/calendar/google.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Google Calendar
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/calendar/external-events.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    External Events
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/calendar/background-events.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Background Events
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-diagram"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Charts
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Charts
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    amCharts
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/charts/amcharts/charts.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                amCharts Charts
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/charts/amcharts/stock-charts.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                amCharts Stock Charts
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="components/charts/amcharts/maps.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                amCharts Maps
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/charts/flotcharts.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Flot Charts
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/charts/google-charts.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Google Charts
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/charts/morris-charts.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Morris Charts
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-placeholder-1"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Maps
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Maps
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/maps/google-maps.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Google Maps
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/maps/jqvmap.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    JQVMap
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Utils
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Utils
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/utils/session-timeout.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Session Timeout
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="components/utils/idle-timer.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Idle Timer
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__section ">
                                                                <h4 class="m-menu__section-text">
                                                                    MASTER DATA
                                                                </h4>
                                                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-interface-7"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Forms & Controls
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Forms & Controls
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Controls
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/controls/base.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Base Inputs
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/controls/checkbox-radio.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Checkbox & Radio
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/controls/input-group.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Input Groups
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/controls/switch.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Switch
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/controls/option.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Mega Options
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Widgets
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-datepicker.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Datepicker
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-datetimepicker.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Datetimepicker
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-timepicker.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Timepicker
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-daterangepicker.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Daterangepicker
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-touchspin.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Touchspin
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-maxlength.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Maxlength
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-switch.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Switch
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-multipleselectsplitter.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Multiple Select Splitter
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-select.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Bootstrap Select
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/select2.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Select2
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/typeahead.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Typeahead
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/nouislider.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                noUiSlider
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/form-repeater.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Form Repeater
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/ion-range-slider.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Ion Range Slider
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/input-mask.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Input Masks
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/summernote.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Summernote WYSIWYG
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/bootstrap-markdown.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Markdown Editor
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/autosize.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Autosize
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/clipboard.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Clipboard
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/dropzone.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Dropzone
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/widgets/recaptcha.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Google reCaptcha
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Layouts
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/layouts/default-forms.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Default Forms
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/layouts/multi-column-forms.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Multi Column Forms
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/layouts/action-bars.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Basic Action Bars
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/layouts/sticky-action-bar.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Sticky Action Bar
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Validation
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/validation/states.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Validation States
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/validation/form-controls.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Form Controls
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/forms/validation/form-widgets.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Form Widgets
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-interface-8"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Metronic Wizard
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="crud/wizard/wizard-1.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Wizard 1
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="crud/wizard/wizard-2.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Wizard 2
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="crud/wizard/wizard-3.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Wizard 3
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="crud/wizard/wizard-4.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Wizard 4
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="crud/wizard/wizard-5.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Form Wizard 5
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-tabs"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Metronic Datatable
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Metronic Datatable
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Base
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/data-local.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Local Data
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/data-json.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                JSON Data
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/data-ajax.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Ajax Data
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/html-table.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                HTML Table
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/record-selection.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Record Selection
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/local-sort.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Local Sort
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/row-details.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Row Details
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/column-rendering.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Column Rendering
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/column-width.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Column Width
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/responsive-columns.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Responsive Columns
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/base/translation.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Translation
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Scrolling
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/scrolling/vertical.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Vertical Scrolling
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/scrolling/horizontal.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Horizontal Scrolling
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/scrolling/both.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Both Scrolling
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Locked Columns
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/locked/left.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Left Locked Columns
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/locked/right.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Right Locked Columns
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/locked/both.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Both Locked Columns
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/locked/html-table.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                HTML Table
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Child Datatables
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/child/data-local.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Local Data
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/child/data-ajax.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Remote Data
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    API
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/api/methods.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                API Methods
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/metronic-datatable/api/events.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Events
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-list-3"></i>
                                                                    <span class="m-menu__link-text">
                                                                        DataTables
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    DataTables
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Basic
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/basic/basic.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Basic Tables
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/basic/scrollable.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Scrollable Tables
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/basic/headers.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Complex Headers
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/basic/paginations.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Pagination Options
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Advanced
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/advanced/column-rendering.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Column Rendering
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/advanced/multiple-controls.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Multiple Controls
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/advanced/column-visibility.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Column Visibility
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/advanced/row-callback.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Row Callback
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/advanced/row-grouping.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Row Grouping
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/advanced/footer-callback.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Footer Callback
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Data sources
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/data-sources/html.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                HTML
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/data-sources/javascript.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Javascript
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/data-sources/ajax-client-side.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Ajax Client-side
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/data-sources/ajax-server-side.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Ajax Server-side
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Search Options
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/search-options/column-search.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Column Search
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/search-options/advanced-search.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Advanced Search
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Extensions
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/extensions/buttons.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Buttons
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/extensions/colreorder.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                ColReorder
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/extensions/keytable.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                KeyTable
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/extensions/responsive.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Responsive
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/extensions/rowgroup.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                RowGroup
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/extensions/rowreorder.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                RowReorder
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/extensions/scroller.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Scroller
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a  href="crud/datatables/extensions/select.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Select
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__section ">
                                                                <h4 class="m-menu__section-text">
                                                                    APP SETTINGS
                                                                </h4>
                                                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-interface-9"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Pricing Tables
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Pricing Tables
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="snippets/general/pricing-tables/pricing-table-1.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Pricing Tables v1
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="snippets/general/pricing-tables/pricing-table-2.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Pricing Tables v2
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="snippets/general/pricing-tables/pricing-table-3.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Pricing Tables v3
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="snippets/general/pricing-tables/pricing-table-4.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Pricing Tables v4
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-piggy-bank"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Invoices
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Invoices
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="snippets/invoices/invoice-1.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Invoice v1
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="snippets/invoices/invoice-2.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Invoice v2
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-exclamation"></i>
                                                                    <span class="m-menu__link-text">
                                                                        FAQS
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    FAQS
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item " aria-haspopup="true" >
                                                                            <a  href="snippets/faq/faq-1.html" class="m-menu__link ">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    FAQ v1
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                    <i class="m-menu__link-icon flaticon-suitcase"></i>
                                                                    <span class="m-menu__link-text">
                                                                        Custom Pages
                                                                    </span>
                                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                </a>
                                                                <div class="m-menu__submenu ">
                                                                    <span class="m-menu__arrow"></span>
                                                                    <ul class="m-menu__subnav">
                                                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                            <span class="m-menu__link">
                                                                                <span class="m-menu__link-text">
                                                                                    Custom Pages
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    User Pages
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/user/login-1.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Login - 1
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/user/login-2.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Login - 2
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/user/login-3.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Login - 3
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/user/login-4.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Login - 4
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/user/login-5.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Login - 5
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/user/login-6.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Login - 6
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                                                                            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                                                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                                </i>
                                                                                <span class="m-menu__link-text">
                                                                                    Error Pages
                                                                                </span>
                                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                            </a>
                                                                            <div class="m-menu__submenu ">
                                                                                <span class="m-menu__arrow"></span>
                                                                                <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/errors/error-1.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Error 1
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/errors/error-2.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Error 2
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/errors/error-3.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Error 3
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/errors/error-4.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Error 4
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/errors/error-5.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Error 5
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                                                        <a target="_blank" href="snippets/pages/errors/error-6.html" class="m-menu__link ">
                                                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                                <span></span>
                                                                                            </i>
                                                                                            <span class="m-menu__link-text">
                                                                                                Error 6
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- END: Aside Menu -->
                                                </div>