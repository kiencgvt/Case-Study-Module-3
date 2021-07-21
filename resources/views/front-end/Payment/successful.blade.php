@extends('front-end.layouts.masters')
@section('content')
    <div class="py-5 osahan-coming-soon d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="text-center pb-3">
                <h1 class="font-weight-bold">{{ auth()->user()->name }}, đơn hàng của bạn đã thanh toán thành
                    công!!!</h1>
            </div>
            <!-- continue -->
            <div class="bg-white rounded text-center p-4 shadow-sm">
                <h1 class="display-1 mb-4">🎊</h1>
                <h6 class="font-weight-bold mb-2">Chuẩn bị đơn đặt hàng của bạn</h6>
                <p class="small text-muted">Đơn hàng của bạn sẽ được chuẩn bị và sẽ đến sớm</p>
                <a href="{{ route('home.index') }}" class="btn rounded btn-primary btn-lg btn-block">Trang chủ</a>
            </div>
        </div>
    </div>
@endsection
