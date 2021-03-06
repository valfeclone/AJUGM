@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Nakula
@endsection

@section('content')
<div class="lomba">
    <section class="museum-banner z-min">
        <img src="{{ asset('images/museum.png')}}" alt="" class="landing-banner__image">
        <div class="media-container museum-banner__media-container">
            <img src="/images/NAKULA.png" class="media media-left museum-banner__media z-max"/>

            <!-- <img src="{{ asset('assets/Path 25.png') }}" alt="" class="museum-banner__geometry--triangle z-min"> -->

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

    <section class="lomba-desc media-container z-max">
        <img src="/images/logolomba/risetakademik.png" alt="" class="media media-left lomba-desc__video">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
        <div class="media__content lomba-desc__media-content lomba-desc__media-content--right">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Riset Konvensional</h3>
            <p class="text-regular">Kategori ini mendorong para insan kreatif untuk menemukan solusi dari bencana yang terjadi. Secara umum riset ini berorientasi pada kesimpulan. Tujuan dari riset ini adalah memperoleh generalisasi pengetahuan berdasarkan perumusan dan pengujian hipotesis.
            <br><br>
            Harga &nbsp&nbsp: Rp 180.000<br>
            Peserta : 2/3 Orang<br>
            </p>
        </div>
    </section>

    <section class="lomba-desc media-container z-max">
        <div class="media__content lomba-desc__media-content">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Riset Fun</h3>
            <p class="text-regular">Kategori ini membebaskan insan kreatif untuk menemukan solusi dari bencana yang terjadi dengan mengutamakan kreativitas dan humor. Meskipun mengutamakan humor, peserta diharapkan tetap berpegang pada metode penelitian ilmiah. Tujuan dari riset ini adalah memperoleh solusi permasalahan bencana dengan solusi yang ringan dan humoristis.
            <br><br>
            Harga &nbsp&nbsp: Rp 180.000<br>
            Peserta : 2/3 Orang<br>
            </p>
        </div>
        <img src="/images/logolomba/funresearch.png" alt="" class="media media-right lomba-desc__video lomba-desc__media--right">
        <!-- <video class="media media-left lomba-desc__video" controls>
            <source src="movie.mp4" type="video/mp4">
        </video> -->
    </section>
</div>
@endsection