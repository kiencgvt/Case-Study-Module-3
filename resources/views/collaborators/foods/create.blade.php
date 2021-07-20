@extends('collaborators.layouts.master')

@section('content')
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="profile.html" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img alt="#" src="img/user1.jpg" class="rounded-circle">
                            </div>
                            <div class="right">
                                <h6 class="mb-1 font-weight-bold">Cửa hàng<i
                                        class="feather-check-circle text-success"></i></h6>
                                <p class="text-muted m-0 small">collaborator@gmail.com</p>
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
                            {{--                            <div class="right ml-auto">--}}
                            {{--                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>--}}
                            {{--                            </div>--}}
                            {{--                        </a>--}}
                            {{--                        <a data-toggle="modal" data-target="#exampleModal"--}}
                            {{--                           class="d-flex w-100 align-items-center border-bottom p-3">--}}
                            {{--                            <div class="left mr-3">--}}
                            {{--                                <h6 class="font-weight-bold mb-1 text-dark">Thanh toán </h6>--}}

                            {{--                            </div>--}}
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
                <div class="rounded shadow-sm p-4 bg-white">
                    <h5 class="mb-4">Thêm mới món ăn</h5>
                    <div id="edit_profile">
                        <div>
                            <form method="post" action="{{ route('collab.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Anh</label>
                                    <input type="file" class="form-control" name="image" placeholder="Enter image">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên món ăn</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNumber1">Gía món ăn</label>
                                    <input type="text" class="form-control" name="price" placeholder="Enter price">
                                    @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gía khuyến mãi</label>
                                    <input type="text" class="form-control" name="promotion_price" placeholder="Enter promotion_price">
                                    @error('promotion_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phí dịch vụ</label>
                                    <input type="text" class="form-control" name="service_charge" placeholder="Enter service_charge">
                                    @error('service_charge')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên cửa hàng</label>
                                    <select class="form-control" name="shop_id" >
                                        @foreach($shops as $shop)
                                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('shop_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Thể loại</label>
                                    <select class="form-control" name="category_id" >
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời gian chuẩn bị</label>
                                    <input type="text" class="form-control" name="preparation_time" placeholder="Enter preparation_time">
                                    @error('preparation_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thẻ</label>
                                    <input type="text" class="form-control" name="tag" placeholder="Enter tag">
                                    @error('tag')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



