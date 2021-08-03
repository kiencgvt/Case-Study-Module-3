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
                                        <span><a data-id="{{$foodTag->id}}"
                                                 class="btn btn-success addToCart">Add To Cart</a></span>
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
                        <div id="cart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection


