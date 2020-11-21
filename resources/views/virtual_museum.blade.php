@extends('layouts.base')

@section('meta-title')
    Virtual Museum
@endsection

@section('content')
<div class="virtual-museum">
    <div class="virtual-museum__content">
        <div class="virtual-museum__media-container">
            <img src="/images/Rectangle 71.png" alt="" class="virtual-museum__media media media-left">
            <img src="/assets/Path 67.png" alt="" class="virtual-museum__geometry--triangle">
        </div>
        <div class="virtual-museum__media-content media__content margin-left-xl">
            <h3 class="heading-1 text-white text-uppercase margin-bottom-m virtual-museum__title">Virtual Museum</h3>
            <p class="text-bold text-white margin-bottom-s">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo fuga reiciendis maiores temporibus officiis qui corporis sed? Placeat, sit quae odit sequi aperiam aut. Doloribus obcaecati sunt perferendis nam asperiores dolores eos repellendus.</p>
            <a href="#" class="cta cta--white  margin-top-xs"><h3 class="text-bold text-grey">Learn more .</h3></a>
            <img src="/assets/Ellipse 24.png" alt="" class="virtual-museum__geometry--circle">
        </div>
    </div>
</div>
@endsection