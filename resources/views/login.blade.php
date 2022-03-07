@extends('layout.layout')
@section('content')
    <div class="container">
        @include('layout.alerts')
    </div>
    <!--================Login Box Area =================-->
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h2 class="text text-danger">Xarid qilish uchun Registratsiyadan o'tgan bo'lishingiz shart !</h2>
                            <h4>Saytimizda yangimisiz?</h4>
                            <p>Bu sayt uy mebellari do'konidir. Ushbu sayta onlayn buyurtma qilishingiz mumkun.</p>
                            <a class="button button-account" href="{{route('registration')}}">Registratsiyadan o'tish</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                        <h3 class="m-3">Saytga kirish</h3>
                        <form class="row login_form" action="{{route('check')}}" method="POST" id="register_form" >
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control text-dark @error('login') is-invalid @enderror" id="email" name="login" value="{{old('login')}}" placeholder="Login" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Login'">
                                @error('login')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control text-dark @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control text-dark @error('password') is-invalid @enderror" id="password" name="password" value="" placeholder="Parolingiz"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Parolingiz'">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-register w-100">Kirish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->
@endsection
