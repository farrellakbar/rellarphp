@extends('frontends.layouts.shivka')
@section('title','About Me')
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
                    <h1 class="h1-title text-black">About Me</h1>
                    <div class="breadcrum">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="about-us.html">About Me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner End-->

<!--About Us Start-->
<section class="main-about-us-one">
    <div class="object-right-one"><img src="assets/images/about-object-one.png" alt="Object"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-us-img-box-one wow fadeInLeft" data-wow-delay=".5s">
                    <div class="about-us-img-one">
                        <img src="assets/images/about-us-img-one.jpg" alt="About Us">
                    </div>
                    <div class="about-us-years-one-box">
                        <div class="about-year-content-one">
                            {{-- <span>25k</span> --}}
                            <span>Soaring Highs & Stay Fly!</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-content-one wow fadeInRight" data-wow-delay=".5s">
                    <div class="about-us-title-one">
                        <div class="subtitle">
                            <div class="subtitle-circle">
                                <div class="subtitle-circle-one">
                                    <div class="subtitle-circle1-one"></div>
                                    <div class="subtitle-circle2-one"></div>
                                </div>
                                <div class="subtitle-circle-two">
                                    <div class="subtitle-circle1-two"></div>
                                    <div class="subtitle-circle2-two"></div>
                                </div>
                            </div>
                            <h2 class="h2-subtitle">I'm a Photographer</h2>
                        </div>
                        <h2 class="h2-title text-black">Make your moment memorable</h2>
                    </div>
                    {{-- <p>Sed aliquet quis diam sit amet blandit. Suspendisse sagittis magna et efficitur egestas. Integer laoreet ligula eu ultrices gravida.</p> --}}
                    <div class="about-one-tab" data-aos="fade-up-left" data-aos-duration="1000">
                        <ul class="nav about-us-one-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">My Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">My Galleries</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="about-one-tab-wrapper">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="about-tab-detail-one">
                                                <span>Stage Name:</span>
                                                <span>rellarphp</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="about-tab-detail-one">
                                                <span>Instgaram Account:</span>
                                                <span>@rellarphp</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="about-tab-detail-one">
                                                <span>My Email:</span>
                                                <span>rellarphp@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="about-tab-detail-one">
                                                <span>My Location:</span>
                                                <span>Surabaya, Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="about-one-tab-wrapper" id="counter">
                                    <div class="skill-counter-box" id="progress_bar">
                                        <div class="skill-progress one">
                                            <div class="skill-bar-box one">
                                                <h3 class="h3-title">Moments</h3>
                                                <div class="skill-bar-percent tab-one">
                                                    <h3 class="h3-title counting-data" data-count="3">0</h3><span>%</span>
                                                </div>
                                                <div class="skill-bar one" data-width="100%">
                                                    <div class="skill-bar-inner skill-bar-inner one"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-progress one">
                                            <div class="skill-bar-box one">
                                                <h3 class="h3-title">Agendas</h3>
                                                <div class="skill-bar-percent tab-one">
                                                    <h3 class="h3-title counting-data" data-count="5">0</h3><span>%</span>
                                                </div>
                                                <div class="skill-bar one" data-width="100%">
                                                    <div class="skill-bar-inner skill-bar-inner one"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-progress one">
                                            <div class="skill-bar-box one mb-0">
                                                <h3 class="h3-title">Photos</h3>
                                                <div class="skill-bar-percent tab-one">
                                                    <h3 class="h3-title counting-data" data-count="34">0</h3><span>%</span>
                                                </div>
                                                <div class="skill-bar one" data-width="100%">
                                                    <div class="skill-bar-inner skill-bar-inner one"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Us End-->
@endsection