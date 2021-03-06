@extends('layouts.base')

@section('meta-title')
    Ajisaka | Home
@endsection

@section('content')
    <div class="landing">
        <section class="landing-banner">
            <img src="/images/balairung.png" alt="" class="landing-banner__image">
            <img src="/assets/Ellipse 6.png" alt="" class="landing-banner__geometry--blue">
            <div class="landing-banner__content">
                <div id="carouselExampleControls" class="carousel slide margin-bottom-xxl" data-ride="carousel">
                    <div class="carousel-inner landing-banner__carousel-inner">
                        <div class="carousel-item active">
                            <div class="landing-banner__carousel-text">
                                <h1 class="heading-caps text-white margin-bottom-m">3D Exhibition</h1>
                                <p class="text-bold text-white width-40 margin-bottom-s">Sebagai bentuk apresiasi terhadap karya peserta, seluruh output kreatif akan dipamerkan melalui ekshibisi online. Festival Ajisaka 2020+ mengambil konsep 3D, di mana pengunjung dapat menghadiri ekshibisi selayaknya menjelajahi musem sungguhan. Rasakan sensasi berbeda mengunjungi <i>creative museum</i> dalam bentuk digital!</p>
                                <a href="/virtualmuseum" class="link"><p class="text-bold text-white">Learn More .</p></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="landing-banner__carousel-text">
                                <h1 class="heading-caps text-white margin-bottom-m">Creative Market</h1>
                                <p class="text-bold text-white margin-bottom-s">Pasaraya merupakan festival belanja online yang merupakan salah satu kontribusi Festival Ajisaka 2020+ untuk membantu UMKM terdampak Covid-19. Festival Ajisaka 2020+ memberikan <i>platform</i> online secara gratis kepada para pemilik <i>creative brand</i> untuk dapat memperluas jangkauan pemasarannya.</p>
                                <a href="/creativemarket" class="link"><p class="text-bold text-white">Learn More .</p></a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <img src="/assets/Group 72.png" alt="" class="landing-banner__geometry--red">
        </section>

        <section class="landing-about">
            <div class="landing-about__content">
                <div class="landing-about__media-container">
                    <img src="/images/about-1.png" alt="" class="media media-left landing-about__video">
                    <img src="/assets/Group 71.png" alt="" class="landing-about__geometry--red-circle">
                </div>
                <div class="media__content landing-about__text">
                    <h3 class="heading-3 text-black text-uppercase landing-about__about-text margin-bottom-s">About Ajisaka</h3>
                    <p class="text-regular margin-bottom-m" style="text-align: justify;">Festival Ajisaka UGM 2020+ hadir untuk memotivasi pemuda-pemudi bangsa dalam menyumbang ide inovatif terkait penanggulangan bencana di Indonesia. Kami mengangkat tema Disaster Risk Reduction dengan tajuk “Biwara Bumandhala: Berita Baik untuk Bumi” dan tagline Melek Bencana. Insan kreatif bangsa diharapkan dapat menjadi agen perubahan untuk menanamkan kesadaran di masyarakat bahwa komunikasi memiliki peran krusial dalam segala aspek kehidupan manusia, salah satunya dalam pemulihan situasi pasca krisis.</p>
                    <a href="/about" class="link align-self-start"><h3 class="heading-3 text-black">Learn more .</h3></a>
                </div>
            </div>
            <img src="/assets/Group 70.png" alt="" class="landing-about__geometry--blue-wave">
            <img src="/assets/Group 73.png" alt="" class="landing-about__geometry--white-circle">
        </section>

        <section class="landing-timeline py-l h-max">
            <div class="landing-timeline__content">
                <h2 class="heading-2 text-black text-uppercase margin-bottom-l text-center w-100">Timeline</h2>
            </div>
            <img src="/images/timeline.jpg" alt="" class="landing__timeline">
        </section>
        
        <!-- <section class="landing-about">
            <div class="landing-about__content">
                <div class="landing-about__media-container">
                    <img src="/images/creativemarket.jpg" alt="" class="media media-left landing-about__video">
                </div>
                <div class="media__content landing-about__text">
                    <h3 class="heading-3 text-black text-uppercase landing-about__about-text margin-bottom-s">Creative Market</h3>
                    <p class="text-regular margin-bottom-m" style="text-align: justify;">Pasaraya merupakan festival belanja online yang merupakan salah satu kontribusi Festival Ajisaka 2020+ untuk membantu UMKM terdampak Covid-19. Festival Ajisaka 2020+ memberikan <i>platform</i> online secara gratis kepada para pemilik <i>creative brand</i> untuk dapat memperluas jangkauan pemasarannya. Melalui proses kurasi yang detail, <i>creative brand</i> akan menampilkan produk terbaik untuk para insan kreatif. Festival belanja online ini akan dilaksanakan selama 35 hari dengan menggunakan <i>platform</i> digital web Festival Ajisaka 2020+. Dengan berbagai penawaran serta diskon menarik mulai dari 5% sampai dengan 60% yang diberikan oleh <i>creative brand</i>, diharapkan insan kreatif dapat turut serta berkontribusi dalam kemajuan UMKM.</p>
                    <a href="/creativemarket" class="link align-self-start"><h3 class="heading-3 text-black">Explore more .</h3></a>
                </div>
            </div>
            <img src="/assets/Group 68.png" alt="" class="landing-matlom__geometry--dots">
            
        </section>

        <section class="landing-matlom" id="creativemarket">
            <div class="market-tenants" style="border-top:none; padding:0;">
                <h3 class="heading-3 text-uppercase text-black margin-bottom-m text-center">The Tenants</h3>
                <div class="card-wrapper--grid-xs margin-bottom-s">
                    @foreach($umkms as $umkm)
                        <div class="card card-xs">
                            <a href="/creativemarket/{{$umkm->id}}" class="overflow-hidden"><img src="{{ asset($umkm->path_photo) }}" alt="" class="card__image card__image--xs"></a>
                        </div>
                    @endforeach
                </div>
                <div class="pagination">
                    {{ $umkms->links() }}
                </div>
            </div>
            <img src="/assets/Group 70.png" alt="" class="landing-about__geometry--blue-wave">
        </section> -->

        <section class="landing-matlom" id="landing-matlom">
            <div class="landing-matlom__content z-max">
                <h2 class="heading-2 text-black text-uppercase margin-bottom-l text-center">Mata Lomba Ajisaka</h2>
                <div class="card-wrapper card-wrapper--flex center">
                    
                    <div class="card card-m mx-s">
                        <img src="/images/ARJUNA.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-matlom__card-image margin-bottom-s">
                        </div> -->
                        <p class="text-bold margin-bottom-xs">Arjuna</p>
                        <p class="text-regular margin-bottom-xs">Ajang Citra Sejuta Warna</p>
                        <a href="/kompetisi/arjuna" class="link"><p class="text-bold text-black">Learn more .</p></a>
                    </div>

                    <div class="card card-m mx-s">
                        <img src="/images/KRESNA.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-matlom__card-image margin-bottom-s">
                        </div> -->
                        <p class="text-bold margin-bottom-xs">Kresna</p>
                        <p class="text-regular margin-bottom-xs">Kreasi Insan Sinema</p>
                        <a href="/kompetisi/kresna" class="link"><p class="text-bold text-black">Learn more .</p></a>
                    </div>

                    <div class="card card-m mx-s">
                        <img src="/images/NAKULA.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-matlom__card-image margin-bottom-s">
                        </div> -->
                        <p class="text-bold margin-bottom-xs">Nakula</p>
                        <p class="text-regular margin-bottom-xs">Penelitian Kawula Muda</p>
                        <a href="/kompetisi/nakula" class="link"><p class="text-bold text-black">Learn more .</p></a>
                    </div>
                    
                    <div class="card card-m mx-s">
                        <img src="/images/PRAHASTA.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-matlom__card-image margin-bottom-s">
                        </div> -->
                        <p class="text-bold margin-bottom-xs">Prahasta</p>
                        <p class="text-regular margin-bottom-xs">Pertempuran Humas Nusantara</p>
                        <a href="/kompetisi/prahasta" class="link"><p class="text-bold text-black">Learn more .</p></a>
                    </div>

                    <div class="card card-m mx-s">
                        <img src="/images/SADEWA.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-matlom__card-image margin-bottom-s">
                        </div> -->
                        <p class="text-bold margin-bottom-xs">Sadewa</p>
                        <p class="text-regular margin-bottom-xs">Sayembara Dewa Pariwara</p>
                        <a href="/kompetisi/sadewa" class="link"><p class="text-bold text-black">Learn more .</p></a>
                    </div>
                </div>
            </div>
            <img src="/assets/Group 68.png" alt="" class="landing-matlom__geometry--dots">
            <img src="/assets/Ellipse 8.png" alt="" class="landing-matlom__geometry--circle">
            <img src="/assets/Rectangle 12.png" alt="" class="landing-matlom__geometry--rectangle">
        </section>

        <section class="landing-register">
            <div class="landing-register__content">
                <h2 class="heading-2 text-black margin-bottom-l">Cara Mendaftar</h2>
                <div class="card-wrapper--flex evenly margin-bottom-s landing-register__card-wrapper">
                    
                    <div class="card card-s landing-register__card">
                        <img src="/images/step1.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-register__card-image margin-bottom-m">
                        </div> -->
                        <h3 class="heading-3 text-grey margin-bottom-s">Langkah 1</p>
                        <p class="text-regular">Ketuk tombol Login pada pojok kanan atas laman.</p>
                    </div>

                    <img src="/assets/Arrow.png" alt="" class="landing-register__arrow">
                    <div class="card card-s landing-register__card">
                        <img src="/images/step2.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-register__card-image margin-bottom-m">
                        </div> -->
                        <h3 class="heading-3 text-grey margin-bottom-s">Langkah 2</p>
                        <p class="text-regular">Apabila belum memiliki akun, pilih register. Jika sudah, pilih login.</p>
                    </div>
                    <img src="/assets/Arrow.png" alt="" class="landing-register__arrow">

                    <div class="card card-s landing-register__card">
                        <img src="/images/step3.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-register__card-image margin-bottom-m">
                        </div> -->
                        <h3 class="heading-3 text-grey margin-bottom-s">Langkah 3</p>
                        <p class="text-regular">Masukkan data kelompok dan anggota kelompok.</p>
                    </div>
                    <img src="/assets/Arrow.png" alt="" class="landing-register__arrow">

                    <div class="card card-s landing-register__card">
                        <img src="/images/step4.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-register__card-image margin-bottom-m">
                        </div> -->
                        <h3 class="heading-3 text-grey margin-bottom-s">Langkah 4</p>
                        <p class="text-regular">Lakukan pembayaran ke nomor rekening yang sudah tertera.</p>
                    </div>
                    <img src="/assets/Arrow.png" alt="" class="landing-register__arrow">
                    
                    <div class="card card-s landing-register__card">
                        <img src="/images/step5.png" alt="" class="card__image landing-matlom__card-image margin-bottom-s">
                        <!-- <div class="card__image landing-register__card-image margin-bottom-m">
                        </div> -->
                        <h3 class="heading-3 text-grey margin-bottom-s">Langkah 5</p>
                        <p class="text-regular">Selamat berkarya, Insan Kreatif!</p>
                    </div>
                    <img src="/assets/Path 57.png" alt="" class="landing-register__geometry--boxes">
                </div>
                <a href="/register" class="link"><p class="text-bold text-black">Register Now ></p></a>
            </div>
            <img src="/assets/Ellipse 8.png" alt="" class="landing-register__geometry--circle">
            <img src="/assets/Path 25.png" alt="" class="landing-register__geometry--triangle">
        </section>

        <section class="landing-matlom" id="sponsors">
            <div class="market-tenants" style="border-top:none; padding:0;">
                <h3 class="heading-3 text-uppercase text-black margin-bottom-m text-center">Our Sponsors</h3>
                <div class="card-wrapper--grid-xs margin-bottom-s">
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/pln.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/telkomsel.jpg') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/pertamina.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/semengresik.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/pupukindonesia.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/dentsu.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/matchamu.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/anteraja.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/dagadu.jpg') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/Gambarin.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/vicee.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/appri.png') }}" alt="" class="card__image">
                    </div>
                    <div class="card card-xs rounded">
                        <img src="{{ asset('images/sponsors/imogen.png') }}" alt="" class="card__image">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection



