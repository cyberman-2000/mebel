@extends('layout.layout')
@section('content')

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <form action="{{route('makeOrder')}}" method="POST">
                        @csrf
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Mebel</th>
                            <th scope="col">Narxi</th>
                            <th scope="col">Soni</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        $a=1;
                        ?>
                        @foreach($cart as $item)

                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="/public/{{$item->attributes->image}}" alt="" width="90rem">
                                    </div>
                                    <div class="media-body">
                                        <p>{{$item->name}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{$item->price}}</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="{{$a}}" id="sst{{$item->id}}" maxlength="12" value="1" title="Quantity:"
                                           class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst{{$item->id}}'); var sst{{$item->id}} = result.value; if( !isNaN( sst{{$item->id}} )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst{{$item->id}}'); var sst{{$item->id}} = result.value; if( !isNaN( sst{{$item->id}} ) &amp;&amp; sst{{$item->id}} > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                </div>
                                <a href="{{route('remove',['id'=>$item->id])}}" class="btn btn-danger">O'chirish</a>
                            </td>
                        </tr>
                            <?$a=$a+1;?>
                        @endforeach
                        <tr>

                            <td>
                                <h5>Jami</h5>
                            </td>
                            <td>
                                <h5>{{$sum}}</h5>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td class="d-none-l">

                            </td>
                            <td class="">

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="btn btn-success " href="{{route('product_category')}}">Xaridni davom qilish</a>
                                    <button class="primary-btn ml-2">Xarid</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
@endsection
