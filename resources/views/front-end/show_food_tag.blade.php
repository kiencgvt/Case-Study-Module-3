@extends('front-end.layouts.masters')
@section('content')
    <div class="container">
        <div class="p-1 bg-primary bg-primary mt-n1 rounded position-relative">
            <div class="d-flex align-items-center">
                <div class="feather_icon">
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                            class="p-2 bg-light rounded-circle font-weight-bold  feather-upload"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark mx-2"><i
                            class="p-2 bg-light rounded-circle font-weight-bold  feather-star"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                            class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                </div>
                <a href="contact-us.html" class="btn btn-sm btn-outline-light ml-auto">Contact</a>
            </div>
        </div>
    </div>
    <!-- Menu -->
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-8 pt-3">
                <h4>Thẻ: {{$food->tag}}</h4>
                @foreach($foodTags as $key => $foodTag)
                <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                {{--                    <div class="d-flex item-aligns-center">--}}
                {{--                        <p class="font-weight-bold h6 p-3 border-bottom mb-0 w-100">Menu</p>--}}
                <!-- <a class="small text-primary font-weight-bold ml-auto" href="#">View all <i class="feather-chevrons-right"></i></a> -->
                    {{--                    </div>--}}

                    <div class="row m-0">
                        <div class="col-md-12 px-0 border-top">
                            <div>

                                <div class="media">
                                    <div class="col-md-6">
                                        <img width="100%" alt="#" src="{{ asset('storage/'.$foodTag->image) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mb-1">{{$foodTag->name}}</h4>
                                        <p class="text-muted mb-0">Giá: {{number_format($foodTag->price)}} đ</p>
                                        <p class="text-muted mb-0">Giá khuyến
                                            mãi: {{number_format($foodTag->promotion_price)}} đ</p>
                                        <p class="text-muted mb-0">Phí dịch
                                            vụ: {{number_format($foodTag->service_charge)}} đ</p>
                                        <p class="text-muted mb-0">Cửa
                                            hàng: {{$foodTag->shop->name}} </p>
                                        <a href="#">Top Star: </a>
                                        <div class="d-inline-block" style="font-size: 14px;"><i
                                                class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star"></i>
                                        </div>
                                        <p class="text-muted mb-0">Thể
                                            loại: {{$foodTag->category->name}} </p>
                                        <p class="text-muted mb-0">Thời gian chuẩn bị: {{$foodTag->preparation_time}}
                                            phút</p>
                                        <p class="text-muted mb-0"><a href="">Thẻ: {{$foodTag->tag}}</a> </p>
                                        <span><a href="{{route('cart.addToCart', $foodTag->id)}}"
                                                 class="btn btn-success">Add To Cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                    {{$foodTags->links()}}

            </div>
            <div class="col-md-4">
                <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                            <img alt="" src="{{ auth()->user()->avatar}}"
                                 class="mr-3 rounded-circle img-fluid">
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 font-weight-bold">{{ auth()->user()->name }}</h6>
                            </div>
                        </div>
                    @endif
                    <div id="inner"></div>

                    @if(\Illuminate\Support\Facades\Session::has('cart'))
                        @foreach(\Illuminate\Support\Facades\Session::get('cart')->items as $key =>$value)
                            <div id="food-{{ $value['item']->id }}" class="bg-white border-bottom py-2">
                                <div
                                    class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                    <div class="media align-items-center">
                                        <div class="mr-2 text-danger">&middot;</div>
                                        <div class="media-body">
                                            <p class="m-0">{{$value['item']->name}}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="count-number float-right">
                                            <button  type="button" class="btn-sm left dec btn btn-outline-secondary button-minus" data-id="{{ $value['item']->id }}">
                                                <i class="feather-minus"></i> </button>
                                            <input
                                                class="count-number-input quantity-food" type="text" data-id="{{ $value['item']->id }}" readonly=""
                                                id="{{ $value['item']->id }}"
                                                value="{{$value['quantity']}}">
                                            <button  type="button" class="btn-sm right inc btn btn-outline-secondary button-plus" data-id="{{ $value['item']->id }}">
                                                <i class="feather-plus"></i>
                                            </button>
                                        </span>
                                        <p class="text-gray mb-0 float-right ml-2 text-muted small" id="food-total-price-{{ $value['item']->id }}">{{number_format($value['price'])}}
                                            đ</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="bg-white p-3 clearfix border-bottom">
                            <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right" id="total-price-cart">{{ number_format(session('cart')->totalPrice) }} đ</span>
                            </h6>
                        </div>
                        <div class="p-3">
                            <a class="btn btn-success btn-block btn-lg" href="{{ route('paymentSuccessful') }}">PAY</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection


