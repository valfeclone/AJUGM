@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Kresna
@endsection

@section('content')
<div class="lomba">
    <section class="museum-banner z-min">
        <img src="{{ asset('images/museum.png')}}" alt="" class="landing-banner__image">
        <div class="media-container museum-banner__media-container">
            <img src="https://dummyimage.com/400x400/fff/fff.png&text=X" class="media media-left museum-banner__media z-max"/>

            <img src="{{ asset('assets/Path 25.png') }}" alt="" class="museum-banner__geometry--triangle z-min">

            <div class="media__content">
                <div class="museum-banner__media-heading adaptive">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">Kresna</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="museum-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, exercitationem? Odio ullam eos culpa, consequuntur reiciendis nostrum odit quod consequatur, laborum delectus voluptatum facilis. Blanditiis repellendus natus dolorum amet corrupti.</p>
            </div>
        </div>
    </section>

    @for($i = 0; $i < 3; $i++)
    <section class="lomba-desc media-container z-max">
        @if ($i % 2 != 0)
        <div class="media__content lomba-desc__media-content">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Product Name</h3>
            <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore error veritatis eligendi ullam harum porro aliquid quam distinctio provident nobis. Sapiente blanditiis odit, rem totam laudantium consectetur officia sequi excepturi?</p>
        </div>

        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-right lomba-desc__video lomba-desc__media--right">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
        @else
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video">

        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->

        <div class="media__content lomba-desc__media-content lomba-desc__media-content--right">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Product Name</h3>
            <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore error veritatis eligendi ullam harum porro aliquid quam distinctio provident nobis. Sapiente blanditiis odit, rem totam laudantium consectetur officia sequi excepturi?</p>
        </div>
        @endif
    </section>
    @endfor

</div>
@endsection