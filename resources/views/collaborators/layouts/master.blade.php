<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <link rel="icon" type="image/png" href="img/fav.png">
    <title>Swiggiweb - Online Food Ordering Website Template</title>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick-theme.min.css')}}"/>
    <!-- Feather Icon-->
    <link href="{{asset('vendor/icons/feather.css')}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="{{asset('vendor/sidebar/demo.css')}}" rel="stylesheet">
</head>

<body class="fixed-bottom-bar">
<header class="section-header">
    <section class="header-main shadow-sm bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-1">
                    <a href="home.html" class="brand-wrap mb-0">
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
                        <!-- signin -->
                        <a href="login.html" class="widget-header mr-4 text-dark m-none">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-user h6 mr-2 mb-0"></i> <span>Sign in</span>
                            </div>
                        </a>
                        <!-- my account -->
                        <div class="dropdown mr-4 m-none">
                            <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img alt="#" src="{{asset('image/1.jpg')}}"
                                     class="img-fluid rounded-circle header-user mr-2 header-user"> Hi Osahan
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="profile.html">My account</a>
                                <a class="dropdown-item" href="faq.html">Delivery support</a>
                                <a class="dropdown-item" href="contact-us.html">Contant us</a>
                                <a class="dropdown-item" href="terms.html">Term of use</a>
                                <a class="dropdown-item" href="privacy.html">Privacy policy</a>
                                <a class="dropdown-item" href="login.html">Logout</a>
                            </div>
                        </div>
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
<div class="container position-relative">
    <div class="py-5 osahan-profile row">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                <a href="{{route('shop.index')}}" class="">
                    <div class="d-flex align-items-center p-3">
                        <div class="left mr-3">
                            <img alt="#" style="width: 30px" src="https://cdn.iconscout.com/icon/free/png-256/restaurant-1495593-1267764.png" class="rounded-circle">
                        </div>
                        <div class="right">
                            <h6 class="mb-1 font-weight-bold">Danh sách Cửa hàng<i
                                    class="feather-check-circle text-success"></i></h6>
                        </div>
                    </div>
                </a>
                <a href="{{route('collab.index')}}" class="">
                    <div class="d-flex align-items-center p-3">
                        <div class="left mr-3">
                            <img alt="#" style="width: 30px" src="data:image/png;base64,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" class="rounded-circle">
                        </div>
                        <div class="right">
                            <h6 class="mb-1 font-weight-bold">Danh sách món ăn<i
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
        @yield("content")
    </div>
</div>
<!-- Footer -->
<div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
    <div class="row">
        <div class="col selected">
            <a href="home.html" class="text-danger small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
                Home
            </a>
        </div>
        <div class="col">
            <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                Trending
            </a>
        </div>
        <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
            <div class="bg-danger rounded-circle mt-n0 shadow">
                <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                    <i class="feather-shopping-cart"></i>
                </a>
            </div>
        </div>
        <div class="col">
            <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-heart"></i></p>
                Favorites
            </a>
        </div>
        <div class="col">
            <a href="profile.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-user"></i></p>
                Profile
            </a>
        </div>
    </div>
</div>
<!-- footer -->
<footer class="section-footer border-top bg-dark">
    <div class="container">
        <section class="footer-top padding-y py-5">
            <div class="row">
                <aside class="col-md-4 footer-about">
                    <article class="d-flex pb-3">
                        <div><img alt="#" src="{{asset('image/logo_web.png')}}" class="logo-footer mr-3"></div>
                        <div>
                            <h6 class="title text-white">About Us</h6>
                            <p class="text-muted">Some short text about company like You might remember the Dell
                                computer commercials in which a youth reports.</p>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Facebook" target="_blank"
                                   href="#"><i class="feather-facebook"></i></a>
                                <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Instagram" target="_blank"
                                   href="#"><i class="feather-instagram"></i></a>
                                <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Youtube" target="_blank"
                                   href="#"><i class="feather-youtube"></i></a>
                                <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Twitter" target="_blank"
                                   href="#"><i class="feather-twitter"></i></a>
                            </div>
                        </div>
                    </article>
                </aside>
                <aside class="col-sm-3 col-md-2 text-white">
                    <h6 class="title">Error Pages</h6>
                    <ul class="list-unstyled hov_footer">
                        <li><a href="not-found.html" class="text-muted">Not found</a></li>
                        <li><a href="maintence.html" class="text-muted">Maintence</a></li>
                        <li><a href="coming-soon.html" class="text-muted">Coming Soon</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3 col-md-2 text-white">
                    <h6 class="title">Services</h6>
                    <ul class="list-unstyled hov_footer">
                        <li><a href="faq.html" class="text-muted">Delivery Support</a></li>
                        <li><a href="contact-us.html" class="text-muted">Contact Us</a></li>
                        <li><a href="terms.html" class="text-muted">Terms of use</a></li>
                        <li><a href="privacy.html" class="text-muted">Privacy policy</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3  col-md-2 text-white">
                    <h6 class="title">For users</h6>
                    <ul class="list-unstyled hov_footer">
                        <li><a href="login.html" class="text-muted"> User Login </a></li>
                        <li><a href="signup.html" class="text-muted"> User register </a></li>
                        <li><a href="forgot_password.html" class="text-muted"> Forgot Password </a></li>
                        <li><a href="profile.html" class="text-muted"> Account Setting </a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3  col-md-2 text-white">
                    <h6 class="title">More Pages</h6>
                    <ul class="list-unstyled hov_footer">
                        <li><a href="trending.html" class="text-muted"> Trending </a></li>
                        <li><a href="most_popular.html" class="text-muted"> Most popular </a></li>
                        <li><a href="restaurant.html" class="text-muted"> Restaurant Details </a></li>
                        <li><a href="favorites.html" class="text-muted"> Favorites </a></li>
                    </ul>
                </aside>
            </div>
            <!-- row.// -->
        </section>
        <!-- footer-top.// -->
        <section class="footer-center border-top padding-y py-5">
            <h6 class="title text-white">Countries</h6>
            <div class="row">
                <aside class="col-sm-2 col-md-2 text-white">
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">India</a></li>
                        <li><a href="#" class="text-muted">Indonesia</a></li>
                        <li><a href="#" class="text-muted">Ireland</a></li>
                        <li><a href="#" class="text-muted">Italy</a></li>
                        <li><a href="#" class="text-muted">Lebanon</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-2 col-md-2 text-white">
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Malaysia</a></li>
                        <li><a href="#" class="text-muted">New Zealand</a></li>
                        <li><a href="#" class="text-muted">Philippines</a></li>
                        <li><a href="#" class="text-muted">Poland</a></li>
                        <li><a href="#" class="text-muted">Portugal</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-2 col-md-2 text-white">
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Australia</a></li>
                        <li><a href="#" class="text-muted">Brasil</a></li>
                        <li><a href="#" class="text-muted">Canada</a></li>
                        <li><a href="#" class="text-muted">Chile</a></li>
                        <li><a href="#" class="text-muted">Czech Republic</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-2 col-md-2 text-white">
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Turkey</a></li>
                        <li><a href="#" class="text-muted">UAE</a></li>
                        <li><a href="#" class="text-muted">United Kingdom</a></li>
                        <li><a href="#" class="text-muted">United States</a></li>
                        <li><a href="#" class="text-muted">Sri Lanka</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-2 col-md-2 text-white">
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Qatar</a></li>
                        <li><a href="#" class="text-muted">Singapore</a></li>
                        <li><a href="#" class="text-muted">Slovakia</a></li>
                        <li><a href="#" class="text-muted">South Africa</a></li>
                        <li><a href="#" class="text-muted">Green Land</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-2 col-md-2 text-white">
                    <ul class="list-unstyled hov_footer">
                        <li><a href="#" class="text-muted">Pakistan</a></li>
                        <li><a href="#" class="text-muted">Bangladesh</a></li>
                        <li><a href="#" class="text-muted">Bhutaan</a></li>
                        <li><a href="#" class="text-muted">Nepal</a></li>
                    </ul>
                </aside>
            </div>
            <!-- row.// -->
        </section>
    </div>
    <!-- //container -->
    <section class="footer-copyright border-top py-3 bg-light">
        <div class="container d-flex align-items-center">
            <p class="mb-0"> © 2020 Company All rights reserved </p>
            <p class="text-muted mb-0 ml-auto d-flex align-items-center">
                <a href="#" class="d-block"><img alt="#" src="img/appstore.png" height="40"></a>
                <a href="#" class="d-block ml-3"><img alt="#" src="img/playmarket.png" height="40"></a>
            </p>
        </div>
    </section>
</footer>
<nav id="main-nav">
    <ul class="second-nav">
        <li><a href="home.html"><i class="feather-home mr-2"></i> Homepage</a></li>
        <li><a href="my_order.html"><i class="feather-list mr-2"></i> My Orders</a></li>
        <li>
            <a href="#"><i class="feather-edit-2 mr-2"></i> Authentication</a>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Register</a></li>
                <li><a href="forgot_password.html">Forgot Password</a></li>
                <li><a href="verification.html">Verification</a></li>
                <li><a href="location.html">Location</a></li>
            </ul>
        </li>
        <li><a href="favorites.html"><i class="feather-heart mr-2"></i> Favorites</a></li>
        <li><a href="trending.html"><i class="feather-trending-up mr-2"></i> Trending</a></li>
        <li><a href="most_popular.html"><i class="feather-award mr-2"></i> Most Popular</a></li>
        <li><a href="restaurant.html"><i class="feather-paperclip mr-2"></i> Restaurant Detail</a></li>
        <li><a href="checkout.html"><i class="feather-list mr-2"></i> Checkout</a></li>
        <li><a href="successful.html"><i class="feather-check-circle mr-2"></i> Successful</a></li>
        <li><a href="map.html"><i class="feather-map-pin mr-2"></i> Live Map</a></li>
        <li>
            <a href="#"><i class="feather-user mr-2"></i> Profile</a>
            <ul>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="favorites.html">Delivery support</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="privacy.html">Privacy & Policy</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="feather-alert-triangle mr-2"></i> Error</a>
            <ul>
                <li><a href="not-found.html">Not Found</a>
                <li><a href="maintence.html"> Maintence</a>
                <li><a href="coming-soon.html">Coming Soon</a>
            </ul>
        </li>
        <li>
            <a href="#"><i class="feather-link mr-2"></i> Navigation Link Example</a>
            <ul>
                <li>
                    <a href="#">Link Example 1</a>
                    <ul>
                        <li>
                            <a href="#">Link Example 1.1</a>
                            <ul>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Link Example 1.2</a>
                            <ul>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Link Example 2</a></li>
                <li><a href="#">Link Example 3</a></li>
                <li><a href="#">Link Example 4</a></li>
                <li data-nav-custom-content>
                    <div class="custom-message">
                        You can add any custom content to your navigation items. This text is just an example.
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="bottom-nav">
        <li class="email">
            <a class="text-danger" href="home.html">
                <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
                Home
            </a>
        </li>
        <li class="github">
            <a href="faq.html">
                <p class="h5 m-0"><i class="feather-message-circle"></i></p>
                FAQ
            </a>
        </li>
        <li class="ko-fi">
            <a href="contact-us.html">
                <p class="h5 m-0"><i class="feather-phone"></i></p>
                Help
            </a>
        </li>
    </ul>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="osahan-filter">
                    <div class="filter">
                        <!-- SORT BY -->
                        <div class="p-3 bg-light border-bottom">
                            <h6 class="m-0">SORT BY</h6>
                        </div>
                        <div class="custom-control border-bottom px-0  custom-radio">
                            <input type="radio" id="customRadio1f" name="location" class="custom-control-input" checked>
                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio1f">Top Rated</label>
                        </div>
                        <div class="custom-control border-bottom px-0  custom-radio">
                            <input type="radio" id="customRadio2f" name="location" class="custom-control-input">
                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio2f">Nearest Me</label>
                        </div>
                        <div class="custom-control border-bottom px-0  custom-radio">
                            <input type="radio" id="customRadio3f" name="location" class="custom-control-input">
                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio3f">Cost High to
                                Low</label>
                        </div>
                        <div class="custom-control border-bottom px-0  custom-radio">
                            <input type="radio" id="customRadio4f" name="location" class="custom-control-input">
                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio4f">Cost Low to
                                High</label>
                        </div>
                        <div class="custom-control border-bottom px-0  custom-radio">
                            <input type="radio" id="customRadio5f" name="location" class="custom-control-input">
                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio5f">Most Popular</label>
                        </div>
                        <!-- Filter -->
                        <div class="p-3 bg-light border-bottom">
                            <h6 class="m-0">FILTER</h6>
                        </div>
                        <div class="custom-control border-bottom px-0  custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultCheck1" checked>
                            <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck1">Open Now</label>
                        </div>
                        <div class="custom-control border-bottom px-0  custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultCheck2">
                            <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck2">Credit Cards</label>
                        </div>
                        <div class="custom-control border-bottom px-0  custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultCheck3">
                            <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck3">Alcohol
                                Served</label>
                        </div>
                        <!-- Filter -->
                        <div class="p-3 bg-light border-bottom">
                            <h6 class="m-0">ADDITIONAL FILTERS</h6>
                        </div>
                        <div class="px-3 pt-3">
                            <input type="range" class="custom-range" min="0" max="100" name="minmax">
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label>Min</label>
                                    <input class="form-control" placeholder="$0" type="number">
                                </div>
                                <div class="form-group text-right col-6">
                                    <label>Max</label>
                                    <input class="form-control" placeholder="$1,0000" type="number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer p-0 border-0">
                <div class="col-6 m-0 p-0">
                    <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                </div>
                <div class="col-6 m-0 p-0">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Apply</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- slick Slider JS-->
<script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
<!-- Sidebar JS-->
<script type="text/javascript" src="{{asset('vendor/sidebar/hc-offcanvas-nav.js')}}"></script>
<!-- Custom scripts for all pages-->
<script type="text/javascript" src="{{asset('js/osahan.js')}}"></script>
</body>

</html>

