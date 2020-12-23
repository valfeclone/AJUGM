@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Arjuna
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
                        <h1 class="heading-caps text-white margin-bottom-s width-max">Arjuna</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="museum-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Ajang Citra Sejuta Warna (Arjuna) merupakan mata lomba Festival Ajisaka 2020+ yang berfokus pada bidang jurnalistik. Terdapat tiga kategori dalam Arjuna yang meliputi Comic Strip, Homeless Media, dan Podcast. Melalui tiga kategori lomba tersebut, insan kreatif ditantang untuk menyampaikan informasi dan menuangkan ide kreatifnya namun tetap mengedepankan fakta sebagaimana hakikat jurnalistik.</p>
            </div>
        </div>
    </section>

    <!-- Item 1 -->
    <section class="lomba-desc">
        <div class="media__content width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Comic Strip</h3>
            <p class="text-regular" style="text-align: justify;">Merupakan kategori dalam Arjuna yang menantang insan kreatif untuk menyampaikan pesan dan informasi dalam panel komik yang berisikan edukasi dan mitigasi kebencanaan.</p>
        </div>
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video margin-left-xl">
    </section>
    <!-- Item 2 -->
    <section class="lomba-desc">
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video">
        <div class="media__content margin-left-xl width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Homeless Media</h3>
            <p class="text-regular" style="text-align: justify;">Homeless Media mengajak insan kreatif untuk merancang konten untuk media sosial Instagram. Konten dirancang sedemikian rupa sehingga berisi informasi yang edukatif, kreatif, dan mengandung fakta sebagaimana produk jurnalistik.</p>
        </div>
    </section>
    <!-- Item 3 -->
    <section class="lomba-desc">
        <div class="media__content width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Podcast</h3>
            <p class="text-regular" style="text-align: justify;">Podcast meminta insan kreatif untuk menyampaikan informasi jurnalistik berupa audio dalam durasi tertentu. Melalui kategori Podcast ini, diharapkan insan kreatif mampu menyampaikan informasi yang edukatif dan inovatif dalam membantu mengurangi risiko kebencanaan kepada audiens.</p>
        </div>
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video margin-left-xl">
    </section>

</div>
@endsection