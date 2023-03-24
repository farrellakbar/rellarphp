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
                        <a href="about-us.html" class="sec-btn">let's take a closer look</a>
                        <a href="https://www.youtube.com/watch?v=yUwpx81trCo" class="banner-play-icon popup-youtube" title="Play Video"><span><img src="assets/images/play-button.png" alt="Play"></span></a>
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
                                <span>Best Design Awards</span>
                            </div>
                        </div>
                        <div class="aliment-box-two">
                            <div class="aliment-icon">
                                <img src="assets/images/alimnet-box-icon2.png" alt="Icon">
                            </div>
                            <div class="aliment-box-content-two" id="counter">
                                <span>Happy Clients</span>
                                <h3 class="h3-title counting-data" data-count="25">0</h3><span>k</span>
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
<div class="counter-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/counter-bg.png)"></div>
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


<!--Moments Start-->
<section class="main-service-one">
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
                    <h2 class="h2-title text-black">See My Moments</h2>
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
                    <span>Ui Design</span>
                    <span>BRAND IDENTITY</span>
                </div>
                <h3 class="h3-title">Project Management Dashboard</h3>
                <p>Etiam magna tellus, fermentum vel diam a, scelerisque mattis eros. Ut vestibulum sem sit amet mauris tincidunt hendrerit.</p>
                <a href="portfolio-detail.html" class="link-btn"><span>View Case Study</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio2.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Ui Design</span>
                    <span>BRAND IDENTITY</span>
                </div>
                <h3 class="h3-title">Architectural Studio Website</h3>
                <p>Etiam magna tellus, fermentum vel diam a, scelerisque mattis eros. Ut vestibulum sem sit amet mauris tincidunt hendrerit.</p>
                <a href="portfolio-detail.html" class="link-btn"><span>View Case Study</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio3.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Ui Design</span>
                    <span>BRAND IDENTITY</span>
                </div>
                <h3 class="h3-title">File Manager App</h3>
                <p>Etiam magna tellus, fermentum vel diam a, scelerisque mattis eros. Ut vestibulum sem sit amet mauris tincidunt hendrerit.</p>
                <a href="portfolio-detail.html" class="link-btn"><span>View Case Study</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio4.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Ui Design</span>
                    <span>BRAND IDENTITY</span>
                </div>
                <h3 class="h3-title">Fashion Model Landing Page</h3>
                <p>Etiam magna tellus, fermentum vel diam a, scelerisque mattis eros. Ut vestibulum sem sit amet mauris tincidunt hendrerit.</p>
                <a href="portfolio-detail.html" class="link-btn"><span>View Case Study</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="swiper-slide portfolio-box-one">
            <img src="assets/images/portfolio5.jpg" alt="Portfolio">
            <div class="portfolio-content-box-one">
                <div class="portfolio-tag-one">
                    <span>Ui Design</span>
                    <span>BRAND IDENTITY</span>
                </div>
                <h3 class="h3-title">NFT Header verson</h3>
                <p>Etiam magna tellus, fermentum vel diam a, scelerisque mattis eros. Ut vestibulum sem sit amet mauris tincidunt hendrerit.</p>
                <a href="portfolio-detail.html" class="link-btn"><span>View Case Study</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!--Moments End-->

<!--My Agendas Start-->
<section class="main-my-client-one">
    <div class="object-right-one"><img src="assets/images/my-client-object-one.png" alt="Object"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".5s">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="my-client-brand-one">
                            <div class="my-client-box one">
                                <img src="https://pbs.twimg.com/media/FWGdH3caUAEqBBR.jpg" alt="Brand">
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
@endsection