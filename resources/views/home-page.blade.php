{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative" style="background: url({{ Vite::asset('resources/images/hero/h1_hero.png') }});">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay="0.1s">Hi This is Zacson</span>
                                <h1 data-animation="fadeInLeft" data-delay="0.4s">Gym Trainer</h1>
                                <a href="courses.html" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">My Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Traning categories Start -->
    <section class="traning-categories black-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="{{ Vite::asset('resources/images/gallery/cat1.png') }}" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Personal traning</h3>
                                    <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                    <a href="courses.html" class="border-btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="{{ Vite::asset('resources/images/gallery/cat2.png') }}" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>Group traning</h3>
                                    <p>You’ll look at graphs and charts in Task One, how to approach the task and <br> the language needed for a successful answer.</p>
                                    <a href="courses.html" class="btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traning categories End-->
    <!--? Team -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2>What I Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="{{ Vite::asset('resources/images/gallery/team1.png') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Body Building</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="{{ Vite::asset('resources/images/gallery/team2.png') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Muscle Gain</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="{{ Vite::asset('resources/images/gallery/team3.png') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Weight Loss</a></h5>
                            <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30 ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{ Vite::asset('resources/images/gallery/gallery1.png') }});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{ Vite::asset('resources/images/gallery/gallery2.png') }});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{ Vite::asset('resources/images/gallery/gallery3.png') }});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{ Vite::asset('resources/images/gallery/gallery4.png') }});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{ Vite::asset('resources/images/gallery/gallery5.png') }});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{ Vite::asset('resources/images/gallery/gallery6.png') }});"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!-- Courses area start -->
    <section class="pricing-area section-padding40 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h2>Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="{{ Vite::asset('resources/images/icon/price.svg') }}" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="{{ Vite::asset('resources/images/icon/price.svg') }}" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="{{ Vite::asset('resources/images/icon/price.svg') }}" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">6 month</span>
                                <p class="mb-25">$30/m <span>(Single class)</span></p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Free riding </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Unlimited equipments</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Personal trainer</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Weight losing classes</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="{{ Vite::asset('resources/images/icon/check.svg') }}" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Month to mouth</p>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses area End -->
    <!--? About Area-2 Start -->
    <section class="about-area2 fix pb-padding pt-50 pb-80">
        <div class="support-wrapper align-items-center">
            <div class="right-content2">
                <!-- img -->
                <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <img src="{{ Vite::asset('resources/images/gallery/about.png') }}" alt="">
                </div>
            </div>
            <div class="left-content2">
                <!-- section tittle -->
                <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="front-text">
                        <h2 class="">About Me</h2>
                        <p>You’ll look at graphs and charts in Task One, how to approach the task and the language needed
                            for a successful answer. You’ll examine Task Two questions and learn how to plan, write and
                            check academic essays.</p>
                        <p class="mb-40">Task One, how to approach the task and the language needed for a successful answer. You’ll
                            examine Task Two questions and learn how to plan, write and check academic essays.</p>
                        <a href="courses.html" class="border-btn">My Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? Blog Area Start -->
    <section class="home-blog-area pt-10 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>From Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ Vite::asset('resources/images/gallery/blog1.png') }}" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>Gym & Fitness</span>
                                <h3><a href="blog_details.html">Your Antibiotic One Day To 10 Day Options</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ Vite::asset('resources/images/gallery/blog2.png') }}" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>Gym & Fitness</span>
                                <h3><a href="blog_details.html">Your Antibiotic One Day To 10 Day Options</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
    <!--? video_start -->
    <div class="video-area section-bg2 d-flex align-items-center" data-background="{{ Vite::asset('resources/images/blog/learn_about_bg.png') }}" style="background-image: url({{ Vite::asset('resources/images/blog/learn_about_bg.png') }});">
        <div class="container">
            <div class="video-wrap position-relative">
                <div class="video-icon">
                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->
    <!-- ? services-area -->
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon">
                            <img src="{{ Vite::asset('resources/images/icon/icon1.svg') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Location</h3>
                            <p>You’ll look at graphs and charts in Task One, how to approach </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                            <img src="{{ Vite::asset('resources/images/icon/icon2.svg') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Phone</h3>
                            <p>(90) 277 278 2566</p>
                            <p> (78) 267 256 2578</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                            <img src="{{ Vite::asset('resources/images/icon/icon3.svg') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Email</h3>
                            <p>jacson767@gmail.com</p>
                            <p>contact56@zacsion.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection