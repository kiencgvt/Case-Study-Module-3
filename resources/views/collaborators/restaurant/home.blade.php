@extends('front-end.layouts.masters')
@section('content')
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="{{route('home.index')}}" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img style="width: 30px" src="{{asset('/image/Home-icon.png')}}" alt="">

                            </div>
                            <div class="right">
                                <h6 class="mb-1 font-weight-bold">Trang chủ<i
                                        class="feather-check-circle text-success"></i></h6>
{{--
                                <p class="text-muted m-0 small">collaborator@gmail.com</p>
--}}
                            </div>
                        </div>
                    </a>
                    <a href="{{route('collab.index')}}" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img style="width: 30px" src="{{asset('image/iconFood.png')}}" alt="">
                            </div>
                            <div class="right">
                                <h6 class="mb-1 font-weight-bold">Danh sách món ăn<i
                                        class="feather-check-circle text-success"></i></h6>
{{--
                                <p class="text-muted m-0 small">collaborator@gmail.com</p>
--}}
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
                                        class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i> Vận
                                    chuyển
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
                                        class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i>Bảo mật
                                </h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <h1>Danh sách cửa hàng</h1>

                <button type="button" class="btn btn-warning"><a href="{{ route('shop.create') }}">Thêm mới cửa hàng </a></button>

                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="{{route('shop.search')}}" method="get">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                               name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
                    @endif

                </nav>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Address</th>
                        <th scope="col">Name</th>
                        <th scope="col">OrderList</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shops as $key=>$shop)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td><img style="width: 40px;" src="{{asset('storage/'.$shop->image)}}" alt=""></td>
                            <td>{{$shop->address}}</td>
                            <td>{{$shop->name}}</td>
                            <td><a href="{{route('shop.order',$shop->id)}}"><button type="button" class="btn btn-success">Xem</button></a></td>
                            <td>
                                <a href="{{route('shop.edit',$shop->id)}}"><i class="feather-edit"></i></a>
                                <a href="{{route('shop.delete',$shop->id)}}" onclick="return confirm('Xóa cửa hàng này?')"><i class="feather-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

