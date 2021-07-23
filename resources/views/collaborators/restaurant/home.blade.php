@extends('front-end.layouts.masters')
@section('content')
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="{{route('home.index')}}" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img style="width: 30px;" alt="#" src="data:image/jpeg;base64,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" class="rounded-circle">
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
                                <img style="width: 30px;" alt="#" src="data:image/png;base64,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" class="rounded-circle">
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

                <a href="{{ route('shop.create') }}">Thêm mới cửa hàng </a>

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

