@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Arjuna
@endsection

@section('content')
<div class="lomba">
    <section class="museum-banner z-min">
        <img src="{{ asset('images/museum.png')}}" alt="" class="landing-banner__image">
        <div class="media-container museum-banner__media-container">
            <img src="/images/ARJUNA.png" class="media media-left museum-banner__media z-max"/>

            <!-- <img src="{{ asset('assets/Path 25.png') }}" alt="" class="museum-banner__geometry--triangle z-min"> -->

            <div class="media__content">
                <div class="museum-banner__media-heading adaptive">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">Arjuna</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="museum-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Ajang Citra Sejuta Warna (Arjuna) merupakan mata lomba Festival Ajisaka 2020+ yang berfokus pada bidang jurnalistik. Terdapat tiga kategori dalam Arjuna yang meliputi Comic Strip, Homeless Media, dan Podcast. Melalui tiga kategori lomba tersebut, insan kreatif ditantang untuk menyampaikan informasi dan menuangkan ide kreatifnya namun tetap mengedepankan fakta sebagaimana hakikat jurnalistik.</p>
            </div>
        </div>
    </section>

    <section class="lomba-desc media-container z-max">
        <img src="/images/logolomba/comicstrip.png" alt="" class="media media-left lomba-desc__video">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
        <div class="media__content lomba-desc__media-content lomba-desc__media-content--right">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Comic Strip</h3>
            <p class="text-regular">Merupakan kategori dalam Arjuna yang menantang insan kreatif untuk menyampaikan pesan dan informasi dalam panel komik yang berisikan edukasi dan mitigasi kebencanaan.</p>
        </div>
    </section>

    <section class="lomba-desc media-container z-max">
        <div class="media__content lomba-desc__media-content">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Homeless Media</h3>
            <p class="text-regular">Homeless Media mengajak insan kreatif untuk merancang konten untuk media sosial Instagram. Konten dirancang sedemikian rupa sehingga berisi informasi yang edukatif, kreatif, dan mengandung fakta sebagaimana produk jurnalistik.</p>
        </div>
        <img src="/images/logolomba/homelessmedia.png" alt="" class="media media-right lomba-desc__video lomba-desc__media--right">
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
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Podcast</h3>
            <p class="text-regular">Podcast meminta insan kreatif untuk menyampaikan informasi jurnalistik berupa audio dalam durasi tertentu. Melalui kategori Podcast ini, diharapkan insan kreatif mampu menyampaikan informasi yang edukatif dan inovatif dalam membantu mengurangi risiko kebencanaan kepada audiens.</p>
        </div>
    </section>
</div>
@endsection