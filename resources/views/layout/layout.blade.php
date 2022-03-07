<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aroma Shop - Home</title>
    <link rel="icon" href="{{asset('public/assets/img/Fevicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/lstyle.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/nouislider.min.css')}}">
</head>
<body>
<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="{{route('home')}}"><img src="{{asset('public/assets/img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item "><a class="nav-link" href="{{route('home')}}">Bosh sahifa</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('product_category')}}">Mebell Turlari</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('order_confirmation')}}">Buyurtmalar tarixi</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Bizga bog'lanish</a></li>
                    </ul>

                    <ul class="nav-shop">
                        <li class="nav-item"><button><i class="ti-search"></i></button></li>
                        <li class="nav-item"><a href="{{route('shopping_cart')}}"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}}</span></button></a> </li>
                        @if(auth()->check())
                            <a href="#"><img src="{{asset('public')}}{{auth()->user()->img}}" alt="" width="50px" class="rounded-circle m-2">{{ auth()->user()->name }}</a>
                            <li class="nav-item"><a class="button button-header" href="{{route('logout')}}">Chiqish</a></li>
                        @else
                            <li class="nav-item"><a class="button button-header" href="{{route('login')}}">Kirish</a></li>
                            <li class="nav-item m-lg-0"><a class="button button-header" href="{{route('registration')}}">Ro'yhatdan o'tish</a></li>
                            @endif

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->
{{--.......................CONTENT BAR............................--}}




@yield('content')




{{--.......................END CONTENT BAR........................--}}
<!--================ Start footer Area  =================-->
<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title large_title ">Bizning Maqsadimiz</h4>
                        <p>
                            Insonlarga sifatli va arzon xizmat ko'rsatish.
                            Biz faqat sizning foydangizni o'ylaymiz
                        </p>
                        <p>
                            Bizni tanlaganingiz uchun rahmat!
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Tezkor havolalar</h4>
                        <ul class="list">
                            <li class="nav-item "><a class="nav-link" href="{{route('home')}}">Bosh sahifa</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('product_category')}}">Mebell Turlari</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Bizga bog'lanish</a></li>
                            @if(auth()->check())
                                <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Chiqish</a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Kirish</a></li>
                                <li class="nav-item m-lg-0"><a class="nav-link" href="{{route('registration')}}">Ro'yhatdan o'tish</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h4 class="footer_title">Bizning Hamkorlar</h4>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="{{asset('public/assets/img/gallery/r1.jpg')}}" alt=""></li>
                            <li><img src="{{asset('public/assets/img/gallery/r2.jpg')}}" alt=""></li>
                            <li><img src="{{asset('public/assets/img/gallery/r3.jpg')}}" alt=""></li>
                            <li><img src="{{asset('public/assets/img/gallery/r5.jpg')}}" alt=""></li>
                            <li><img src="{{asset('public/assets/img/gallery/r7.jpg')}}" alt=""></li>
                            <li><img src="{{asset('public/assets/img/gallery/r8.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Bog'lanish usullari</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                Bizning manzil
                            </p>
                            <p>Urganch shahar Al-Xorarmiy 12 <br>
                            TATU binosi</p>

                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Raqmimiz
                            </p>
                            <p>
                                +998975147173 <br>
                                +998975103644
                            </p>

                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Elektron po'chta
                            </p>
                            <p>
                                javohirrajapboyev@gmail.com <br>
                                jal99ol3bek@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Barcha huquqlar himoyalangan! | Bu sayt Javohir & Jaloladdin tomonidan yaratilgan  </p>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->



<script src="{{asset('public/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/assets/js/skrollr.min.js')}}"></script>
<script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('public/assets/js/nouislider.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('public/assets/js/mail-script.js')}}"></script>
<script src="{{asset('public/assets/js/main.js')}}"></script>
</body>
</html>

