@extends('layout.master')
@section('content')
<!-- Title page -->
<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-05.jpg);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            من نحن
        </h2>

        <div class="flex-wr-c-c">
            <a href="/" class="breadcrumb-item">
                الرئيسة
            </a>

            <span class="breadcrumb-item">
                عنا
            </span>
        </div>
    </div>
</section>
<!--  -->
<section class="bg-0 p-t-92 p-b-60">
    <div class="container"  style="direction: rtl">
        <div class="row about-content">
            <div class="col-sm-10 col-md-12 p-b-35">
                <!-- Title section -->

                <div class="p-r-20 p-r-0-sr767">
                    <p class="t1-s-2 cl-6 m-b-10">
                        <span class="t1-s-5 cl-3">شركة أنظمة الكفاءة للتشغيل والصيانة  ( ايسمو ESMO ) تاسست لتقديم حلول للمنشات في توفير الكوادر وتسهيل عمليات التشغيل و الصيانة وفق رؤية المملكة 2030 ونهدف لدعم المنشات للقيام بمهامها على اكمل وجهة وحصلنا على النجاح في تقديم الحلول في كل احترافية و مهنية وبناء علاقات استراتيجية مع جميع القطاعات بأعلى المعايير الجودة مستثمرين تجاربنا الناجح مع شركائنا.</p>


                </div>
            </div>


        </div>
    </div>
</section>

<!-- Why chosse us -->
<section class="bg-12 p-t-92 p-b-70">
    <div class="container">

        <div class="flex-col-c-c p-b-50">
        <h3 class="t1-b-1 cl-3 txt-center m-b-11">
        قيمنا
        </h3>
        <div class="size-a-2 bg-3"></div>
        </div>

        <div class="row justify-content-center">
        <div class="col-sm-10 col-md-6 col-lg-4 p-b-30">

        <div class="block1 trans-04">
        <div class="block1-show trans-04">
        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
        <img class="symbol-dark trans-04" src="{{asset('assets/images/meeting.png')}}" alt="IMG">
        <img class="symbol-light ab-t-c op-00 trans-04" src="{{asset('assets/images/meeting.png')}}" alt="IMG">
        </div>
        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
هدفنا        </h4>
        </div>
        <div class="block1-hide flex-col-c-c p-t-8 trans-04">
        <p class="t1-s-2 cl-12 txt-center p-b-26">
            .نهدف الى تقديم الحلول المتكاملة لأعمالكم
        </p>
        <a href="#" class="flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn1 trans-02">
        اعرف اكثر
        </a>
        </div>
        </div>
        </div>
        <div class="col-sm-10 col-md-6 col-lg-4 p-b-30">

        <div class="block1 trans-04">
        <div class="block1-show trans-04">
        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
        <img class="symbol-dark trans-04" src="{{asset('assets/images/growth.png')}}" alt="IMG">
        <img class="symbol-light ab-t-c op-00 trans-04" src="{{asset('assets/images/growth.png')}}" alt="IMG">
        </div>
        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
        رسالتنا
        </h4>
        </div>
        <div class="block1-hide flex-col-c-c p-t-8 trans-04">
        <p class="t1-s-2 cl-12 txt-center p-b-26">
            .تقديم خدمات متكاملة بأعلى معايير الجودة، مستثمرين في ذلك طاقاتنا وخبراتنا
        </p>
        <a href="#" class="flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn1 trans-02">
            اعرف اكثر
        </a>
        </div>
        </div>
        </div>
       <div class="col-sm-10 col-md-6 col-lg-4 p-b-30">

        <div class="block1 trans-04">
        <div class="block1-show trans-04">
        <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
        <img class="symbol-dark trans-04" src="{{asset('assets/images/cooperation.png')}}" alt="IMG">
        <img class="symbol-light ab-t-c op-00 trans-04" src="{{asset('assets/images/cooperation.png')}}" alt="IMG">
        </div>
        <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
       رؤيتنا
        </h4>
        </div>
        <div class="block1-hide flex-col-c-c p-t-8 trans-04">
        <p class="t1-s-2 cl-12 txt-center p-b-26">
            الاحترافية والمهنية في بناء علاقات استراتيجية مع شركائنا وان نكون الاختيار الأول لعملاءنا.
        </p>
        <a href="#" class="flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn1 trans-02">
       اعرف أكثر
        </a>
        </div>
        </div>
        </div>
        </div>
        </div>

</section>

<!-- Number -->
<div class="parallax100 kit-overlay1 p-tb-38" style="background-image: url(&quot;images/bg-01.jpg&quot;); background-position: center 45.8333px;">
    <div class="container">
    <div class="row">
    <div class="col-md-3 p-tb-30">
    <div class="flex-col-c-c h-full">
        <span class="t1-b-2 cl-0 txt-center p-b-5">
        <span class="counter">85</span>%
        </span>
    <span class="t1-m-1 cl-13 txt-center text-uppercase">
    التميز
    </span>
    </div>
    </div>
    <div class="col-md-3 p-tb-30">
    <div class="flex-col-c-c h-full">
        <span class="t1-b-2 cl-0 txt-center p-b-5">
        <span class="counter">90</span>%
        </span>
    <span class="t1-m-1 cl-13 txt-center text-uppercase">
    الاحترافية
    </span>
    </div>
    </div>
    <div class="col-md-3 p-tb-30">
        <div class="flex-col-c-c h-full">
            <span class="t1-b-2 cl-0 txt-center p-b-5">
            <span class="counter">80</span>%
            </span>
        <span class="t1-m-1 cl-13 txt-center text-uppercase">
        المهنية
        </span>
        </div>
        </div>
    <div class="col-md-3 p-tb-30">
    <div class="flex-col-c-c h-full">
    <span class="t1-b-2 cl-0 txt-center p-b-5">
    <span class="counter">95</span>%
    </span>
    <span class="t1-m-1 cl-13 txt-center text-uppercase">
    الجودة
    </span>
    </div>
    </div>
    </div>
    </div>
    </div>

<!-- Team -->
<section class="bg-0 p-t-92 p-b-52">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                فريق عملنا
            </h3>

            <div class="size-a-2 bg-3"></div>
        </div>

        <!--  -->
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-5 col-lg-3 p-b-40">
                <div>
                    <div class="wrap-pic-w pos-relative">
                        <img src="{{asset('assets/images/team-01.jpg')}}" alt="IMG">

                        <div class="s-full ab-t-l flex-wr-c-c p-tb-30 hov-2">
                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex-col-c-c p-t-28">
                        <a href="#" class="t1-m-1 text-uppercase cl-3 txt-center hov-link2 trans-02 m-b-5">
                            Jessie Garcia
                        </a>

                        <span class="t1-s-5 cl-6 txt-center">
                            Sales Manager
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-3 p-b-40">
                <div>
                    <div class="wrap-pic-w pos-relative">
                        <img src="{{asset('assets/images/team-02.jpg')}}" alt="IMG">

                        <div class="s-full ab-t-l flex-wr-c-c p-tb-30 hov-2">
                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex-col-c-c p-t-28">
                        <a href="#" class="t1-m-1 text-uppercase cl-3 txt-center hov-link2 trans-02 m-b-5">
                            Charles Sims
                        </a>

                        <span class="t1-s-5 cl-6 txt-center">
                            CEO Company
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-3 p-b-40">
                <div>
                    <div class="wrap-pic-w pos-relative">
                        <img src="{{asset('assets/images/team-03.jpg')}}" alt="IMG">

                        <div class="s-full ab-t-l flex-wr-c-c p-tb-30 hov-2">
                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex-col-c-c p-t-28">
                        <a href="#" class="t1-m-1 text-uppercase cl-3 txt-center hov-link2 trans-02 m-b-5">
                            Angel Meyer
                        </a>

                        <span class="t1-s-5 cl-6 txt-center">
                            Supervisor
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-5 col-lg-3 p-b-40">
                <div>
                    <div class="wrap-pic-w pos-relative">
                        <img src="{{asset('assets/images/team-04.jpg')}}" alt="IMG">

                        <div class="s-full ab-t-l flex-wr-c-c p-tb-30 hov-2">
                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex-col-c-c p-t-28">
                        <a href="#" class="t1-m-1 text-uppercase cl-3 txt-center hov-link2 trans-02 m-b-5">
                            Ron Harper
                        </a>

                        <span class="t1-s-5 cl-6 txt-center">
                            Representative
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
