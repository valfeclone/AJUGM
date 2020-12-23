@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Nakula
@endsection

@section('content')
<div class="lomba">
    <section class="museum-banner">
        <div class="media-container museum-banner__media-container">
            <img src="https://dummyimage.com/400x400/fff/fff.png&text=X" class="media media-left museum-banner__media z-max"/>

            <img src="{{ asset('assets/Path 25.png') }}" alt="" class="museum-banner__geometry--triangle z-min">

            <div class="media__content">
                <div class="museum-banner__media-heading adaptive">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">Nakula</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="museum-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Nakula (Penelitian Kawula Muda) merupakan salah satu mata lomba di Festival Ajisaka 2020+ yang berfokus pada bidang penelitian. Pada Festival Ajisaka 2020+, Nakula mengangkat subtema “Temukan Solusi Bencana dengan Komunikasi”. Terdapat dua kategori dalam mata lomba Nakula yang meliputi Riset Konvensional dan Riset Fun. Melalui dua kategori tersebut, para insan kreatif diharapkan dapat menemukan solusi dari bencana yang ada.</p>
            </div>
        </div>
    </section>

    @for($i = 0; $i < 3; $i++)
    <section class="lomba-desc">
        @if ($i % 2 != 0)
        <div class="media__content width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Nakula</h3>
            <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore error veritatis eligendi ullam harum porro aliquid quam distinctio provident nobis. Sapiente blanditiis odit, rem totam laudantium consectetur officia sequi excepturi?</p>
        </div>

        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video margin-left-xl">
        @else
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video">

        <div class="media__content margin-left-xl width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Product Name</h3>
            <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore error veritatis eligendi ullam harum porro aliquid quam distinctio provident nobis. Sapiente blanditiis odit, rem totam laudantium consectetur officia sequi excepturi?</p>
        </div>
        @endif
    </section>
    @endfor

</div>
@endsection