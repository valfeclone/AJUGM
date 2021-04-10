@extends('layouts.base')

@section('meta-title') 
    Ajisaka | 3D Exhibition
@endsection

@section('content') 
<div class="virtual-museum z-mid">
    <div class="virtual-museum__content media-container">
        <div class="virtual-museum__media-container">
            <img src="/images/museum2.png" alt="" class="virtual-museum__media media media-left">
            <img src="/assets/Path 67.png" alt="" class="virtual-museum__geometry--triangle">
        </div>
        <div class="virtual-museum__media-content media__content margin-left-xl">
            <h3 class="heading-1 text-white text-uppercase margin-bottom-m virtual-museum__title">3D Exhibition</h3>
            <p class="text-bold text-white margin-bottom-s" style="text-align: justify;">Sebagai bentuk apresiasi terhadap karya peserta, seluruh output kreatif akan dipamerkan melalui ekshibisi online. Festival Ajisaka 2020+ mengambil konsep 3D, di mana pengunjung dapat menghadiri ekshibisi selayaknya menjelajahi musem sungguhan. Rasakan sensasi berbeda mengunjungi <i>creative museum</i> dalam bentuk digital!</p>
            <a href="/detailexhibition" class="cta cta--white  margin-top-xs"><h3 class="text-bold text-grey">Click Here</h3></a>
            <img src="/assets/Ellipse 24.png" alt="" class="virtual-museum__geometry--circle">
        </div>
    </div>
</div>
@endsection