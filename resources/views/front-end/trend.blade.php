@extends('front-end.layouts.masters')
@section('content')
    <div class="container">
        <div class="most_popular py-5">
            <div class="d-flex align-items-center mb-4">
                <h3 class="font-weight-bold text-dark mb-0">Thể loại: {{$categorycurrent->name}}</h3>
            </div>
            <div class="row">
                @foreach($foods as $key => $food)
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><a href=""> <span class="badge badge-success"><i class="feather-star"></i> Add to cart</span></a></div>
                            <div class="favourite-heart text-danger position-absolute"><i class="feather-heart"></i></div>
                             <a><img alt="#" src="{{asset('storage/'.$food->image)}}" class="img-fluid item-img w-100"></a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h4 class="mb-1"> {{$food->name}}</h4>
                                <h6 class="text-gray mb-3">-Gía: {{number_format($food->price)}} vnđ</h6>
                                <h6 class="text-gray mb-3">-Cửa hàng:</h6>
                                <p class="text-gray mb-3"> {{\App\Models\Shop::find($food->shop_id)->name}}</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i>Thời gian chuẩn bị:  {{$food->preparation_time}} phút</span> <span class="float-right text-black-50"> $500 FOR TWO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
