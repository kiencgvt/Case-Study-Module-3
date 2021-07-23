@extends('front-end.layouts.masters')
@section('content')
    <div class="container">
        <div class="pt-4 pb-2 title d-flex align-items-center">
            <h5 class="m-0">{{$categorycurrent->name}}</h5>
        </div>
        <div class="trending-slider">
            @foreach($shopOfCategories as $restaurant)
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i
                                        class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                        class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                            </div>
                            <a href="{{ route('restau.detail-category', [$restaurant->id, $category_id])}}">
                                <img alt="" src="{{ asset($restaurant->getImage()) }}" class="img-fluid item-img w-100" style="height: 250px">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="{{ route('restau.detail-category', [$restaurant->id, $category_id])}}" class="text-black">{{ $restaurant->name }}
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
    </div>
@endsection
