@extends('front-end.layouts.masters')
@section('content')
    <div class="osahan-popular">
        <!-- Most popular -->
        <div class="container">
            <div class="search py-5">
                <div class="input-group mb-4">
                    <input type="text" class="form-control form-control-lg input_search border-right-0"
                           id="inlineFormInputGroup" value="Osahan eats...">
                    <div class="input-group-prepend">
                        <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i
                                class="feather-search"></i></div>
                    </div>
                </div>
                <!-- nav tabs -->
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <a class="nav-link active border-0 bg-light text-dark rounded" id="home-tab" data-toggle="tab"--}}
{{--                           href="#home" role="tab" aria-controls="home" aria-selected="true"><i--}}
{{--                                class="feather-home mr-2"></i>Restaurants (8)</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <a class="nav-link border-0 bg-light text-dark rounded ml-3" id="profile-tab" data-toggle="tab"--}}
{{--                           href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i--}}
{{--                                class="feather-disc mr-2"></i>Dishes (23)</a>--}}
{{--                    </li>--}}
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- Content Row -->
                        <div class="container mt-4 mb-4 p-0">
                            <!-- restaurants nearby -->
                            <div class="col-md-3 pb-3">
                                <div
                                    class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                    <div class="list-card-image">
                                        <div class="star position-absolute"><span class="badge badge-success"><i
                                                    class="feather-star"></i> 3.1 (300+)</span></div>
                                        <div class="favourite-heart text-danger position-absolute"><a href="#"><i
                                                    class="feather-heart"></i></a></div>
                                        <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span>
                                        </div>
                                        <a href="restaurant.html">
                                            <img alt="#" src="img/popular4.png" class="img-fluid item-img w-100">
                                        </a>
                                    </div>
                                    <div class="p-3 position-relative">
                                        <div class="list-card-body">
                                            <h6 class="mb-1"><a href="restaurant.html" class="text-black">Bite Me Now
                                                    Sandwiches</a></h6>
                                            <p class="text-gray mb-1 small">American • Pure veg</p>
                                            <p class="text-gray mb-1 rating">
                                            <ul class="rating-stars list-unstyled">
                                                <li>
                                                    <i class="feather-star star_active"></i>
                                                    <i class="feather-star star_active"></i>
                                                    <i class="feather-star star_active"></i>
                                                    <i class="feather-star star_active"></i>
                                                    <i class="feather-star"></i>
                                                </li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="list-card-badge">
                                            <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
@endsection
