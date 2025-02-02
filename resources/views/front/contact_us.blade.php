@extends('front.layout.master')
@section('meta_title')
    {{ $settings->website_name }} | {{ strip_tags(isset($contact_us->meta_title) ? $contact_us->meta_title : 'اتصل بنا') }}
@endsection

@section('meta_description')
    {{ strip_tags(isset($contact_us->meta_des) ? $contact_us->meta_des : $contact_us->des) }}
@endsection

@section('content')




    <div class="breadcumb-wrapper background-image" style="background-image: url('{{ asset('uploads/images/setting/' . $settings->contact_breadcrumb_background) }}');">
        <h1 class="breadcumb-title">اتصل بنا</h1>

        <ul class="breadcumb-menu">
            <li><a href="index.html">الرئيسية</a></li>
            <li>اتصل بنا</li>
        </ul>
    </div>
    <!-- cursor helper -->


    <section class="contact-sec pt-80 pb-80">
        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <div class="topic">العنوان</div>

                        <div class="text-one">8 ش ابن المعتز - عمار بن ياسر - ميدان الحجاز - مصر الجديدة - القاهرة</div>
                    </div>

                    <div class="phone details">
                        <div class="topic">رقم الهاتف</div>

                        <div class="text-one">{{ isset($contact_us->phone1) ? $contact_us->phone1 : null}}</div>

                        <div class="text-two">{{ isset($contact_us->phone2) ? $contact_us->phone2 : null}}</div>
                    </div>

                    <div class="email details">
                        <div class="topic">البريد الألكتروني</div>

                        <div class="text-one">{{ isset($contact_us->email) ? $contact_us->email : null}}</div>
                    </div>
                </div>

                <div class="right-side">
                    <h1 class="topic-text">أتصل بنـــا</h1>

                    <p>إذا كان لديك أي عمل مني أو أي نوع من الاستفسارات المتعلقة بالخدمات الخاص بنا، يمكنك أن ترسل لي رسالة من هنا. إنه لمن دواعي سروري أن أساعدك.</p>

                    <form action="{{route('send_message')}}"  method="post">
                        @csrf
                        <div class="input-box">
                            <input name="name" value="{{ old('name') }}" placeholder="الإسم*" type="text" />
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني" type="text" />
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input name="phone" value="{{ old('phone') }}" placeholder="رقم الهاتف*" required type="tel" />
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div >
                            <textarea name="message" class="message-box input-box" placeholder="رسالتك *">{{ old('message') }}</textarea>
                            @error('message')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="button ">
                            <button class="btn-style2 medium" type="submit">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>





@endsection
