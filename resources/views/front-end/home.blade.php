@extends('front-end.layouts.masters')
@section('content')
    <div class="osahan-home-page">
        <div class="bg-primary p-3 d-none">
            <div class="text-white">
                <div class="title d-flex align-items-center">
                    <a class="toggle" href="#">
                        <span></span>
                    </a>
                    <h4 class="font-weight-bold m-0 pl-5">Browse</h4>
                    <a class="text-white font-weight-bold ml-auto" data-toggle="modal" data-target="#exampleModal"
                       href="#">Filter</a>
                </div>
            </div>
            <div class="input-group mt-3 rounded shadow-sm overflow-hidden">
                <div class="input-group-prepend">
                    <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i
                            class="feather-search"></i></button>
                </div>
                <input type="text" class="shadow-none border-0 form-control"
                       placeholder="Search for restaurants or dishes">
            </div>
        </div>

        <div class="container">

            <div class="cat-slider">
                @foreach($categories as $category)
                <div class="cat-item px-1 py-3">
                    <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="{{route('category.trend',$category->id)}}">
                        <img alt="#" src="{{ asset('storage/'.$category->image) }}" class="img-fluid mb-2" style="width: 170px;height: 78px;object-fit: fill">
                        <p class="m-0 small">{{ $category->name }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="pt-4 pb-2 title d-flex align-items-center">
                <h5 class="m-0">Chọn nhà hàng</h5>
            </div>
            <div class="trending-slider">
                @foreach($restaurants as $restaurant)
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                            </div>
                            <a href="{{ route('restau.detail', $restaurant->id) }}">
                                <img alt="" src="{{ asset($restaurant->getImage()) }}" class="img-fluid item-img w-100" style="height: 250px">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="{{ route('restau.detail', $restaurant->id) }}" class="text-black">{{ $restaurant->name }}
                                    </a>
                                </h6>
                                <p class="text-gray mb-3">{{ $restaurant->address }}</p>
                                <p class="text-gray mb-3 time"><span
                                        class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                            class="feather-clock"></i> 15–30 min</span> <span
                                        class="float-right text-black-50"> $350 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small> Use Coupon OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="py-3 title d-flex align-items-center">
                <h5 class="m-0">Món ăn được xem nhiều nhất</h5>
            </div>
            <div class="bg-white">
                <div class="container">
                    <div class="offer-slider">
                        @foreach($mostViewFoods as $mostViewFood)
                            <div class="cat-item px-1 py-3">
                                <a class="d-block text-center shadow-sm" href="{{ route('restau.show-food',$mostViewFood->id) }}">
                                    <img alt="#" src="{{asset('storage/'.$mostViewFood->image)}}" class="img-fluid rounded" style="width: 300px;height: 150px">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="py-3 title d-flex align-items-center">
                <h5 class="m-0">Giao nhanh nhất</h5>
            </div>
            <div class="bg-white">
                <div class="container">
                    <div class="offer-slider">
                        @foreach($fastDeliveryFoods as $fastDeliveryFood)
                            <div class="cat-item px-1 py-3">
                                <a class="d-block text-center shadow-sm" href="{{ route('restau.show-food',$fastDeliveryFood->id) }}">
                                    <img alt="#" src="{{asset('storage/'.$fastDeliveryFood->image)}}" class="img-fluid rounded" style="width: 300px;height: 150px">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="py-3 title d-flex align-items-center">
                <h5 class="m-0">Mua nhiều nhất</h5>
            </div>
            <div class="bg-white">
                <div class="container">
                    <div class="offer-slider">
                        @foreach($mostSellFoods as $mostSellFood)
                            <div class="cat-item px-1 py-3">
                                <a class="d-block text-center shadow-sm" href="{{ route('restau.show-food',$mostSellFood->food->id) }}">
                                    <img alt="#" src="{{asset('storage/'.$mostSellFood->food->image)}}"  class="img-fluid rounded" style="width: 300px;height: 150px">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Most popular --><!-- Most sales -->
            {{---------------------------------------------------- Hết -------------------------------------------------------}}

            <div class="pt-2 pb-3 title d-flex align-items-center">
                <a href="{{route('discountFood')}}"><h5 class="m-0">Món giảm giá</h5></a>
            </div>
            <div class="most_sale">
                <div class="row mb-3">
                    @foreach($discountedFoods as $discountedFood)
                    <div class="col-md-4 mb-3">
                        <div
                            class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i
                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                            class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span
                                        class="badge badge-dark">Promoted</span></div>
                                <a href="{{ route('restau.show-food', $discountedFood->id) }}">
                                    <img alt="#" src="{{ asset('storage/' . $discountedFood->image) }}" class="img-fluid item-img w-100" style="width: 300px;height: 150px">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="{{ route('restau.show-food', $discountedFood->id) }}" class="text-black">{{ $discountedFood->name }}

                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">{{ number_format($discountedFood->promotion_price) }} đ</p>
                                    <p class="text-gray mb-3 time"><span
                                            class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                                class="feather-clock"></i> {{ $discountedFood->preparation_time }} min</span> <span
                                            class="float-right text-black-50"> $500 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
