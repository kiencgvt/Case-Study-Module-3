@extends('front-end.layouts.masters')
@section('content')
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="{{route('home.index')}}" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img style="width: 30px" alt="#" src="data:image/jpeg;base64,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" class="rounded-circle">
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
                                <img style="width: 30px" alt="#" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWWQ9eUzZ6jks0eC2ukhA1RaxyCHVp99nxMA&usqp=CAU" class="rounded-circle">
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

