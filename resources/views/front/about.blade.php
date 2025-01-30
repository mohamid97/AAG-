@extends('front.layout.master')

@section('content')
    <div class="breadcumb-wrapper background-image" style="background-image: url('{{ asset('uploads/images/setting/' . $settings->about_breadcrumb_background) }}');">
        <h1 class="breadcumb-title">معلومات عنا</h1>

        <ul class="breadcumb-menu">
            <li><a href="index.html">الرئيسية</a></li>
            <li>معلومات عنا</li>
        </ul>
    </div>
    <!-- cursor helper --><!-- ABOUT US
        ================================================== -->

    <section class="about-5">
        <div class="container">
            <div class="row align-items-xxl-center">
                <div class="col-lg-6">
                    <div class="about-image position-relative mb-md-3 mb-lg-0"><img alt="{{$about->alt_image}}" title="{{$about->title_image}}" src="{{asset('uploads/images/about/' . $about->photo)}}" />
                        <div class="about-shape3"></div>

                        <div class="about-shape4"></div>

                        <div class="about-img-text row g-0">
                            <div class="col-sm-6">
                                <div class="d-flex p-3 p-xxl-4 h-100 bg-secondary">
                                    <div class="flex-shrink-0"></div>

                                    <div class="flex-grow-1 me-3">
                                        <h3 class="mb-0 text-white">180</h3>

                                        <p>أكثر من 180 واجهة زجاجية</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex p-3 p-xxl-4 h-100 bg-primary">
                                    <div class="flex-shrink-0"></div>

                                    <div class="flex-grow-1 me-3">
                                        <h3 class="mb-0 text-white">100</h3>

                                        <p>أكثر من 100 مشروع</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps-lg-2-9 ps-xl-6 ps-xxl-9">
                        <div class="sec-title half"><span>معلومات عنا</span>

                            <h2>{{$about->name}}</h2>
                        </div>

                        <p>{!! $about->des !!}</p>



                        <div class="row mb-1-9 mt-n1-9">
                            <div class="col-md-6 mt-1-9">
                                <div class="d-flex align-items-center align-items-lg-center">
                                    <div class="flex-shrink-0"></div>

                                    <div class="flex-grow-1 me-4">
                                        <h4>ضمان الجودة</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-1-9">
                                <div class="d-flex align-items-center align-items-lg-center">
                                    <div class="flex-shrink-0"></div>

                                    <div class="flex-grow-1 me-4">
                                        <h4>التوصيل والتركيب</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-2-3 border-top border-color-extra-light-gray d-sm-flex align-items-center"><!-- <a class="btn-style2 medium" href="about.html">معرفه المزيد</a> -->
                            <div class="d-flex align-items-center mt-4 mt-sm-0 me-sm-2-3">
                                <div class="flex-shrink-0"></div>

                                <div class="flex-grow-1 me-3">
                                    <p class="mb-0">أتصل بنا للإستفسار</p>

                                    <h4 class="h5 mb-0">(+1) 23 456 789</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CLIENTS
            ================================================== -->

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


@endsection
