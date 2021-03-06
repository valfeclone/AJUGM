@extends('layouts.base')

@section('meta-title') 
    Ajisaka | Creative Market - {{$umkm->name}}
@endsection

@section('content')
<div class="market">
    <div class="market-banner">
        <img src="{{ asset('images/market.png')}}" alt="" class="landing-banner__image">
        <div class="media-container market-banner__media-container">
            <img src="/{{ $umkm->path_photo}}" class="media media-left market-banner__media"/>

            <img src="{{ asset('assets/Group 77.png') }}" alt="" class="market-banner__geometry--wave z-min">

            <div class="media__content market__media-content">
                <div class="market-banner__media-heading adaptive">
                    <div class="width-max">
                        <h1 class="heading-caps text-white margin-bottom-s width-max">{{$umkm->name}}</h1>
                    </div>
                    <img src="{{ asset('assets/Rectangle 77.png') }}" alt="" class="market-banner__geometry--square adaptive z-min">
                </div>
                <p class="text-regular text-white z-mid" style="text-align: justify;">{!!$umkm->description!!}</p>
                <a href="{{$umkm->instagram_link}}" class="cta cta--white  margin-top-s" target="_blank"><h3 class="text-bold text-grey-dark text-uppercase">Contact</h3></a>
            </div>
        </div>
    </div>

    @foreach($umkm->products as $product)
    <div class="tenant-products">
        <div class="tenant-product tenant-product--1">
            @if($loop->index+1==1)
            <img src="{{ asset('assets/Group 73.png') }}" class="tenant-product--1__circle"/>
            @endif
            <div class="media-container">
                <div class="slideshow tenant-product--1__carousel z-max">
                        <!-- Full-width images with number and caption text -->
                        <div class="tenant-product--{{$loop->index+1}}__image w-100 z-mid" style="display: inline-block">
                            <img src="{{ asset($product->path_photo) }}" class="tenant-product__image"> 
                        </div>
                    @if($loop->index+1==1)
                        <img src="{{ asset('assets/Path 67.png') }}" class="tenant-product--1__triangle" style="z-index: -1"/>
                    @elseif($loop->index+1==2)
                        <img src="{{ asset('assets/Ellipse 11.png') }}" class="tenant-product--2__circle" style="z-index: -1"/>
                    @elseif($loop->index+1==3)
                        <img src="{{ asset('assets/Path 67.png') }}" class="tenant-product--3__triangle" style="z-index: -1"/>
                    @elseif($loop->index+1==4)
                        <img src="{{ asset('assets/Ellipse 11.png') }}" class="tenant-product--4__circle" style="z-index: -1"/>
                    @elseif($loop->index+1==5)
                        <img src="{{ asset('assets/Path 67.png') }}" class="tenant-product--5__triangle" style="z-index: -1"/>
                    @endif
                </div>
               
                <div class="media__content">
                    <div class="relative width-max">
                        <h4 class="subheading text-uppercase text-black margin-bottom-xs relative width-max z-max">{!!$product->name!!}</h4>
                        @if($loop->index+1==1)
                            <img src="{{ asset('assets/Group 71.png') }}" class="tenant-product--1__red"/>
                        @endif
                    </div>
                    <p class="text-regular margin-bottom-xs" style="text-align: justify;">{!!$product->description!!}</p>
                    <br> 
                    
                    <div class="d-flex">
                        <a href="{{$umkm->instagram_link}}" class="link width-max mr-3 cta cta--white align-self-center px-s py-s"><i class="fab fa-instagram icon" style="font-size:2rem;color:red"></i></a>
                        @if(!empty($product->kode_promo))
                        <h3 class=" cta cta--white text-bold text-grey-dark align-self-center">Kode Promo : {{$product->kode_promo}}</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="tenant-product tenant-product--2">
            <div class="media-container">
                <div class="slideshow relative">
                    <div class="slideshow-container">
                    
                        <div class="mySlides tenant-product--2__image" style="display: block">
                            <img src="{{ asset('images/tenant-placeholder-cuy.jpg') }}">
                        </div>

                        <div class="mySlides tenant-product--2__image">
                            <img src="{{ asset('images/tenant-placeholder-cuy.jpg') }}">
                        </div>

                        <div class="mySlides tenant-product--2__image">
                            <img src="{{ asset('images/tenants-placeholder.jpg') }}">
                        </div>
                    </div>

                    
                    <div style="text-align:center">
                        <span class="dot tenant-product--2__dot active" onclick="currentSlide(1, 2)"></span>
                        <span class="dot tenant-product--2__dot" onclick="currentSlide(2, 2)"></span>
                        <span class="dot tenant-product--2__dot" onclick="currentSlide(3, 2)"></span>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" class="tenant-product--2__circle"/>
                </div>
               
                <div class="media__content">
                    <h4 class="subheading text-uppercase text-black margin-bottom-xs relative width-max z-max">Product Name</h4>
                    <p class="text-regular margin-bottom-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptate, amet magni dicta doloribus temporibus! Numquam consequatur quia eos quis similique magni aliquid libero molestias?</p>
                    <a href="#" class="link width-max margin-bottom-s"><i class="fab fa-instagram icon"></i></a>
                    <a href="#" class="cta cta--white"><h3 class="text-bold text-grey-dark">Go to Details</h3></a>
                </div>
            </div>
        </div> -->
        <!-- <div class="tenant-product tenant-product--3">
            <div class="media-container">
                <div class="slideshow relative z-min">
                    <div class="slideshow-container z-max">
                        
                        <div class="mySlides tenant-product--3__image" style="display: block">
                            <img src="{{ asset('images/tenant-placeholder-cuy.jpg') }}">
                        </div>

                        <div class="mySlides tenant-product--3__image">
                            <img src="{{ asset('images/tenant-placeholder-cuy.jpg') }}">
                        </div>

                        <div class="mySlides tenant-product--3__image">
                            <img src="{{ asset('images/tenants-placeholder.jpg') }}">
                        </div>
                    </div>

                    
                    <div style="text-align:center">
                        <span class="dot tenant-product--3__dot active" onclick="currentSlide(1, 3)"></span>
                        <span class="dot tenant-product--3__dot" onclick="currentSlide(2, 3)"></span>
                        <span class="dot tenant-product--3__dot" onclick="currentSlide(3, 3)"></span>
                    </div>

                    <img src="{{ asset('assets/Path 67.png') }}" class="tenant-product--3__triangle"/>
                </div>
               
                <div class="media__content z-max">
                    <h4 class="subheading text-uppercase text-black margin-bottom-xs relative width-max">Product Name</h4>
                    <p class="text-regular margin-bottom-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptate, amet magni dicta doloribus temporibus! Numquam consequatur quia eos quis similique magni aliquid libero molestias?</p>
                    <a href="#" class="link width-max margin-bottom-s"><i class="fab fa-instagram icon"></i></a>
                    <a href="#" class="cta cta--white"><h3 class="text-bold text-grey-dark">Go to Details</h3></a>
                </div>
            </div>
        </div> -->

        <!-- <div class="tenant-product tenant-product--4">
            <div class="media-container">
                <div class="slideshow relative">
                    <div class="slideshow-container">
                        
                        <div class="mySlides tenant-product--4__image" style="display: block">
                            <img src="{{ asset('images/tenant-placeholder-cuy.jpg') }}">
                        </div>

                        <div class="mySlides tenant-product--4__image">
                            <img src="{{ asset('images/tenant-placeholder-cuy.jpg') }}">
                        </div>

                        <div class="mySlides tenant-product--4__image">
                            <img src="{{ asset('images/tenants-placeholder.jpg') }}">
                        </div>
                    </div>

                    
                    <div style="text-align:center">
                        <span class="dot tenant-product--4__dot active" onclick="currentSlide(1, 4)"></span>
                        <span class="dot tenant-product--4__dot" onclick="currentSlide(2, 4)"></span>
                        <span class="dot tenant-product--4__dot" onclick="currentSlide(3, 4)"></span>
                    </div>
                    <img src="{{ asset('assets/Ellipse 11.png') }}" class="tenant-product--4__circle"/>
                </div>
               
                <div class="media__content">
                    <h4 class="subheading text-uppercase text-black margin-bottom-xs relative width-max z-max">Product Name</h4>
                    <p class="text-regular margin-bottom-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptate, amet magni dicta doloribus temporibus! Numquam consequatur quia eos quis similique magni aliquid libero molestias?</p>
                    <a href="#" class="link width-max margin-bottom-s"><i class="fab fa-instagram icon"></i></a>
                    <a href="#" class="cta cta--white"><h3 class="text-bold text-grey-dark">Go to Details</h3></a>
                </div>
            </div>
        </div> -->

        <!-- <div class="tenant-product tenant-product--5">
            <div class="media-container">
                <div class="slideshow relative z-min">
                    <div class="slideshow-container z-max">
                        
                        <div class="mySlides tenant-product--5__image" style="display: block">
                            <img src="{{ asset('images/tenant-placeholder-cuy.jpg') }}">
                        </div>

                        <div class="mySlides tenant-product--5__image">
                            <img src="{{ asset('images/tenant-placeholder-cuy.jpg') }}">
                        </div>

                        <div class="mySlides tenant-product--5__image">
                            <img src="{{ asset('images/tenants-placeholder.jpg') }}">
                        </div>
                    </div>

                    
                    <div style="text-align:center">
                        <span class="dot tenant-product--5__dot active" onclick="currentSlide(1, 5)"></span>
                        <span class="dot tenant-product--5__dot" onclick="currentSlide(2, 5)"></span>
                        <span class="dot tenant-product--5__dot" onclick="currentSlide(3, 5)"></span>
                    </div>

                    <img src="{{ asset('assets/Path 67.png') }}" class="tenant-product--5__triangle z-min"/>
                </div>
               
                <div class="media__content z-max">
                    <h4 class="subheading text-uppercase text-black margin-bottom-xs relative width-max">Product Name</h4>
                    <p class="text-regular margin-bottom-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptate, amet magni dicta doloribus temporibus! Numquam consequatur quia eos quis similique magni aliquid libero molestias?</p>
                    <a href="#" class="link width-max margin-bottom-s"><i class="fab fa-instagram icon"></i></a>
                    <a href="#" class="cta cta--white"><h3 class="text-bold text-grey-dark">Go to Details</h3></a>
                </div>
            </div>
        </div> -->
    </div>
    @endforeach
</div>
@endsection