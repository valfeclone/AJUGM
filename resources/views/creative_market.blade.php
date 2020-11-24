@extends('layouts.base')

@section('meta-title') 
    Creative Market
@endsection

@section('content')
<div class="market">
    <div class="market-banner">
        <div class="media-container market-banner__media-container">
            <img src="{{ asset('assets/Rectangle 71.png')}}" class="media media-left market-banner__media"/>

            <img src="{{ asset('assets/Group 77.png') }}" alt="" class="market-banner__geometry--wave">

            <div class="media__content">
                <div class="market-banner__media-heading">
                    <div>
                        <h1 class="heading-caps text-white margin-bottom-s">Creative Market</h1>
                    </div>
                    <img src="{{ asset('assets/Rectangle 77.png') }}" alt="" class="market-banner__geometry--square">
                </div>
                <p class="text-regular text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab laboriosam error ratione? Magnam ab inventore voluptatibus error et. Delectus, veniam consectetur error libero, esse eveniet saepe accusamus voluptas assumenda obcaecati, necessitatibus maiores rerum unde id.</p>
            </div>
        </div>
    </div>

    <div class="market-tenants">
        <h3 class="heading-3 text-uppercase text-black margin-bottom-m text-center">The Tenants</h3>
        <div class="card-wrapper--grid-xs margin-bottom-s">
            @for ($i = 0; $i < 10; $i++)
                <div class="card card-xs">
                    <a href="#"><img src="{{ asset('images/tenants-placeholder.jpg') }}" alt="Tenant logo" class="card__image card__image--xs"></a>
                </div>
            @endfor
        </div>
        <div class="pagination">
            {{ $umkms->links('vendor.pagination.custom') }}
            <!-- <a href="#" class="page">1</a>
            <a href="#" class="page page--active">2</a>
            <a href="#" class="page">3</a> -->
        </div>
    </div>
</div>
@endsection