<header class="section-header">
    <section class="header-main shadow-sm bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-1">
                    <a href="{{ route('home.index') }}" class="brand-wrap mb-0">
                        <img alt="#" class="img-fluid" src="{{ asset('image/logo_web.png') }}">
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-2 d-flex align-items-center m-none"></div>
                <!-- col.// -->
                <div class="col-8">
                    <div class="d-flex align-items-center justify-content-end pr-5">
                        <!-- search -->
                        <a href="search.html" class="widget-header mr-4 text-dark">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-search h6 mr-2 mb-0"></i> <span>Tìm kiếm</span>
                            </div>
                        </a>
                        <!-- offers -->
                        @if(!\Illuminate\Support\Facades\Auth::check())
                            <a href="offers.html" class="widget-header mr-4 text-white btn bg-primary m-none">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-disc h6 mr-2 mb-0"></i> <span>Đăng kí</span>
                                </div>
                            </a>
                        @endif
                        @if(!\Illuminate\Support\Facades\Auth::check())
                        <!-- signin -->
                            <a href="{{ route('auth.login') }}" class="widget-header mr-4 text-dark m-none">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-user h6 mr-2 mb-0"></i> <span>Sign in</span>
                                </div>
                            </a>
                        @endif
                    <!-- my account -->
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <div class="dropdown mr-4 m-none">
                                <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img alt="#" src="{{asset('image/1.jpg')}}"
                                         class="img-fluid rounded-circle header-user mr-2 header-user"> {{ auth()->user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="profile.html">Tài khoản</a>
                                    @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Quản trị viên</a>
                                    @endif
                                    @if(\Illuminate\Support\Facades\Auth::user()->isCollab())
                                        <a class="dropdown-item" href="{{route('shop.index')}}">Nhà hàng</a>
                                    @endif
                                    <a class="dropdown-item" href="terms.html">Đổi mật khẩu</a>
                                    <a class="dropdown-item" href="{{ route('auth.logout') }}">Đăng xuất</a>
                                </div>
                            </div>
                    @endif
                    <!-- signin -->
                        <a href="checkout.html" class="widget-header mr-4 text-dark">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-shopping-cart h6 mr-2 mb-0"></i> <span>Giỏ hàng</span>
                            </div>
                        </a>
                        <a class="toggle" href="#">
                            <span></span>
                        </a>
                    </div>
                    <!-- widgets-wrap.// -->
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>
    <!-- header-main .// -->
</header>
