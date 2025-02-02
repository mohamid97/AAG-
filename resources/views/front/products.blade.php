@extends('front.layout.master')
@section('styles')
    <style>
        .pagination-container {
            text-align: center;
            direction: rtl; /* Ensure RTL layout */
            margin: 20px 0;
        }

        .pagination-container a, .pagination-container span {
            display: inline-block;
            padding: 10px 15px;
            margin: 5px;
            background-color: #f1f1f1;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }

        .pagination-container a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .pagination-container .disabled {
            background-color: #e0e0e0;
            color: #aaa;
        }

        .pagination-container .current {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }


    </style>
@endsection
@section('content')


    <div class="breadcumb-wrapper background-image" style="background-image: url('{{ asset('uploads/images/setting/' . $settings->services_breadcrumb_background) }}');">
    <h1 class="breadcumb-title">منتجاتنا</h1>

    <ul class="breadcumb-menu">
        <li><a href="index.html">الرئيسية</a></li>
        <li>منتجاتنا</li>
    </ul>
</div>
<!-- cursor helper --><!-- OUR SERVICES
        ================================================== -->

<section class="bg-light">
    <div class="container">
        <div class="sec-title text-center wow fadeIn" data-wow-delay="200ms"><span>خدماتنا</span>

            <h2 class="h1 mb-0 z-index-2 position-relative">منتجاتنا</h2>
        </div>


        <div class="row mt-n7 gx-xxl-5">

            @forelse($paginate_products as $product)

            <div class="col-md-6 col-lg-4 mt-15 wow fadeIn" data-wow-delay="200ms">
                <div class="card card-style1 border-0 bg-img rounded-0 cover-background overflow-visible" data-background="{{ asset('uploads/images/gallery/' . (isset($product->gallery) && count($product->gallery) > 0 ? $product->gallery[0]->photo : 'test')) }}"
                >
                    <div class="text-center card-body p-1-9 z-index-3 position-relative">

                        <h3 class="mb-3 h4"><a href="services-details.html"> {{$product->name}}  </a> </h3>

                        <p class="mt-7"> {!! substr($product->des , 0 ,  20 ) !!} </p>
                    </div>

                    <div class="card-footer justify-content-between align-items-center d-flex px-1-9 py-3 rounded-0 z-index-3 position-relative"><a href="{{route('product_details' , ['slug'=>$product->slug])}}">لمزيد من المعلومات </a> <a href="services-details.html"> </a></div>
                </div>
            </div>

            @empty
            لا يوجد خدمات

            @endforelse
                <div class="pagination-container">
                {{ $paginate_products->links('pagination.custom-pagination') }} <!-- Use your custom pagination view -->
                </div>





        </div>
    </div>
</section>




    <section class="overflow-visible pb-0 border-top">
        <div class="container-fluid">
            <div class="sec-title text-center wow fadeIn" data-wow-delay="200ms"><span>مشاريعنا</span>

                <h2 class="h1 mb-0 z-index-2 position-relative">أحدث مشاريعنا مذهلة</h2>
            </div>

            <div class="portfolio-style1 mb-5 row portfolio-gallery mt-n1-9 px-xl-17">
                <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-fancybox="" data-src="assets/img/slider/4.jpeg" data-wow-delay="150ms">
                    <div class="card card-style3 border-0 rounded-0"><a data-fancybox="" data-src="assets/img/slider/4.jpeg" href="#"><img alt="Project-Image-01" src="assets/img/slider/4.jpeg" /> </a>

                        <div class="card-body">
                            <div class="portfolio-icon">
                                <div class="top-icon"></div>
                            </div>

                            <div class="portfolio-content"><span class="text-white">كبائن الشاور</span>

                                <h3 class="h4"><a class="text-white" href="project-details.html">Shower Room</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="300ms">
                    <div class="card card-style3 border-0 rounded-0"><a data-fancybox="" data-src="assets/img/slider/4.jpeg" href="#"><img alt="Project-Image-01" src="assets/img/slider/4.jpeg" /> </a>

                        <div class="card-body">
                            <div class="portfolio-icon">
                                <div class="top-icon"></div>
                            </div>

                            <div class="portfolio-content">هاندريل زجاجي
                                <h3 class="h4"><a class="text-white" href="project-details.html">هاندريل زجاجي</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="450ms">
                    <div class="card card-style3 border-0 rounded-0"><a data-fancybox="" data-src="assets/img/slider/4.jpeg" href="#"><img alt="Project-Image-01" src="assets/img/slider/4.jpeg" /> </a>

                        <div class="card-body">
                            <div class="portfolio-icon">
                                <div class="top-icon"></div>
                            </div>

                            <div class="portfolio-content"><span class="text-white">واجهات زجاجية</span>

                                <h3 class="h4"><a class="text-white" href="project-details.html">واجهات زجاجية</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                    <div class="card card-style3 border-0 rounded-0"><a data-fancybox="" data-src="assets/img/slider/4.jpeg" href="#"><img alt="Project-Image-01" src="assets/img/slider/4.jpeg" /> </a>

                        <div class="card-body">
                            <div class="portfolio-icon">
                                <div class="top-icon"></div>
                            </div>

                            <div class="portfolio-content"><span class="text-white">Commercial </span>

                                <h3 class="h4"><a class="text-white" href="project-details.html">سهلة التركيب</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
