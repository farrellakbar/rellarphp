@extends('frontends.layouts.shivka')
@section('title','Home')
@section('content')
<!-- Banner Start -->
<section class="main-banner-one">
    <div class="banner-blur-one"><img src="assets/images/banner-blur1.png" alt="Blur"></div>
    <div class="banner-blur-two"><img src="assets/images/banner-blur2.png" alt="Blur"></div>
    <div class="banner-bg-line wow fadeInDown" data-wow-delay=".1.2s"><img src="assets/images/banner-bg-line.png" alt="Banner"></div>
    <div class="banner-object-one wow fadeInLeft" data-wow-delay=".8s"><img src="assets/images/banner-obect-one.png" alt="Object"></div>
    <div class="banner-object-two wow fadeInRight" data-wow-delay="1s"><img src="assets/images/banner-obect-two.png" alt="Object"></div>
    <div class="banner-bg-circle animate-this"><img src="assets/images/banner-bg-circle.png" alt="Circle"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="banner-title">
                    <h2 class="h2-subtitle wow fadeInUp" data-wow-delay=".5s">Photographer</h2>
                    <h1 class="h1-title text-black wow fadeInUp" data-wow-delay=".7s">Hey! I Am <span><img src="assets/images/hand.png" alt="Hand"></span><span>rellarphp</span></h1>
                    <p class="wow fadeInUp" data-wow-delay=".9s">I'm photographer based in Surabaya, Indonesia. <br><strong>Soaring Highs & Stay Fly!</strong></p>
                    <div class="banner-btn wow fadeInUp" data-wow-delay="1.1s">
                        <a href="{{route('aboutme')}}" class="sec-btn">let's take a closer look</a>
                        {{-- <a href="https://www.youtube.com/watch?v=yUwpx81trCo" class="banner-play-icon popup-youtube" title="Play Video"><span><img src="assets/images/play-button.png" alt="Play"></span></a> --}}
                    </div>
                    <div class="banner-social text-black wow fadeInUp" data-wow-delay="1.3s">
                        <span>Follow Me:</span>
                        <ul>
                            {{-- <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> --}}
                            <li><a href="https://instagram.com/rellarphp?igshid=OGRjNzg3M2Y="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            {{-- <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner-img-one wow fadeInUp" data-wow-delay=".5s">
                    <div class="banner-man-one">
                        <img src="assets/images/banner-man-one.png" alt="Banner">
                        <img src="assets/images/banner-line-one.png" class="banner-line-one" alt="Banner">
                        <img src="assets/images/banner-bg-one.png" class="banner-bg-one" alt="Banner">
                        <div class="aliment-box-one">
                            <div class="aliment-icon">
                                <img src="assets/images/alimnet-box-icon1.png" alt="Icon">
                            </div>
                            <div class="aliment-box-content-one">
                                <span>SONY 18-105 f/4</span>
                            </div>
                        </div>
                        <div class="aliment-box-two">
                            <div class="aliment-icon">
                                <img src="assets/images/alimnet-box-icon2.png" alt="Icon">
                            </div>
                            <div class="aliment-box-content-onw" id="counter">
                                <span>SONY A6300</span>
                                {{-- <h3 class="h3-title counting-data" data-count="25">0</h3><span>k</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!--Counter Start-->
<section class="main-counter-one">
    <div class="counter-bg jarallax" data-jarallax data-speed="0.5" style="background-image: url(assets/images/counter-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="counter-content-box">
                    <div class="counter-content">
                        <h2 class="h2-title text-white counting-data" data-count="3">0</h2>
                        <span>Moments</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="counter-content-box">
                    <div class="counter-content">
                        <h2 class="h2-title text-white counting-data" data-count="5">0</h2>
                        <span>Agendas</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="counter-content-box">
                    <div class="counter-content">
                        <h2 class="h2-title text-white counting-data" data-count="34">0</h2>
                        <span>Photos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter End-->

<!--My Agendas Start-->
<section class="main-service-one">
    <div class="object-right-one"><img src="assets/images/my-client-object-one.png" alt="Object"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".5s">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="my-client-brand-one">
                            <div class="my-client-box one">
                                <img src="assets/images/brand1.png" alt="Brand">
                            </div>
                            <div class="my-client-box one mb-0">
                                <img src="assets/images/brand2.png" alt="Brand">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="my-client-brand-one top-p">
                            <div class="my-client-box one">
                                <img src="assets/images/brand3.png" alt="Brand">
                            </div>
                            <div class="my-client-box one mb-0">
                                <img src="assets/images/brand4.png" alt="Brand">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="my-client-brand-one">
                            <div class="my-client-box one">
                                <img src="assets/images/brand5.png" alt="Brand">
                            </div>
                            <div class="my-client-box one mb-0">
                                <img src="assets/images/brand6.png" alt="Brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">
                <div class="my-client-content-one">
                    <div class="my-client-title-one">
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
                            <h2 class="h2-subtitle">My Agendas</h2>
                        </div>
                        <h2 class="h2-title text-black">I've made some unforgettable agendas</h2>
                    </div>
                    <p>Some of the agendas that I have made have added beautiful memories that will never be forgotten in the future.</p>
                    <p>Never miss out on your beautiful days or you will regret it later on.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--My Agendas End-->

<!--Moments Start-->
<section class="main-client-one mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-title-one">
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
                        <h2 class="h2-subtitle">My Work</h2>
                    </div>
                    <h2 class="h2-title text-black">See My Photos</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper portfolio-slider-one wow fadeInUp" data-wow-delay=".5s">
        <div class="swiper-wrapper">
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio1.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Concert Moment</span>
                    <span>Classical 2019</span>
                </div>
                <h3 class="h3-title">Marion Jola</h3>
                <p>Terbunuh oleh rayuan</p>
                <a href="https://www.instagram.com/p/B369ngDJ0rA/?utm_source=ig_web_copy_link" class="link-btn"><span>View Details</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio2.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Building Moment</span>
                    <span>Singapore</span>
                </div>
                <h3 class="h3-title">Marina Bay Sands</h3>
                <p>Dark days.</p>
                <a href="https://www.instagram.com/p/B2oZY6VpBu9/?utm_source=ig_web_copy_link" class="link-btn"><span>View Details</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio3.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Holiday Moment</span>
                    <span>Singapore</span>
                </div>
                <h3 class="h3-title">Children</h3>
                <p>The real happiness</p>
                <a href="https://www.instagram.com/p/B29gKsHJi97/?utm_source=ig_web_copy_link" class="link-btn"><span>View Details</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio4.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Concert Moment</span>
                    <span>Nouveau 2019</span>
                </div>
                <h3 class="h3-title">Rizky Febian</h3>
                <p>Gerak tubuhnya seolah berkata Tak cinta padaku dan tak suka padaku</p>
                <a href="https://www.instagram.com/p/B4fKxAcJEPg/?utm_source=ig_web_copy_link" class="link-btn"><span>View Details</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio5.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Building Moment</span>
                    <span>Singapore</span>
                </div>
                <h3 class="h3-title">Inside Marina Bay Sands</h3>
                <p>Let go and see of they hold on.</p>
                <a href="https://www.instagram.com/p/B6F2vp9p9ky/?utm_source=ig_web_copy_link" class="link-btn"><span>View Details</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio6.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Holiday Moment</span>
                    <span>Royal Caribbean</span>
                </div>
                <h3 class="h3-title">Ice Skating</h3>
                <p>Being happy on seeing others happy is happiness multiplied.</p>
                <a href="https://www.instagram.com/p/CASmPAvpBhR/?utm_source=ig_web_copy_link" class="link-btn"><span>View Details</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!--Moments End-->
@endsection