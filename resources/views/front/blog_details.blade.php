@extends('front.layout.master')

@section('content')


    <!--end Page Header-->
    <div class="breadcumb-wrapper background-image" style="background-image: url('{{ asset('uploads/images/setting/' . $settings->blog_details_breadcrumb_background) }}');">
        <h1 class="breadcumb-title">{{$article->name}} </h1>
        <ul class="breadcumb-menu">
            <li><a href="index.html">الرئيسية</a></li>
            <li>تفاصيل المقالة</li>
        </ul>
    </div>

    <!-- cursor helper -->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-single">

                        <div class="page-img"><img class="w-100" src="{{asset('uploads/images/cms/' . $article->image)}}" alt="{{$article->title_image}}"></div>
                        <h3 class="single-title"> {{$article->name}}</h3>
                        <div class="service-content">
                            {!! $article->des !!}

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">أخر المقالات</h3>
                            <ul>
                                @forelse($articles as $ar)
                                    <li><a href="{{route( 'article_details', ['slug'=>$ar->slug])}}">{{$ar->name}}</a></li>

                                @empty
                                @endforelse
                            </ul>
                        </div>

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
