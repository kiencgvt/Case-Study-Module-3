@extends('front-end.layouts.masters')
@section('content')
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="{{route('home.index')}}" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img style="width: 30px" src="{{asset('image/Home-icon.png')}}" alt="">
                            </div>
                            <div class="right">
                                <h6 class="mb-1 font-weight-bold">Trang chủ<i
                                        class="feather-check-circle text-success"></i></h6>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('shop.index')}}" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img style="width: 30px" src="{{asset('image/restaurantIcon.png')}}" alt="">
                            </div>
                            <div class="right">
                                <h6 class="mb-1 font-weight-bold">Danh sách cửa hàng<i
                                        class="feather-check-circle text-success"></i></h6>
                            </div>
                        </div>
                    </a>
                    <!-- profile-details -->
                    <div class="bg-white profile-details">
                        <a data-toggle="modal" data-target="#paycard"
                           class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Địa chỉ</h6>

                            </div>

                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal"
                           data-target="#inviteModal">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1">Thanh toán</h6>

                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="faq.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i> Vận chuyển
                                </h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="contact-us.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i> Liên hệ
                                </h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="terms.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i>Thời gian
                                </h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="privacy.html" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i>Bảo mật</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <h1>Danh sách đơn hàng </h1>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Order_date</th>
                        <th scope="col">Require_date </th>
                        <th scope="col">Status </th>
                        <th scope="col">Name_user </th>
                        <th scope="col">Total_price </th>
                        <th scope="col">Order_detail </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $orders as $key => $order )
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $order->order->order_date }}</td>
                            <td>{{ $order->order->require_date }}</td>
                            <td>{{ $order->order->status }}</td>
                            <td>{{ $order->order->user->name }}</td>
                            <td>{{ $order->order->total_price }}</td>
                            <td><a href="{{route('shop.orderDetail',[$idShop,$order->order->id])}}"><button type="button" class="btn btn-success">Xem</button></a></td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
