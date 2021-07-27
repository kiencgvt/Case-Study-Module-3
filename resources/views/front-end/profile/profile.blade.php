@extends('front-end.layouts.masters')
@section('content')
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="profile.html" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img alt="#" src="{{ asset(auth()->user()->avatar) }}" class="rounded-circle" width="60">
                            </div>
                            <div class="right">
                                <h6 class="mb-1 font-weight-bold">{{ auth()->user()->name }} <i class="feather-check-circle text-success"></i></h6>
                                <p class="text-muted m-0 small">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </a>
                    <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                        <p class="m-0">Accounts Credits</p>
                        <h5 class="m-0 ml-auto text-primary">$52.25</h5>
                    </div>
                    <!-- profile-details -->
                    <div class="bg-white profile-details">
                        <a data-toggle="modal" data-target="#paycard" class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Payment Cards</h6>
                                <p class="small text-muted m-0">Add a credit or debit card</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a data-toggle="modal" data-target="#exampleModal" class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Address</h6>
                                <p class="small text-muted m-0">Add or remove a delivery address</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal" data-target="#inviteModal">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1">Refer Friends</h6>
                                <p class="small text-primary m-0">Get $10.00 FREE</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="faq.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i> Delivery Support</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="contact-us.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i> Contact</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="terms.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term of use</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="privacy.html" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i> Privacy policy</h6>
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
                    <h5 class="mb-4">My account</h5>
                    @if(session()->has('update-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('update-success') }}
                    </div>
                    @endif

                    @if(session()->has('success-change'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success-change') }}
                        </div>
                    @endif

                    <div id="edit_profile">
                        <div>
                            <form method="post" action="{{ route('profile.update') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{ auth()->user()->email }}" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->address }}" name="address">
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->phone }}" name="phone">
                                </div>
                                <div class="form-group">
                                    <label>Vai trò</label>
                                    <p class="form-control">{{ auth()->user()->role }}</p>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Lưu thay đổi</button>
                                </div>
                            </form>
                        </div>
                        <div class="additional">
                            <div class="change_password my-3">
                                <a href="{{ route('profile.showViewChangePassword') }}" class="p-3 border rounded bg-white btn d-flex align-items-center">Đổi mật khẩu
                                    <i class="feather-arrow-right ml-auto"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
