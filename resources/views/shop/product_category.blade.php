@extends('layout.layout')
@section('content')
    <!--================ End Header Menu Area =================-->
    <!-- ================ category section start ================= -->
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">Xona mebellari</div>
                        <ul class="main-categories">
                            <li class="common-filter">
                                <form action="{{route('filter')}}" method="get">

                                    <ul>
                                        {{--............Category furnitures..............--}}
                                        @foreach($category as $value)
                                            <li class="filter-list"><input class="pixel-radio" type="radio"
                                                                           id="{{$value->id}}" value="{{$value->id}}"
                                                                           name="category"><label
                                                    for="{{$value->id}}">{{$value->category_name}}<span
                                                        class="text-primary"> ({{$value->mebels_count}})</span></label>
                                            </li>
                                        @endforeach
                                    </ul>

                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-filter">
                        <div class="top-filter-head">Mebel Turlari</div>
                        <div class="common-filter">
                            @foreach($type as $value)
                                <li class="filter-list"><input class="pixel-radio" value="{{$value->id}}" type="radio"
                                                               id="{{$value->mebel_type}}" name="type"><label
                                        for="{{$value->mebel_type}}">{{$value->mebel_type}}<span class="text-primary"> ({{$value->mebels_count}})</span></label>
                                </li>
                                @endforeach
                                </ul>
                        </div>
                        {{--                        <div class="common-filter">--}}
                        {{--                            <div class="head">Price</div>--}}
                        {{--                            <div class="price-range-area">--}}
                        {{--                                <div id="price-range"></div>--}}
                        {{--                                <div class="value-wrapper d-flex">--}}
                        {{--                                    <div class="price">Price:</div>--}}
                        {{--                                    <span>$</span>--}}
                        {{--                                    <div id="lower-value"></div>--}}
                        {{--                                    <div class="to">to</div>--}}
                        {{--                                    <span>$</span>--}}
                        {{--                                    <div id="upper-value"></div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <button class="input-group btn btn-primary d-inline">Filtr</button>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    </form>
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @foreach($furniture as $value)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card text-center card-product">
                                        <div class="card-product__img">
                                            <img class="card-img" src="/public/{{$value->img}}" width="300px !important"
                                                 alt="">
                                            <ul class="card-product__imgOverlay">
                                                <li>
                                                    <button><a href="/shop/product_details/{{$value->id}}"><i class="ti-search"></i></a></button>
                                                </li>
                                                <li>
                                                    <button><a href="{{route('addBox',['id'=>$value->id])}}"><i
                                                                class="ti-shopping-cart"></i></a></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <p></p>
                                            <h4 class="card-product__title"><a href="#">{{$value->mebel_name}}</a></h4>
                                            <p class="card-product__price">{{$value->mebel_price}} so'm</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{ $furniture->links() }}
                    </section>
                    <!-- End Best Seller -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================ category section end ================= -->

    <!-- ================ top product area start ================= -->
    <section class="related-product-area">
        <div class="container">
            <div class="section-intro pb-60px">
                <h2>Eng <span class="section-intro__style">Yangilar Mebellar</span></h2>
            </div>
            <div class="row mt-30">
                @foreach($top as $item)
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="single-search-product-wrapper">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="/public/{{$item->img}}" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">{{$item->mebel_name}}</a>
                                    <div class="price">{{$item->mebel_price}} so'm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================ top product area end ================= -->

@endsection




