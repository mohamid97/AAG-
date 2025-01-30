<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A A G</title>
    <link href="{{ asset('front/assets/css/size.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet" />
    @yield('styles')
</head>
<body>
<header class="page-header light-header menu-on-end  header-basic" id="page-header">
    <div class="bar-bottom">
        <div class="container">
            <nav class="menu-navbar">
                <div class="header-logo"><a class="logo-link" href="index.html"><img alt="logo" class="logo-img light-logo" src="assets/img/logo.jpg" /><img alt="logo" class="logo-img  dark-logo" src="assets/img/logo.jpg" /></a></div>

                <div class="links menu-wrapper ">
                    <ul class="list-js links-list">
                        <li class="menu-item"><a class="menu-link active" href="{{route('home')}}">الرئيسية </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('about')}}">معلومات عنا </a></li>
                        <li class="menu-item has-sub-menu"><a class="menu-link  " href="services.html">منتجاتنا </a><a class="drop-down-btn" href="#"> <i class="fas fa-chevron-down down-Arrow-icon"> </i> </a>
                            <ul class="sub-menu ">
                                <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="services-details.html">لفف مكسي بالستيك</a></li>
                                <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="services-details.html">لفف مجلفن </a></li>
                            </ul>
                        </li>
                        <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('projects')}}">سابقة اعمال </a></li>
                        <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('articles')}}">المقالات </a></li>
                        <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="contact.html">أتصل بنا </a></li>
                        <li class="m-0 menu_info me-0 me-xl-3 mt-4 mt-xl-0">
                            <div class="call_info"><span>للإستفسار</span> <a class="d-block p-0" href="tel:+201119779071">01119779071</a></div>
                        </li>
                    </ul>
                </div>

                <div class="controls-box">
                    <div class="control  info-toggler"></div>

                    <div class="control  menu-toggler"></div>
                </div>
            </nav>
        </div>
    </div>
    <!--End navbar--></header>
<!--end Page Header--><!-- BANNER
        ================================================== -->

