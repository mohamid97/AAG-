<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'A A G')</title>
    <meta name="description" content="@yield('meta_description', 'This is AAG')">
    <link href="{{ asset('front/assets/css/size.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha384-Ez+Km5A7UjzvR8xV5TY7ANFkbBvZgp1nm8UvgC1f6z5D5Jt9Hrf19J13UKlA1FfB" crossorigin="anonymous">

    @yield('styles')
</head>
<body>
<header class="page-header light-header menu-on-end  header-basic" id="page-header">
    <div class="bar-bottom">
        <div class="container">
            <nav class="menu-navbar">

                <div class="header-logo"><a class="logo-link" href="{{route('home')}}"><img alt="logo" class="logo-img light-logo" src="{{asset('uploads/images/setting/' . $settings->logo)}}" /><img alt="logo" class="logo-img  dark-logo" src="assets/img/logo.jpg" /></a></div>

                <div class="links menu-wrapper ">
                    <ul class="list-js links-list">
                        <li class="menu-item"><a class="menu-link active" href="{{route('home')}}">الرئيسية </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{route('about')}}">معلومات عنا </a></li>
                        <li class="menu-item has-sub-menu"><a class="menu-link  " href="{{route('products')}}">منتجاتنا </a><a class="drop-down-btn" href="#"> <i class="fas fa-chevron-down down-Arrow-icon"> </i> </a>
                            <ul class="sub-menu ">

                                @forelse($products as $product)
                                    <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('product_details' , ['slug'=>$product->slug])}}">{{$product->name}}  </a></li>
                                @empty
                                @endforelse

                            </ul>
                        </li>
                        <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('projects')}}">سابقة اعمال </a></li>
                        <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('articles')}}">المقالات </a></li>
                        <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('contact_us')}}">أتصل بنا </a></li>
                        <li class="m-0 menu_info me-0 me-xl-3 mt-4 mt-xl-0">
                            <div class="call_info"><span>للإستفسار</span> <a class="d-block p-0" href="tel:{{$contact_us->phone1}}">{{$contact_us->phone1}}</a></div>
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
@include('sweetalert::alert')

