@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Creative Market
@endsection

@section('content')
<div class="market">
    <div class="market-banner">
        <img src="{{ asset('images/market.png')}}" alt="" class="landing-banner__image">
        <div class="media-container market-banner__media-container">
            <img src="{{ asset('assets/Rectangle 71.png')}}" class="media media-left market-banner__media"/>

            <img src="{{ asset('assets/Group 77.png') }}" alt="" class="market-banner__geometry--wave">

            <div class="media__content market__media-content"> 
                <div class="market-banner__media-heading">
                    <div>
                        <h1 class="heading-caps text-white margin-bottom-s">Creative Market</h1>
                    </div>
                    <img src="{{ asset('assets/Rectangle 77.png') }}" alt="" class="market-banner__geometry--square">
                </div>
                <p class="text-regular text-white" style="text-align: justify;">Pasaraya merupakan festival belanja online yang merupakan salah satu kontribusi Festival Ajisaka 2020+ untuk membantu UMKM terdampak Covid-19. Festival Ajisaka 2020+ memberikan <i>platform</i> online secara gratis kepada para pemilik <i>creative brand</i> untuk dapat memperluas jangkauan pemasarannya. Melalui proses kurasi yang detail, <i>creative brand</i> akan menampilkan produk terbaik untuk para insan kreatif. Festival belanja online ini akan dilaksanakan selama 35 hari dengan menggunakan <i>platform</i> digital web Festival Ajisaka 2020+. Dengan berbagai penawaran serta diskon menarik mulai dari 5% sampai dengan 60% yang diberikan oleh <i>creative brand</i>, diharapkan insan kreatif dapat turut serta berkontribusi dalam kemajuan UMKM. </p>
            </div>
        </div>
    </div>

    <div class="market-tenants">
        <h3 class="heading-3 text-uppercase text-black margin-bottom-m text-center">The Tenants</h3>
        <div class="card-wrapper--grid-xs margin-bottom-s">
            @foreach($umkms as $umkm)
                <div class="card card-xs">
                    <a href="/creativemarket/{{$umkm->id}}" class="overflow-hidden"><img src="{{ asset($umkm->path_photo) }}" alt="" class="card__image card__image--xs"></a>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $umkms->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
@endsection