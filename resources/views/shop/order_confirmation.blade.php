@extends('layout.layout')
@section('content')
    <!--================Order Details Area =================-->
    <section class="order_details section-margin--small">
        <div class="container">
            <p class="text-center billing-alert">@if(auth()->check())
                    Rahmat. Buyurtmangiz qabul qilindi.
                @else <a href="{{route('login')}}">Siz xali ro'yhatdan o'tmagansiz</a>  @endif</p>
            <div class="order_details_table">
                <h2>Buyurtmalar haqida ma'lumot</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Mahsulot</th>
                            <th scope="col">Soni</th>
                            <th scope="col">Jami narxi</th>
                            <th scope="col">Xarid qilingan vaqt</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($story as $item)
                        <tr>
                            <td>
                                <p>{{$item->mebels->mebel_name}}</p>
                            </td>
                            <td>
                                <h5>x {{$item->count_order}}</h5>
                            </td>
                            <td>
                                <p>{{$item->total_amount}} sum</p>
                            </td>
                            <td>
                                <p>{{$item->getOrderDate()}}</p>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <h4>{{$total}} sum</h4>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Order Details Area =================-->
    @endsection
