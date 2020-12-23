@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Prahasta
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
                        <h1 class="heading-caps text-white margin-bottom-s width-max">PRahasta</h1>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" alt="" class="museum-banner__geometry--circle adaptive">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Pertarungan Humas Nusantara (PRahasta) merupakan salah satu mata lomba di Festival Ajisaka 2020+ yang berfokus pada bidang Kehumasan. Membawa tema besar dari Festival Ajisaka 2020+, PRahasta mengangkat berbagai isu “<i>Disaster Risk Reduction</i>” pada setiap kategori lombanya. Terdapat tiga kategori lomba dalam PRahasta yang meliputi PR Campaign, Press Conference, dan Risk Management. Melalui ketiga kategori lomba tersebut, para insan kreatif ditantang untuk dapat mengeluarkan inovasi dan ide kreatifnya dalam menyusun strategi kehumasan yang efektif.</p>
            </div>
        </div>
    </section>

    <!-- Item 1 -->
    <section class="lomba-desc">
        <div class="media__content width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">PR Campaign</h3>
            <p class="text-regular" style="text-align: justify;">Kategori PR Campaign mengajak insan kreatif untuk memberikan kontribusinya dalam menyelesaikan permasalahan kehumasan. Insan kreatif akan ditantang untuk mengeluarkan gagasan-gagasan kreatif dalam menentukan strategi dan media komunikasi yang tepat dan efektif untuk mencapai tujuan dari Kampanye Kehumasan.</p>
        </div>
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video margin-left-xl">
    </section>
    <!-- Item 2 -->
    <section class="lomba-desc">
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video">
        <div class="media__content margin-left-xl width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Press Conference Simulation</h3>
            <p class="text-regular" style="text-align: justify;">Kategori Press Conference Simulation mengajak insan kreatif berperan aktif dengan tanggap dan kritis dalam menyikapi suatu permasalahan. Insan kreatif akan ditantang untuk menggagaskan ide atau pemikiran dan menuangkannya dengan kompetensi riset yang menjadi landasan dari sebuah konferensi pers. Selain itu, insan kreatif juga ditantang untuk membuktikan kemampuannya sebagai seorang praktisi public relations dalam membangun hubungan dengan media atau pers.</p>
        </div>
    </section>
    <!-- Item 3 -->
    <section class="lomba-desc">
        <div class="media__content width-25">
            <h3 class="heading-3 text-uppercase text-black margin-bottom-s">Risk Management</h3>
            <p class="text-regular" style="text-align: justify;">Risk management mengajak insan kreatif untuk menjadi praktisi public relations yang proaktif, dengan menyusun pemetaan dan penanganan risiko yang ada dari suatu organisasi atau perusahaan. Insan kreatif akan ditantang untuk merancang strategi kehumasan yang efektif, sistematis, terencana, kreatif, dan didasari pada riset yang kuat untuk meminimalisir risiko yang dapat menjadi sebuah krisis.</p>
        </div>
        <img src="{{ asset('images/video-image.png') }}" alt="" class="media media-left lomba-desc__video margin-left-xl">
    </section>

</div>
@endsection