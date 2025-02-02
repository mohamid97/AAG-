@extends('front.layout.master')
@section('meta_title')
    {{$settings->website_name}} |
    مشاريعنا
@endsection

@section('meta_description')
    كل الفمشاريع الخاصه ب
    {{$settings->website_name}}
@endsection
@section('content')

    <div class="breadcumb-wrapper background-image" style="background-image: url('{{ asset('uploads/images/setting/' . $settings->our_work_breadcrumb_background) }}');">
        <h1 class="breadcumb-title">مشاريعنا السابقة</h1>
        <ul class="breadcumb-menu">
            <li><a href="index.html">الرئيسية</a></li>
            <li>مشاريعنا السابقة</li>
        </ul>
    </div>





    <section class="overflow-visible pb-0 border-top">
        <div class="container-fluid">
            <div class="sec-title text-center wow fadeIn" data-wow-delay="200ms">
                <span>مشاريعنا</span>
                <h2 class="h1 mb-0 z-index-2 position-relative">أحدث مشاريعنا مذهلة</h2>
            </div>
            <div class="portfolio-style1 mb-5 row portfolio-gallery mt-n1-9 px-xl-17">



                <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="150ms" data-fancybox="">
                    @forelse($projects as $project)
                        <div class="card card-style3 border-0 rounded-0">
                            <a href="#"  data-fancybox="" data-src="assets/img/slider/4.jpeg">
                                <img src="{{asset('uploads/images/ourworks/'.$project->photo)}}" alt="Project-Image-01">
                            </a>
                            <div class="card-body">
                                <div class="portfolio-icon">
                                    <div class="top-icon">
                                        <a href="project-details.html" class="portfolio-link">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-content"><span class="text-white"> </span>

                                    <h3 class="h4"><a class="text-white" href="project-details.html">{{$project->name}}</a></h3>
                                </div>
                            </div>
                        </div>

                    @empty
                    @endforelse
                </div>



            </div>
        </div>
    </section>






@endsection
