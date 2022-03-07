@extends('layout.layout')
@section('content')

    <!--================Login Box Area =================-->
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4>Allaqachon ro'yhattan o'tganmisiz?</h4>
                            <p>Bu sayt uy mebellari do'konidir. Ushbu sayta onlayn buyurtma qilishingiz mumkun.</p>
                            <a class="button button-account" href="{{route('login')}}">Kirish</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                        <h3 class="m-3">Create an account</h3>
                        <form class="row login_form" action="{{route('create')}}" method="POST" id="register_form" >
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control text-dark @error('name') is-invalid @enderror" value="{{old('name')}}" id="name"  name="name" placeholder="Ismingiz" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ismingiz'">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control text-dark @error('surname') is-invalid @enderror" id="surname" value="{{old('surname')}}" name="surname" placeholder="Familiyangiz" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Familiyangiz'">
                                @error('surname')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{old('phone')}}" name="phone"  placeholder="Raqamingiz +998" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Raqamingiz +998'">
                                @error('phone')
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
                                <input type="text" class="form-control text-dark @error('login') is-invalid @enderror" id="email" name="login" value="{{old('login')}}" placeholder="Login" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Login'">
                                @error('login')
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
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Parolni tasdiqlash" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Parolni tasdiqlash'">
                                @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-register w-100">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->
@endsection
