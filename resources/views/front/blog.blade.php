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

    <div class="breadcumb-wrapper background-image" style="background-image: url('{{ asset('uploads/images/setting/' . $settings->blog_breadcrumb_background) }}');">
        <h1 class="breadcumb-title">المقالات</h1>
        <ul class="breadcumb-menu">
            <li><a href="index.html">الرئيسية</a></li>
            <li>المقالات</li>
        </ul>
    </div>

    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <div class="sec-title text-center">
                <span class="sub-title">اخر اخبارنا</span>
                <h2>آخر الأخبار والمقالات</h2>
            </div>
            <div class="row">
                <!-- News Block -->
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

            <!-- Custom Pagination -->
                <div class="pagination-container">
                {{ $articles->links('pagination.custom-pagination') }} <!-- Use your custom pagination view -->
                </div>
            </div>
        </div>
    </section>

@endsection
