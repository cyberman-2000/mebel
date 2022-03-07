@extends('layout.layout')
@section('content')
    <!-- ================ contact section start ================= -->
    <div class="container">
        @include('layout.alerts')
    </div>
    <section class="section-margin--small">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 420px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d608.5560647478798!2d60.89647362917951!3d41.43542930413281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf68d0103d9b2a2dd!2zNDHCsDI2JzA3LjUiTiA2MMKwNTMnNDkuMyJF!5e1!3m2!1sru!2s!4v1639405871598!5m2!1sru!2s"
                        width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>


            <div class="row">
                <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Urganch shahar Al-Xorarmiy 12</h3>
                            <p>TATU binosi</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:+998975147173">+998975147173</a></h3>
                            <p>Dushanba-Shanba 9:00-16:00 gacha</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:javohirrajapboyev@gmail.com">javohirrajapboyev@gmail.com</a></h3>
                            <p>Istalgan vaqtda bizga so'rovingizni yuboring!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <form action="{{route('send_message')}}" class="form-contact contact_form"
                          action="contact_process.php" method="POST" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" name="name"
                                           id="name" value="{{old('name')}}" type="text"
                                           placeholder="Ismingizni kiriting">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="input-group  mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+</span>
                                        <span class="input-group-text">998</span>
                                    </div>

                                    <input type="tel" name="tel" class="form-control @error('tel') is-invalid @enderror"
                                           value="{{old('tel')}}">
                                    @error('tel')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('subject') is-invalid @enderror" name="subject"
                                           id="subject" type="text" value="{{old('subject')}}"
                                           placeholder="Xabar mavzu">
                                    @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <textarea
                                        class="form-control different-control w-100 @error('message') is-invalid @enderror"
                                        name="message" value="{{old('message')}}" id="message" cols="30" rows="5"
                                        placeholder="Xabar qoldirish joyi..."></textarea>
                                    @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <button type="submit" class="button button--active button-contactForm">Yuborish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
