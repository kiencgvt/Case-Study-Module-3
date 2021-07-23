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
                    <h1>Danh sách món ăn</h1>

                <button type="button" class="btn btn-warning"><a href="{{route('collab.create')}}">Thêm mới món ăn</a></button>
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="{{route('collab.search')}}" method="get">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
                <div class="col-12">
                    @if (Session::has('success'))
                        <p class="text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                        </p>
                    @endif
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Promotion_price</th>
                        <th scope="col">Service_charge</th>
                        <th scope="col">Shop</th>
                        <th scope="col">Category</th>
                        <th scope="col">Preparation_time</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($foods as $key=>$food)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td><img src="{{asset('storage/'.$food->image)}}" alt="" width="70px"></td>
                            <td>{{$food->name}}</td>
                            <td>{{number_format($food->price)}}</td>
                            <td>{{number_format($food->promotion_price)}}</td>
                            <td>{{number_format($food->service_charge)}}</td>
                            <td>{{\App\Models\Shop::find($food->shop_id)->name}}</td>
                            <td>{{\App\Models\Category::find($food->category_id)->name}}</td>
                            <td>{{$food->preparation_time}}</td>
                            <td>{{$food->tag}}</td>
                            <td><a href="{{ route('collab.edit',$food->id) }}" class="btn btn-success">Update</a>
                            </td>
                            <td><a href="{{ route('collab.delete',$food->id) }}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{$foods->links()}}
            </div>
        </div>
    </div>
@endsection

