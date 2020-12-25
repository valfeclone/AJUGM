@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Sadewa
@endsection

@section('content')
<div class="lomba">
    <section class="museum-banner z-min">
        <img src="{{ asset('images/museum.png')}}" alt="" class="landing-banner__image">
        <div class="media-container museum-banner__media-container">
            <img src="/images/SADEWA.png" class="media media-left museum-banner__media z-max"/>

            <!-- <img src="{{ asset('assets/Path 25.png') }}" alt="" class="museum-banner__geometry--triangle z-min"> -->

            <div class="media__content">
                <div class="museum-banner__media-heading adaptive">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">Sadewa</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="museum-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Sayembara Dewa Pariwara (Sadewa) merupakan mata lomba Festival Ajisaka 2020+ yang berfokus pada bidang periklanan. Membawa tema besar dari Festival Ajisaka 2020+, Sadewa mengangkat isu “<i>Disaster Risk Reduction</i>”. Terdapat empat kategori lomba dalam Sadewa yang meliputi Brand Book, Skip Ad, Social Media Activation, dan Unconventional Media. Melalui keempat kategori tersebut, insan kreatif ditantang untuk mengeluarkan inovasi dan kreativitasnya.</p>
            </div>
        </div>
    </section>

<section class="lomba-desc media-container z-max">
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
        <div class="media__content lomba-desc__media-content lomba-desc__media-content--right">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Brand Book</h3>
            <p class="text-regular">Brand Book meminta insan kreatif untuk merancang brand identity dari suatu brand dan merangkumnya dalam sebuah brand book. Insan kreatif ditantang untuk menunjukkan kemampuan branding dan desain mereka.</p>
        </div>
    </section>

    <section class="lomba-desc media-container z-max">
        <div class="media__content lomba-desc__media-content">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Skip Ad</h3>
            <p class="text-regular">Skip Ad mengajak insan kreatif untuk membuat Video Ads yang nantinya akan ditayangkan sebagai Skippable Ads di platform YouTube. Dengan audiens yang bisa melewati iklan setelah lima detik pertama, insan kreatif ditantang untuk membuat iklan yang bisa menangkap atensi audiens.</p>
        </div>
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-right lomba-desc__video lomba-desc__media--right">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
    </section>

    <section class="lomba-desc media-container z-max">
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
        <div class="media__content lomba-desc__media-content lomba-desc__media-content--right">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Social Media Activation</h3>
            <p class="text-regular">Social Media Activation meminta insan kreatif untuk membuat sebuah kampanye yang akan dijalankan di media sosial. Insan kreatif ditantang untuk membuat kampanye yang berbasiskan riset dengan ide yang kreatif dan inovatif.</p>
        </div>
    </section>

    <section class="lomba-desc media-container z-max">
        <div class="media__content lomba-desc__media-content">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Unconventional Media</h3>
            <p class="text-regular">Unconventional Media mengajak insan kreatif untuk merancang kampanye dengan media yang tidak konvensional. Insan kreatif ditantang untuk berpikir outside the box untuk merancang strategi yang efektif dengan media yang tidak terpikirkan sebelumnya.</p>
        </div>
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-right lomba-desc__video lomba-desc__media--right">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
    </section>
        </div>
    </section>

</div>
@endsection