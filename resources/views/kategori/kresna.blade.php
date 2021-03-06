@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Kresna
@endsection

@section('content')
<div class="lomba">
    <section class="museum-banner z-min">
        <img src="{{ asset('images/museum.png')}}" alt="" class="landing-banner__image">
        <div class="media-container museum-banner__media-container">
            <img src="/images/KRESNA.png" class="media media-left museum-banner__media z-max"/>

            <!-- <img src="{{ asset('assets/Path 25.png') }}" alt="" class="museum-banner__geometry--triangle z-min"> -->

            <div class="media__content">
                <div class="museum-banner__media-heading adaptive">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">Kresna</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="museum-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Kresna (Kreasi Insan Sinema) merupakan salah satu mata lomba di Festival Ajisaka 2020+ yang berfokus pada bidang perfilman. Pada Festival Ajisaka 2020+ Kresna mengangkat subtema “<i>Social and Cultural Impact  on Disasters</i>”. Terdapat empat kategori dalam mata lomba Kresna yang meliputi Film Fiksi Pendek, Film Dokumenter Pendek, Penulisan Naskah, dan Scoring Film. Melalui empat kategori tersebut, para insan kreatif diharapkan dapat mengeksplorasi ide-idenya.
            </div>
        </div>
    </section>

    <section class="lomba-desc media-container z-max">
        <img src="/images/logolomba/filmfiksi.png" alt="" class="media media-left lomba-desc__video">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
        <div class="media__content lomba-desc__media-content lomba-desc__media-content--right">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Film Fiksi Pendek</h3>
            <p class="text-regular">Kategori Film Fiksi Pendek membebaskan para insan kreatif untuk mengeksplorasi ide-idenya dalam ruang lingkup dampak sosial dan budaya yang akan atau mungkin timbul akibat bencana tertentu.
            <br><br>
            Harga &nbsp&nbsp: Rp 200.000<br>
            Peserta : 3 Orang<br>
            </p>
            <a class=" cta cta--white text-bold text-grey-dark margin-top-s" href="/files/BriefFilmFiksiPendek.pdf" download><i class="fa fa-download"></i>&nbsp Download Brief</a>   
        </div>
        
    </section>

    <section class="lomba-desc media-container z-max">
        <div class="media__content lomba-desc__media-content">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Film Dokumenter Pendek</h3>
            <p class="text-regular">Kategori Film Dokumenter Pendek memberikan ruang kepada para insan kreatif untuk mengeksplorasi berbagai perspektif dalam ruang lingkup dampak sosial dan budaya yang timbul akibat bencana yang pernah terjadi sebelumnya. Dalam pembuatan karya, sineas diberikan kebebasan dalam eksplorasi ide dan  penyampaian makna atau pesan. Namun data dan riset tetap diperlukan sebagai dasar pembuatan  karya agar esensi film dokumenter sebagai karya yang faktual tetap terjaga.
            <br><br>
            Harga &nbsp&nbsp: Rp 200.000<br>
            Peserta : 3 Orang<br>
            </p>
            <a class=" cta cta--white text-bold text-grey-dark margin-top-s" href="/files/BriefFilmDokumenterPendek.pdf" download><i class="fa fa-download"></i>&nbsp Download Brief</a>
        </div>
        <img src="/images/logolomba/filmdokumenter.png" alt="" class="media media-right lomba-desc__video lomba-desc__media--right">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
    </section>

    <section class="lomba-desc media-container z-max">
        <img src="/images/logolomba/naskahfilm.png" alt="" class="media media-left lomba-desc__video">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
        <div class="media__content lomba-desc__media-content lomba-desc__media-content--right">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Penulisan Naskah Film</h3>
            <p class="text-regular">Kategori Penulisan Naskah Film membebaskan para insan kreatif untuk mengeksplorasi ide-idenya dalam ruang lingkup  dampak sosial dan budaya yang akan atau mungkin timbul akibat bencana tertentu. Dalam karya skenario film fiksi, imajinasi dan cara penyampaian makna atau pesan tidak dibatasi oleh keadaan faktual.
            <br><br>
            Harga &nbsp&nbsp: Rp 70.000<br>
            Peserta : 1 Orang<br>
            <a class=" cta cta--white text-bold text-grey-dark margin-top-s" href="/files/BriefPenulisanNaskahFilm.pdf" download><i class="fa fa-download"></i>&nbsp Download Brief</a>
            </p>
        </div>
    </section>

    <section class="lomba-desc media-container z-max">
        <div class="media__content lomba-desc__media-content">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Scoring Film</h3>
            <p class="text-regular">Kategori Scoring Film membebaskan para insan kreatif untuk mengasah sense untuk membuat adegan dalam film menjadi powerful. Dengan menambahkan unsur score dalam suatu film, diharapkan pesan film dapat tersampaikan secara menyeluruh.
            <br><br>
            Harga &nbsp&nbsp: Rp 160.000<br>
            Peserta : 2 Orang<br>
            </p>
            <div class="flex">
                <a class=" cta cta--white text-bold text-grey-dark margin-top-s mr-2 cta__drive" href="https://drive.google.com/drive/folders/1NugZaI0ct7s8xJymEckQksCqMM4AWAml?usp=sharing" target="__blank" rel="noopener noreferrer"><i class="fab fa-google-drive"></i></a>
                <a class=" cta cta--white text-bold text-grey-dark margin-top-s" href="/files/BriefScoringFilm.pdf" download><i class="fa fa-download"></i>&nbsp Download Brief</a>
            </div>
        </div>
        <img src="/images/logolomba/scoringfilm.png" alt="" class="media media-right lomba-desc__video lomba-desc__media--right">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
    </section>
</div>
@endsection