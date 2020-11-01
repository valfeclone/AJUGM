@extends('layouts.base')

@section('meta-title')
    Home
@endsection

@section('content')
    <div class="landing">
        <section class="landing-banner">
            <img src="/images/balairung.png" alt="" class="landing-banner__image">
            <img src="/assets/Ellipse 6.png" alt="" class="landing-banner__geometry--blue">
            <div class="landing-banner__content">
                <div id="carouselExampleControls" class="carousel slide margin-bottom-xl" data-ride="carousel">
                    <div class="carousel-inner landing-banner__carousel-inner">
                        <div class="carousel-item active">
                            <div class="landing-banner__carousel-text">
                                <h1 class="heading-caps text-white">Virtual Museum</h1>
                                <p class="text-regular text-black width-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, explicabo! Dolorem soluta facere sit, in accusamus dolores! Ipsam veniam cumque consequatur dolores quibusdam a, magni quia tempore animi, necessitatibus, vel praesentium explicabo. Reiciendis dolores totam corrupti temporibus ab, quis debitis.</p>
                                <a href="#" class="link-item"><p class="text-bold text-white">Learn More .</p></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="landing-banner__carousel-text">
                                <h1 class="heading-caps text-white">Virtual Museum</h1>
                                <p class="text-regular text-black width-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, explicabo! Dolorem soluta facere sit, in accusamus dolores! Ipsam veniam cumque consequatur dolores quibusdam a, magni quia tempore animi, necessitatibus, vel praesentium explicabo. Reiciendis dolores totam corrupti temporibus ab, quis debitis.</p>
                                <a href="#" class="link-item"><p class="text-bold text-white">Learn More .</p></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="landing-banner__carousel-text">
                                <h1 class="heading-caps text-white">Virtual Museum</h1>
                                <p class="text-regular text-black width-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, explicabo! Dolorem soluta facere sit, in accusamus dolores! Ipsam veniam cumque consequatur dolores quibusdam a, magni quia tempore animi, necessitatibus, vel praesentium explicabo. Reiciendis dolores totam corrupti temporibus ab, quis debitis.</p>
                                <a href="#" class="link-item"><p class="text-bold text-white">Learn More .</p></a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <img src="/assets/Group 72.png" alt="" class="landing-banner__geometry--red">
            </div>
        </section>

        <section class="landing-about">
            <div class="landing-about__content">
                <div class="landing-about__media-container">
                    <img src="/images/video-image.png" alt="" class="media media-left landing-about__video">
                    <img src="/assets/Group 71.png" alt="" class="landing-about__geometry--red-circle">
                </div>
                <div class="media__content margin-left-xl">
                    <h3 class="heading-3 text-black text-uppercase landing-about__about-text margin-bottom-s">About Ajisaka</h3>
                    <p class="text-regular margin-bottom-m">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo fuga reiciendis maiores temporibus officiis qui corporis sed? Placeat, sit quae odit sequi aperiam aut. Doloribus obcaecati sunt perferendis nam asperiores dolores eos repellendus.</p>
                    <a href="#" class="link align-self-start"><h3 class="heading-3 text-black">Learn more .</h3></a>
                </div>
            </div>
            <img src="/assets/Group 70.png" alt="" class="landing-about__geometry--blue-wave">
            <img src="/assets/Group 73.png" alt="" class="landing-about__geometry--white-circle">
        </section>

        <section class="landing-matlom">
            <div class="landing-matlom__content">
                <h2 class="heading-2 text-black text-uppercase margin-bottom-l">Mata Lomba Ajisaka</h2>
                <div class="card-wrapper card-wrapper--grid-m">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="card card-m">
                        <!-- <img src="/images/Rectangle 4.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s"> -->
                        <div class="card__image landing-matlom__card-image margin-bottom-s">
                        </div>
                        <p class="text-bold margin-bottom-xs">Great UI kit</p>
                        <p class="text-regular margin-bottom-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa alias facilis dolores.</p>
                        <a href="#" class="link"><p class="text-bold text-black">Learn more .</p></a>
                    </div>
                    @endfor
                </div>
            </div>
            <img src="/assets/Group 68.png" alt="" class="landing-matlom__geometry--dots">
            <img src="/assets/Ellipse 8.png" alt="" class="landing-matlom__geometry--circle">
            <img src="/assets/Rectangle 12.png" alt="" class="landing-matlom__geometry--rectangle">
        </section>

        <section class="landing-register">
            <div class="landing-register__content">
                <h2 class="heading-2 text-black margin-bottom-l">How to Register?</h2>
                <div class="card-wrapper--flex margin-bottom-s landing-register__card-wrapper">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="card card-s landing-register__card">
                        <!-- <img src="/images/Rectangle 4.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s"> -->
                        <div class="card__image landing-register__card-image margin-bottom-m">
                        </div>
                        <h3 class="heading-3 text-grey margin-bottom-s">Step {{$i + 1}}</p>
                        <p class="text-regular">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <img src="/assets/Arrow.png" alt="" class="landing-register__arrow">
                    @endfor
                    <div class="card card-s landing-register__card">
                        <!-- <img src="/images/Rectangle 4.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s"> -->
                        <div class="card__image landing-register__card-image margin-bottom-m">
                        </div>
                        <h3 class="heading-3 text-grey margin-bottom-s">Step {{$i + 1}}</p>
                        <p class="text-regular">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <img src="/assets/Path 57.png" alt="" class="landing-register__geometry--boxes">
                </div>
                <a href="#" class="link"><p class="text-bold text-black">Learn more .</p></a>
            </div>
            <img src="/assets/Ellipse 8.png" alt="" class="landing-register__geometry--circle">
            <img src="/assets/Path 25.png" alt="" class="landing-register__geometry--triangle">
        </section>
    </div>
@endsection