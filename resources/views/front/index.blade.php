@extends('front.layout.master')

@section('meta_title')
    {{$settings->website_name}} | Home Page
@endsection

@section('meta_description')
 This Is Home Page For {{$settings->website_name}} Website
@endsection
@section('content')

    <section class="full-screen py-0 top-position1">
        <div class="slider-fade owl-carousel owl-theme w-100">

            @forelse($sliders as $slider)
            <div class="item bg-img cover-background theme-overlay-dark-blue" data-background="{{asset('uploads/images/sliders/' . $slider->image)}}" data-overlay-dark="55"><!-- <div class="container h-100">
                        <div class="d-table w-100 h-100">
                            <div class="d-table-cell align-middle">
                                <div class="row justify-content-center text-center position-relative">
                                    <div class="col-md-10 col-lg-9 col-xl-8 z-index-3 position-relative main-banner-area">
                                        <span class="banner-icon d-none d-lg-block wow animated fadeInUp">

                                        </span>
                                        <p class="text-secondary font-weight-800 display-29 display-lg-28 display-xl-26 mb-2 text-shadow wow animated fadeInUp">
                                        كمبتكر عالمي في تخزين الطاقة.</p>
                                        <span class="card-border position-relative wow animated fadeInUp"></span>
                                        <h1 class="text-white display-19 display-sm-15 display-md-13 display-lg-4 display-xxl-5 mb-4 text-shadow wow animated fadeInUp">أكبر منتج لطاقة الرياح والطاقة الشمسية</h1>
                                        <a href="contact.html" class="btn-style2 wow animated fadeInUp">لمزيد من المعلومات </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>

              @empty

            @endforelse


        </div>
    </section>



    <section class="about-5">
        <div class="container">
            <div class="row align-items-xxl-center">
                <div class="col-lg-6">
                    <div class="about-image position-relative mb-md-3 mb-lg-0"><img alt="{{isset($about->alt_image) ? $about->alt_image : ''}}" title="{{isset($about->title_image) ? $about->title_image : ''}}" src="{{asset('uploads/images/about/' . $about->photo)}}" />
                        <div class="about-shape3"></div>

                        <div class="about-shape4"></div>

                        <div class="about-img-text row g-0">
                            <div class="col-sm-6">
                                <div class="d-flex p-3 p-xxl-4 h-100 bg-secondary">
                                    <div class="flex-shrink-0"></div>

                                    <div class="flex-grow-1 me-3">
                                        <h3 class="mb-0 text-white">180</h3>

                                        <p class="mb-0 text-white opacity9">أكثر من 180 واجهة زجاجية</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex p-3 p-xxl-4 h-100 bg-primary">
                                    <div class="flex-shrink-0"></div>

                                    <div class="flex-grow-1 me-3">
                                        <h3 class="mb-0 text-white">100</h3>

                                        <p class="mb-0 text-white opacity9">أكثر من 100 مشروع</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps-lg-2-9 ps-xl-6 ps-xxl-9">
                        <div class="sec-title half"><span>معلومات عنا</span>

                            <h2 class="h1 mb-0 z-index-2 position-relative">{{$about->name}}</h2>
                        </div>

                      <p>{!! $about->des !!}</p>

                        <div class="row mb-1-9 mt-n1-9">
                            <div class="col-md-6 mt-1-9">
                                <div class="d-flex align-items-center align-items-lg-center">
                                    <div class="flex-shrink-0"></div>

                                    <div class="flex-grow-1 me-4">
                                        <h4 class="mb-0 h5">ضمان الجودة</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-1-9">
                                <div class="d-flex align-items-center align-items-lg-center">
                                    <div class="flex-shrink-0"></div>

                                    <div class="flex-grow-1 me-4">
                                        <h4 class="mb-0 h5">التوصيل والتركيب</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-2-3 border-top border-color-extra-light-gray d-sm-flex align-items-center">
                            <a class="btn-style2 medium" href="{{route('about')}}">معرفه المزيد</a>

                            <div class="d-flex align-items-center mt-4 mt-sm-0 me-sm-2-3">
                                <div class="flex-shrink-0"></div>

                                <div class="flex-grow-1 me-3">
                                    <p class="mb-0">أتصل بنا للإستفسار</p>

                                    <h4 class="h5 mb-0">{{$contact_us->phone1}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="bg-light">
        <div class="container">
            <div class="sec-title text-center wow fadeIn" data-wow-delay="200ms"><span>خدماتنا</span>

                <h2 class="h1 mb-0 z-index-2 position-relative">منتجاتنا</h2>
            </div>

            <div class="row mt-n7 gx-xxl-5">
                @foreach($products->take(6) as $product)
                <div class="col-md-6 col-lg-4 mt-15 wow fadeIn" data-wow-delay="200ms">
                    <div class="card card-style1 border-0 bg-img rounded-0 cover-background overflow-visible" data-background="{{ asset('uploads/images/gallery/' . (isset($product->gallery) && count($product->gallery) > 0 ? $product->gallery[0]->photo : 'test')) }}">
                        <div class="text-center card-body p-1-9 z-index-3 position-relative">

                            <h3 class="mb-3 h4"><a href="{{route('product_details' , ['slug'=>$product->slug])}}"> {{$product->name}}  </a></h3>

                            <p class="mt-7">{!! substr($product->des , 0 , 20 ) !!} </p>
                        </div>

                        <div class="card-footer justify-content-between align-items-center d-flex px-1-9 py-3 rounded-0 z-index-3 position-relative"><a href="{{route('product_details' , ['slug'=>$product->slug])}}">لمزيد من المعلومات </a> <a href="services-details.html"> </a></div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
      <div style="display: flex;align-items: center;justify-content: center;margin-top: 50px">
          <a class="btn-style2 medium" href="{{route('products')}}"> المزيد
          </a>
      </div>


    </section>





    <section class="overflow-visible pb-0 border-top">
        <div class="container-fluid">
            <div class="sec-title text-center wow fadeIn" data-wow-delay="200ms"><span>مشاريعنا</span>

                <h2 class="h1 mb-0 z-index-2 position-relative">أحدث مشاريعنا مذهلة</h2>
            </div>

            <div class="portfolio-style1 mb-5 row portfolio-gallery mt-n1-9 px-xl-17">

                @forelse($projects as $project)
                <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-fancybox="" data-src="{{asset('uploads/images/ourworks/'.$project->photo)}}" data-wow-delay="150ms">
                    <div class="card card-style3 border-0 rounded-0"><a data-fancybox="" data-src="{{asset('uploads/images/ourworks/'.$project->photo)}}" href="#"><img alt="Project-Image-01" src="{{asset('uploads/images/ourworks/'.$project->photo)}}" /> </a>

                        <div class="card-body">
                            <div class="portfolio-icon">
                                <div class="top-icon">
                                    <a href="{{asset('uploads/images/ourworks/'.$project->photo)}}" class="portfolio-link">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="portfolio-content"><span class="text-white"> </span>

                                <h3 class="h4"><a class="text-white" href="project-details.html">{{$project->name}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse


            </div>
        </div>
    </section>







    <section class="bg-off-white pt-20 pt-lg-24">
        <div class="d-none d-xxl-block d-inline-block py-1-6 px-3 bg-white bottom-25 position-absolute call-to-action-shape1"></div>

        <div class="d-none d-xxl-block position-absolute top-60 call-to-action-shape2"></div>

        <div class="container">
            <div class="client-carousel owl-carousel owl-theme">

                @forelse($clients as $client)
                <div class="text-center"><img alt="..." src="{{asset('uploads/images/clients/' . $client->icon)}}" /></div>
                @empty
                @endforelse


            </div>
        </div>
    </section>







    <section class="news-section">
        <div class="container">
            <div class="sec-title text-center"><span class="sub-title">اخر اخبارنا</span>

                <h2>آخر الأخبار والمقالات</h2>
            </div>

            <div class="row">

                @forelse($articles as $article)

                    <div class="news-block col-lg-4 col-sm-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{route('article_details' , ['slug'=>$article->slug])}}"><img src="{{ asset('uploads/images/cms/' . $article->image) }}" alt=""></a>
                                </figure>
                                <span class="date">
                                    <b>{{ $article->created_at->format('d') }}</b> {{ $article->created_at->format('M') }}
                                </span>
                            </div>
                            <div class="lower-content">
                                <h4 class="title"><a href="{{route('article_details' , ['slug'=>$article->slug])}}">{{ $article->name }}</a></h4>
                            </div>
                        </div>
                    </div>

                @empty
                    <p>لا توجد مقالات لعرضها.</p>
                @endforelse


            </div>



        </div>

        <div style="display: flex;align-items: center;justify-content: center;margin-top: 50px">
            <a class="btn-style2 medium" href="{{route('articles')}}"> المزيد
            </a>
        </div>
    </section>





























@endsection
