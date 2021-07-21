@extends('front-end.layouts.masters')
@section('content')
    <div class="osahan-popular">
        <!-- Most popular -->
        <div class="container">
            <form method="get" action="{{route('restaurant.search') }}">
                <div class="search py-5">

                    <div class="input-group mb-4">
                        <input type="search" class="form-control form-control-lg input_search border-right-0"
                               id="inlineFormInputGroup" name="search">
                        <div class="input-group-prepend">
                            <div class="btn input-group-text bg-white border_search border-left-0 text-primary"
                                 id="search" type="submit">
                                <i class="feather-search"></i>
                            </div>
                        </div>
                    </div>

                    <!-- nav tabs -->
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- Content Row -->
                            <div class="container mt-4 mb-4 p-0 row">
                                <!-- restaurants nearby -->
                                @foreach($restaurants as $restaurant)
                                    <div class="col-4 pb-3">
                                        <div
                                            class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i
                                                            class="feather-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a
                                                        href="#"><i
                                                            class="feather-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span
                                                        class="badge badge-dark">Promoted</span>
                                                </div>
                                                <a href="{{ route('restau.detail', $restaurant->id) }}">
                                                    <img alt="" src="{{ asset($restaurant->getImage()) }}"
                                                         class="img-fluid item-img w-100">
                                                </a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a
                                                            href="{{ route('restau.detail', $restaurant->id) }}"
                                                            class="text-black">{{ $restaurant->name }}</a></h6>
                                                    <p class="text-gray mb-1 small">{{ $restaurant->address }}</p>
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
                                                    <span class="badge badge-success">OFFER</span> <small>65%
                                                        off</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
