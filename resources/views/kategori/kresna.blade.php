@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Kresna
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
                        <h1 class="heading-caps text-white margin-bottom-s width-max">Kresna</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="museum-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Kresna (Kreasi Insan Sinema) merupakan salah satu mata lomba di Festival Ajisaka 2020+ yang berfokus pada bidang perfilman. Pada Festival Ajisaka 2020+ Kresna mengangkat subtema “<i>Social and Cultural Impact  on Disasters</i>”. Terdapat empat kategori dalam mata lomba Kresna yang meliputi Film Fiksi Pendek, Film Dokumenter Pendek, Penulisan Naskah, dan Scoring Film. Melalui empat kategori tersebut, para insan kreatif diharapkan dapat mengeksplorasi ide-idenya. /p>
            </div>
        </div>
    </section>

    <!-- Item 1 -->
    <section class="lomba-desc">
        <div class="media__content width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Film Fiksi Pendek</h3>
            <p class="text-regular" style="text-align: justify;">Kategori Film Fiksi Pendek membebaskan para insan kreatif untuk mengeksplorasi ide-idenya dalam ruang lingkup dampak sosial dan budaya yang akan atau mungkin timbul akibat bencana tertentu. </p>
        </div>
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video margin-left-xl">
    </section>
    <!-- Item 2 -->
    <section class="lomba-desc">
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video">
        <div class="media__content margin-left-xl width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Film Dokumenter Pendek</h3>
            <p class="text-regular" style="text-align: justify;">Kategori Film Dokumenter Pendek memberikan ruang kepada para insan kreatif untuk mengeksplorasi berbagai perspektif dalam ruang lingkup dampak sosial dan budaya yang timbul akibat bencana yang pernah terjadi sebelumnya. Dalam pembuatan karya, sineas diberikan kebebasan dalam eksplorasi ide dan  penyampaian makna atau pesan. Namun data dan riset tetap diperlukan sebagai dasar pembuatan  karya agar esensi film dokumenter sebagai karya yang faktual tetap terjaga.</p>
        </div>
    </section>
    <!-- Item 3 -->
    <section class="lomba-desc">
        <div class="media__content width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Penulisan Skenario Pendek</h3>
            <p class="text-regular" style="text-align: justify;">Kategori Penulisan Skenario Film membebaskan para insan kreatif untuk mengeksplorasi ide-idenya dalam ruang lingkup  dampak sosial dan budaya yang akan atau mungkin timbul akibat bencana tertentu. Dalam karya skenario film fiksi, imajinasi dan cara penyampaian makna atau pesan tidak dibatasi oleh keadaan faktual. </p>
        </div>
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video margin-left-xl">
    </section>
    <!-- Item 4 -->
    <section class="lomba-desc">
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video">
        <div class="media__content margin-left-xl width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Scoring Film</h3>
            <p class="text-regular" style="text-align: justify;">Kategori Scoring Film membebaskan para insan kreatif untuk mengasah sense untuk membuat adegan dalam film menjadi powerful. Dengan menambahkan unsur score dalam suatu film, diharapkan pesan film dapat tersampaikan secara menyeluruh.</p>
        </div>
    </section>

</div>
@endsection