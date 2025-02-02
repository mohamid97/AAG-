@extends('front.layout.master')
@section('meta_title')
    {{ $settings->website_name }} | {{ isset($product->meta_title) ? strip_tags($product->meta_title) : strip_tags($product->des) }}
@endsection

@section('meta_description')
    {{ strip_tags(isset($product->meta_des) ? $product->meta_des : $product->des) }}
@endsection


@section('styles')

    <div class="breadcumb-wrapper background-image" style="background-image: url('{{ asset('uploads/images/setting/' . $settings->service_details_breadcrumb_background) }}');">
        <h1 class="breadcumb-title">تفاصيل المنتج</h1>
        <ul class="breadcumb-menu">
            <li><a href="index.html">الرئيسية</a></li>
            <li>تفاصيل المنتج</li>
        </ul>
    </div>

    <!-- cursor helper -->

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-single">
                        <div class="page-img"><img class="w-100" src="{{ asset('uploads/images/gallery/' . (isset($product->gallery) && count($product->gallery) > 0 ? $product->gallery[0]->photo : 'test')) }}" alt="Service Image"></div>
                        <h3 class="single-title"> {{$product->name}} </h3>
                        <div class="service-content">

                            {!! $product->des !!}

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
{{--                        <div class="widget widget_search">--}}
{{--                            <form class="search-form"><input type="text" placeholder="البحث..."> <button type="submit"><i class="fas fa-search"></i></button></form>--}}
{{--                        </div>--}}
                        <div class="widget widget_categories">
                            <h3 class="widget_title">التصنيفات</h3>
                            <ul>
                                @forelse($products as $product)
                                    <li><a href="{{route('product_details'  , ['slug'=>$product->slug])}}">{{$product->name}}  </a></li>

                                @empty
                                @endforelse
                            </ul>
                        </div>
{{--                        <div class="widget widget_download">--}}
{{--                            <h4 class="widget_title">تحميل</h4>--}}
{{--                            <div class="donwload-media-wrap">--}}
{{--                                <div class="download-media">--}}
{{--                                    <div class="download-media_icon"><i class="fas fa-file-pdf"></i></div>--}}
{{--                                    <div class="download-media_info">--}}
{{--                                        <h5 class="download-media_title">كاتالوج</h5><span class="download-media_text">تحميل</span>--}}
{{--                                    </div><a href="about.html" class="download-media_btn"><i class="fas fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="download-media">--}}
{{--                                    <div class="download-media_icon"><i class="fas fa-file-lines"></i></div>--}}
{{--                                    <div class="download-media_info">--}}
{{--                                        <h5 class="download-media_title">تفاصيل الشركة</h5><span class="download-media_text">تحميل</span>--}}
{{--                                    </div><a href="about.html" class="download-media_btn"><i class="fas fa-arrow-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="widget">--}}
{{--                            <div class="widget-banner">--}}
{{--                                <h4 class="title background-image" style="background-image: url(&quot;img/slider/1.jpeg&quot;);">أفضل--}}
{{--                                    الهندسة<br><span class="text-transparent">خدمات</span></h4>--}}
{{--                                <div class="content"><a href="tel:+12345678900" class="link"><i class="fas fa-phone"></i>(123)--}}
{{--                                        4567 8900</a>--}}
{{--                                    <p class="text">الإثنين - الجمعة: 7:00 صباحًا - 8:00 مساءً خدمة الطوارئ على مدار الساعة طوال أيام الأسبوع</p><a href="about.html" class="link-btn">من نحن</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </aside>
                </div>

            </div>
        </div>
    </section>




@endsection
