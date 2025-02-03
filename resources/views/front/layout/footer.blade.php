<section class="call-to-action-two py-0">
    <div class="container">
        <div class="outer-box wow d-block d-sm-flex fadeIn">
            <div class="title-box">
                <h3 class="title">متخصصون في تصميم وتنفيذ جميع اعمال الزجاج بأفضل الخامات وأحسن الأسعار</h3>
            </div>

            <div class="btn-box"><a class="theme-btn btn-style-three" href="{{route('products')}}"><span class="btn-title">خدمات اكثر</span></a></div>
        </div>
    </div>
</section>

<footer class="main-footer style-one">
    <div class="bg-image" style="background-image: url(./assets/img/5.jpg)"></div>
    <!--Widgets Section-->

    <div class="widgets-section">
        <div class="container">
            <div class="row"><!--Footer Column-->
                <div class="footer-column col-xl-3 col-sm-6">
                    <div class="footer-widget about-widget">
                        <div class="logo"><a href="{{route('home')}}"><img alt="" src="{{asset('uploads/images/setting/' . $settings->logo)}}" /></a></div>
                    </div>
                </div>
                <!--Footer Column-->

                <div class="footer-column col-xl-3 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="widget-title">خدمات</h3>

                        <ul class="user-links">
                            @forelse($products as $product)
                            <li><a href="{{route('product_details' , ['slug'=>$product->slug])}}">{{$product->name}}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
                <!--Footer Column-->

                <div class="footer-column col-xl-3 col-sm-6">
                    <div class="footer-widget gallery-widget">
                        <h3 class="widget-title">روابط</h3>

                        <ul class="user-links">
                            <li><a href="{{route('about')}}">من نحن</a></li>
                            <li><a href="{{route('contact_us')}}">اتصل بنا </a></li>
                            <li><a href="{{route('articles')}}">المقالات </a></li>
                        </ul>
                    </div>
                </div>
                <!--Footer Column-->

                <div class="footer-column col-xl-3 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="widget-title">اتصل بنا</h3>

                        <div class="widget-content">
                            <div class="subscribe-form">
                                <div class="text text-truncate">اشترك في النشرة الإخبارية لدينا للحصول على آخر التحديثات والأخبار</div>
                                <!-- <p class="text mb-2">012 Broklyn Street, 57 <br class="d-none d-xl-block"> New York, USA</p>
                                                  <p class="mb-2"><a class="text" href="mailto:needhelp@domain.com">needhelp@domain.com</a></p>
                                                  <p><a class="text-white" href="tel:9993330000">999 333 0000</a></p> -->

                                <form action="#" method="post">
                                    <div class="form-group"><input class="email" name="email" placeholder="عنوان البريد الإلكتروني" required="" type="email" value="" /><button class="theme-btn btn-style-one" type="button"></button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Bottom-->

    <div class="footer-bottom">
        <div class="container">
            <div class="inner-container">
                <div class="copyright-text">
                    <p>&copy; حقوق الطبع والنشر {{ date('Y') }} بواسطة <a href="{{route('home')}}">AAG</a></p>
                </div>

                <ul class="social-icon-two">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->

{{--<li class="facebook"><a href="{{$social->facebook}}"><i class="fa-brands fa-facebook"></i></a></li>--}}
{{--<li class="pinterest"><a href="{{$social->instagram}}"><i class="fa-brands fa-instagram"></i></a></li>--}}
{{--<li class="whatsapp"><a href="{{$social->whatsapp}}"><i class="fa-brands fa-whatsapp"></i></a></li>--}}
{{--<li class="twitter"><a href="{{$social->twitter}}"><i class="fa-brands fa-x-twitter"></i></a> </li>--}}
<div class="social-links-fixed">
    <ul class="clearfix">
        <li class="facebook"><a href="{{$social->facebook}}" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
        <li class="pinterest"><a href="{{$social->instagram}}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
        <li class="whatsapp"><a href="{{$social->whatsapp}}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
        <li class="support"><i class="fa-solid fa-bars"></i>
        </li>
        <li class="phone">
            <a class="d-block p-0" href="tel:{{ $contact_us->phone1 }}"><i class="fa-solid fa-phone"></i></a>
        </li>


    </ul>
</div>

<div class="cursor-helper">
    <div class="cursor-helper-outer"></div>

    <div class="cursor-helper-inner"></div>
</div>

@yield('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('front/assets/js/script.js')}}"></script></body>

</html>
