@extends('front-end.layouts.masters')
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
                <div class="rounded shadow-sm p-4 bg-white">
                    <h5 class="mb-4">Chỉnh sửa cửa hàng</h5>
                    <div id="edit_profile">
                        <div>
                            <form method="post" action="{{ route('shop.update',$shop->id) }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Ảnh</label>
                                    <input type="file" class="form-control" name="image" placeholder="Enter image"
                                           value="">
                                    @error('image')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter name"
                                           value="{{$shop->address}}">
                                    @error('address')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNumber1">Tên cửa hàng</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter price"
                                           value="{{$shop->name}}">
                                    @error('name')
                                    <div class="alert alert-danger">{{$message}}</div>
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



