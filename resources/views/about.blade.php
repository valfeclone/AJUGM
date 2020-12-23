@extends('layouts.base')

@section('meta-title') 
    Ajisaka | About
@endsection

@section('content')
<div class="about">
    <div class="market-banner">
        <div class="media-container market-banner__media-container">
            <img src="https://dummyimage.com/400x400/fff/fff.png&text=X" class="media media-left market-banner__media z-max"/>

            <img src="{{ asset('assets/Path 25.png') }}" alt="" class="market-banner__geometry--triangle z-min">

            <div class="media__content">
                <div class="market-banner__media-heading adaptive">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">About</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="market-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, exercitationem? Odio ullam eos culpa, consequuntur reiciendis nostrum odit quod consequatur, laborum delectus voluptatum facilis. Blanditiis repellendus natus dolorum amet corrupti.</p>
            </div>
        </div>
    </div>

    <section class="about-section">
        <div class="about-section__content media-container">
            <img src="https://dummyimage.com/400x400/fff/fff.png&text=X" alt="" class="media media-left">

            <div class="media__content">
                <h1 class="heading-caps text-black margin-bottom-s width-max">Our Team</h1>
                <p class="text-regular text-black" style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, exercitationem? Odio ullam eos culpa, consequuntur reiciendis nostrum odit quod consequatur, laborum delectus voluptatum facilis. Blanditiis repellendus natus dolorum amet corrupti.</p>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="about-section__content column">
            <h1 class="heading-caps text-black margin-bottom-l text-center">Gallery</h1>

            <div class="card-wrapper--grid-s">
                @for ($i = 0; $i < 6; $i++)
                    <img src="https://dummyimage.com/300x200/fff/fff.png&text=X" alt="" class="card__image card__image--gallery">
                @endfor
            </div>
        </div>
    </section>
</div>
@endsection