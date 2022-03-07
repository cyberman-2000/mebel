@extends('layout.layout')
@section('content')
{{--    @foreach($boxshop as $value)--}}
{{--        {{$value->mebel_id}}--}}
{{--    @endforeach--}}
{{--    @foreach($user as $value)--}}
{{--        {{$value->id}}--}}
{{--    @endforeach--}}
    <div class="container">
        @include('layout.alerts')
    </div>
    <main class="site-main">
        <!--================ Hero banner start =================-->
        <section class="hero-banner">
            <div class="container">
                <div class="row no-gutters align-items-center pt-60px">
                    <div class="col-5 d-none d-sm-block">
                        <div class="hero-banner__img">
                            <img class="img-fluid" src="assets/img/home/hero-banner.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                        <div class="hero-banner__content">
                            <h4></h4>
                            <h1>Harid uchun Ro'yhatdan o'tishingiz kerak</h1>
                            <a class="button button-hero" href="{{route('product_category')}}">Xoziroq harid qilish</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Hero banner start =================-->

        <!--================ Hero Carousel start =================-->
        <section class="section-margin mt-0">
            <div class="owl-carousel owl-theme hero-carousel">
                @foreach($carousel as $value)
                <div class="hero-carousel__slide">
                    <img src="{{$value->img}}" alt="" class="img-fluid">
                    <a href="#" class="hero-carousel__slideOverlay">
                        <h3>{{$value->mebel_name}}</h3>
                        <p>{{$value->mebel_price}} so'm</p>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
        <!--================ Hero Carousel end =================-->

        <!-- ================ trending product section start ================= -->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Ko'p sotilyotgan mahsulotlar</p>
                    <h2>Trenddagi<span class="section-intro__style">  Mahsulot</span></h2>
                </div>
                <div class="row">
                    @foreach($shop as $value)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product w-100">
                            <div class="card-product__img">
                                <img class="card-img" src="{{$value->img}}" alt="">
                                <ul class="card-product__imgOverlay">
                                    <li><button><a href="/shop/product_details/{{$value->id}}"><i class="ti-search"></i></a></button></li>
                                    <li><button><a href="{{route('addBox',['id'=>$value->id])}}"><i class="ti-shopping-cart"></i></a></button></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <p>Accessories</p>
                                <h4 class="card-product__title"><a href="/shop/product_details/{{$value->id}}">{{$value->mebel_name}}</a></h4>
                                <p class="card-product__price">{{$value->mebel_price}} so'm</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ================ trending product section end ================= -->


        <!-- ================ offer section start ================= -->
        <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="offer__content text-center">
                            <h3>Bizda 50% chegirmalar oyligi</h3>
                            <h4>Qishqi sotuvlar</h4>
                            <p>Him she'd let them sixth saw light</p>
                            <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ offer section end ================= -->

        <!-- ================ Best Selling item  carousel ================= -->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <h2>Yangi <span class="section-intro__style">Mebellar</span></h2>
                </div>
                <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                @foreach($new as $value)
                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="{{$value->img}}" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><a href="/shop/product_details/{{$value->id}}"><i class="ti-search"></i></a></button></li>
                                <li><button><a href="{{route('addBox',['id'=>$value->id])}}"><i class="ti-shopping-cart"></i></a></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Accessories</p>
                            <h4 class="card-product__title"><a href="/shop/product_details/{{$value->id}}">{{$value->mebel_name}}</a></h4>
                            <p class="card-product__price">{{$value->mebel_price}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ================ Best Selling item  carousel end ================= -->
    </main>
@endsection
