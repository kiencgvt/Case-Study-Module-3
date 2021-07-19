<header class="section-header">
    <section class="header-main shadow-sm bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-1">
                    <a href="" class="brand-wrap mb-0">
                        <img alt="#" class="img-fluid" src="{{asset('image/logo_web.png')}}">
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-3 d-flex align-items-center m-none">
                    <div class="dropdown mr-3">
                        <a class="text-dark dropdown-toggle d-flex align-items-center py-3" href="#" id="navbarDropdown"
                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div><i class="feather-map-pin mr-2 bg-light rounded-pill p-2 icofont-size"></i></div>
                            <div>
                                <p class="text-muted mb-0 small">Select Location</p>
                            </div>
                        </a>
                        <div class="dropdown-menu p-0 drop-loc" aria-labelledby="navbarDropdown">
                            <div class="osahan-country">
                                <div class="search_location bg-primary p-3 text-right">
                                    <div class="input-group rounded shadow-sm overflow-hidden">
                                        <div class="input-group-prepend">
                                            <button
                                                class="border-0 btn btn-outline-secondary text-dark bg-white btn-block">
                                                <i class="feather-search"></i></button>
                                        </div>
                                        <input type="text" class="shadow-none border-0 form-control"
                                               placeholder="Enter Your Location">
                                    </div>
                                </div>
                                <div class="p-3 border-bottom">
                                    <a href="home.html" class="text-decoration-none">
                                        <p class="font-weight-bold text-primary m-0"><i class="feather-navigation"></i>
                                            New York, USA</p>
                                    </a>
                                </div>
                                <div class="filter">
                                    <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom">Choose your country</h6>
                                    <div class="custom-control  border-bottom px-0 custom-radio">
                                        <input type="radio" id="customRadio1" name="location"
                                               class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3" for="customRadio1">Afghanistan</label>
                                    </div>
                                    <div class="custom-control  border-bottom px-0 custom-radio">
                                        <input type="radio" id="customRadio2" name="location"
                                               class="custom-control-input" checked="">
                                        <label class="custom-control-label py-3 w-100 px-3"
                                               for="customRadio2">India</label>
                                    </div>
                                    <div class="custom-control  border-bottom px-0 custom-radio">
                                        <input type="radio" id="customRadio3" name="location"
                                               class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3"
                                               for="customRadio3">USA</label>
                                    </div>
                                    <div class="custom-control  border-bottom px-0 custom-radio">
                                        <input type="radio" id="customRadio4" name="location"
                                               class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3"
                                               for="customRadio4">Australia</label>
                                    </div>
                                    <div class="custom-control  border-bottom px-0 custom-radio">
                                        <input type="radio" id="customRadio5" name="location"
                                               class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3"
                                               for="customRadio5">Japan</label>
                                    </div>
                                    <div class="custom-control  px-0 custom-radio">
                                        <input type="radio" id="customRadio6" name="location"
                                               class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3"
                                               for="customRadio6">China</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col.// -->
                <div class="col-8">
                    <div class="d-flex align-items-center justify-content-end pr-5">
                        <!-- search -->
                        <a href="search.html" class="widget-header mr-4 text-dark">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-search h6 mr-2 mb-0"></i> <span>Search</span>
                            </div>
                        </a>
                        <!-- offers -->
                        <a href="offers.html" class="widget-header mr-4 text-white btn bg-primary m-none">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-disc h6 mr-2 mb-0"></i> <span>Offers</span>
                            </div>
                        </a>
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
                                    <a class="dropdown-item" href="profile.html">Tai khoan</a>
                                    @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Danh cho quan tri vien</a>
                                    @endif

                                    <a class="dropdown-item" href="contact-us.html">Cua hang cua toi</a>
                                    <a class="dropdown-item" href="terms.html">Doi mat khau</a>
                                    <a class="dropdown-item" href="{{ route('auth.logout') }}">Dang xuat</a>
                                </div>
                            </div>
                    @endif
                    <!-- signin -->
                        <a href="checkout.html" class="widget-header mr-4 text-dark">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-shopping-cart h6 mr-2 mb-0"></i> <span>Cart</span>
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
