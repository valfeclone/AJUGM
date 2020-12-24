@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Webinar
@endsection

@section('content')
<div class="webinar">
    <section class="webinar-banner z-min">
        <img src="{{ asset('images/museum.png')}}" alt="" class="landing-banner__image">
        <div class="media-container webinar-banner__media-container">
            <img src="https://dummyimage.com/400x400/fff/fff.png&text=X" class="media media-left webinar-banner__media z-max"/>

            <img src="{{ asset('assets/Path 25.png') }}" alt="" class="webinar-banner__geometry--triangle z-min">

            <div class="media__content webinar__media-content z-mid">
                <div class="webinar-banner__media-heading adaptive">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">Webinar</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="webinar-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, exercitationem? Odio ullam eos culpa, consequuntur reiciendis nostrum odit quod consequatur, laborum delectus voluptatum facilis. Blanditiis repellendus natus dolorum amet corrupti.</p>
            </div>
        </div>
    </section>

    <section class="webinar__video-container z-max">

        <!-- <img src="{{ asset('images/video-image.png') }}" alt="" class="webinar__video" style="width: 640px; height: 480px"> -->

        <video class="webinar__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video>
    </section>
</div>
@endsection