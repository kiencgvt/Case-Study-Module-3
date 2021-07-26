@extends('front-end.layouts.masters')
@section('content')
    <div class="container">
        <div class="pt-2 pb-3 title d-flex align-items-center">
            <h5>Món ăn giảm giá</h5>
        </div>
        <div class="most_sale">
            <div class="row mb-3">
                @foreach($foodDiscount as $key => $food)
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
                            <a href="{{route('restau.show-food',$food->id)}}">
                                <img alt="#" src="{{ asset('storage/'.$food->image) }}" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="{{route('restau.show-food',$food->id)}}" class="text-black">{{$food->name}}

                                    </a>
                                </h6>
                                <p class="text-gray mb-3">Cửa hàng: {{\App\Models\Shop::find($food->shop_id)->name}}</p>
                                <p class="text-gray mb-3 time"><span
                                        class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i
                                            class="feather-clock"></i> {{$food->preparation_time}} phút</span> <span
                                        class="float-right text-black-50"> $500 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small>{{number_format($food->promotion_price)}} đ</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$foodDiscount->links()}}
        </div>
    </div>
@endsection
