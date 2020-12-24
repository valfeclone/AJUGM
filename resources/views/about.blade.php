@extends('layouts.base')

@section('meta-title') 
    Ajisaka | About
@endsection

@section('content') 
<div class="about z-min">
    <div class="market-banner">
        <img src="{{ asset('images/market.png')}}" alt="" class="landing-banner__image">
        <div class="media-container market-banner__media-container">
            <img src="https://dummyimage.com/400x400/fff/fff.png&text=X" class="media media-left market-banner__media z-max"/>

            <img src="{{ asset('assets/Path 25.png') }}" alt="" class="market-banner__geometry--triangle z-min">

            <div class="media__content about__media-content z-mid">
                <div class="market-banner__media-heading adaptive about__heading">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">About</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="market-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">
                Festival Ajisaka UGM 2020+ hadir untuk memotivasi pemuda-pemudi bangsa dalam menyumbang ide inovatif terkait penanggulangan 
                bencana di Indonesia. Kami mengangkat tema Disaster Risk Reduction dengan tajuk “Biwara Bumandhala: Berita Baik untuk Bumi” 
                dan tagline Melek Bencana. Insan kreatif bangsa diharapkan dapat menjadi agen perubahan untuk menanamkan kesadaran di masyarakat 
                bahwa komunikasi memiliki peran krusial dalam segala aspek kehidupan manusia, salah satunya dalam pemulihan situasi pasca krisis.
                <br><br>
                Festival Ajisaka 2020+ menyajikan berbagai macam program yang dikemas dengan kreatif dan inovatif untuk menyuarakan ajakan bagi insan 
                kreatif untuk berkarya dan turut serta dalam upaya disaster risk reduction di Indonesia. Insan kreatif Nusantara diharapkan dapat
                mempersembahkan karya terbaik mereka melalui lima mata lomba, yaitu Sadewa, Prahasta, Kresna, Arjuna, dan Nakula. Kelak, solusi yang 
                diberikan melalui karya-karya dalam mata lomba tersebut akan direalisasikan dari perspektif ilmu komunikasi, seni, serta akademisi.
                <br><br>
                Dalam perjalanannya selama 7 tahun, Festival Ajisaka UGM telah diikuti oleh lebih dari 3000 peserta, 
                900 tim, 80 juri profesional, 900 entri karya, 40 perguruan tinggi, dan diliput oleh lebih dari 20 media massa. 
                Kini, Festival Ajisaka 2020+ hadir untuk menantang insan kreatif Nusantara berkontribusi dalam memecahkan masalah kebencanaan 
                di Indonesia melalui pendekatan komunikasi. Dengan sepenuh hati, kami berkomitmen untuk berkarya dan berkontribusi untuk mendukung 
                kemajuan insan kreatif Nusantara.
                </p>
            </div>
        </div>
    </div>

    <section class="about-section">
        <div class="about-section__content media-container">
            <img src="https://dummyimage.com/400x400/fff/fff.png&text=X" alt="" class="media media-left about-section__image">

            <div class="media__content">
                <h1 class="heading-caps text-black margin-bottom-s">Our Team</h1>
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