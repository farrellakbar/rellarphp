@extends('frontends.layouts.shivka')
@section('title','Not Found')
@section('content')
<!--Banner Start-->
<section class="main-banner-in-one">
    <div class="banner-blur-one"><img src="assets/images/banner-blur1.png" alt="Blur"></div>
    <div class="banner-blur-two"><img src="assets/images/banner-blur2.png" alt="Blur"></div>
    <div class="banner-bg-line wow fadeInDown" data-wow-delay=".1.2s"><img src="assets/images/banner-bg-line.png" alt="Banner"></div>
    <div class="banner-bg-circle animate-this"><img src="assets/images/banner-bg-in-circle.png" alt="Circle"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="banner-text-in-one">
                    <h1 class="h1-title text-black">404 Error</h1>
                    <div class="breadcrum">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="404-error.html">404 Error</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!--404 Error Start-->
<section class="main-404-error-in-one">
    <div class="object-left-one ep1-one"><img src="assets/images/404-error1-in-object-one.png" alt="Object"></div>
    <div class="object-right-one ep2-one"><img src="assets/images/404-error2-in-object-one.png" alt="Object"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-404-img-one wow fadeInUp" data-wow-delay=".5s">
                    <img src="assets/images/404-error-one.png" alt="404 Error">
                </div>
                <div class="error-404-content-one">
                    <h2 class="h2-title">Sorry We Can’t Find That Page!</h2>
                    <p>The page you are looking for was moved, removed, renamed or never existed.</p>
                    <a href="index-2.html" class="sec-btn">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--404 Error End-->
@endsection