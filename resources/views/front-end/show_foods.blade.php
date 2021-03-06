@extends('front-end.layouts.masters')
@section('content')
    <div class="container">
        <div class="p-1 bg-primary bg-primary mt-n1 rounded position-relative">
            <div class="d-flex align-items-center">
                <div class="feather_icon">
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                            class="p-2 bg-light rounded-circle font-weight-bold  feather-upload"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark mx-2"><i
                            class="p-2 bg-light rounded-circle font-weight-bold  feather-star"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                            class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                </div>
                <a href="contact-us.html" class="btn btn-sm btn-outline-light ml-auto">Contact</a>
            </div>
        </div>
    </div>
    <!-- Menu -->
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-8 pt-3">
                <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                    <div class="row m-0">
                        <div class="col-md-12 px-0 border-top">
                            <div>

                                <div class="media">
                                    <div class="col-md-6">
                                        <img width="100%" alt="#" src="{{ asset('storage/'.$food->image) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mb-1">{{$food->name}}</h4>
                                        <p class="text-muted mb-0">Lượt
                                            xem: {{$food->view_count}} </p>
                                        <p class="text-muted mb-0">Giá: {{number_format($food->price)}} đ</p>
                                        <p class="text-muted mb-0">Giá khuyến
                                            mãi: {{number_format($food->promotion_price)}} đ</p>
                                        <p class="text-muted mb-0">Phí dịch
                                            vụ: {{number_format($food->service_charge)}} đ</p>
                                        <p class="text-muted mb-0">Cửa
                                            hàng: {{$shop->name}} </p>
                                        <a href="#">Top Star: </a>
                                        <div class="d-inline-block" style="font-size: 14px;"><i
                                                class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star text-warning"></i>
                                            <i class="feather-star"></i>
                                        </div>
                                        <p class="text-muted mb-0">Thể
                                            loại: {{$category->name}} </p>
                                        <p class="text-muted mb-0">Thời gian chuẩn bị: {{$food->preparation_time}}
                                            phút</p>
                                        <p class="text-muted mb-0"><a href="{{route('showFoodTag',$food->id)}}">Thẻ: {{$food->tag}}</a> </p>
                                        <span><a data-id="{{$food->id}}"
                                                 class="btn btn-success addToCart">Add To Cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mb-3">
                    <div id="ratings-and-reviews"
                         class="bg-white shadow-sm d-flex align-items-center rounded p-3 mb-3 clearfix restaurant-detailed-star-rating">
                        <h6 class="mb-0">Rate this Place</h6>
                        <div class="star-rating ml-auto">
                            <div class="d-inline-block h6 m-0"><i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star"></i>
                            </div>
                            <b class="text-black ml-2">334</b>
                        </div>
                    </div>
                    <div class="bg-white rounded p-3 mb-3 clearfix graph-star-rating rounded shadow-sm">
                        <h6 class="mb-0 mb-1">Ratings and Reviews</h6>
                        <p class="text-muted mb-4 mt-1 small">Rated 3.5 out of 5</p>
                        <div class="graph-star-rating-body">
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">5 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="56"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">56 %</div>
                            </div>
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">4 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="23"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">23 %</div>
                            </div>
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">3 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="11"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 11%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">11 %</div>
                            </div>
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">2 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="6"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 6%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">6 %</div>
                            </div>
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">1 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="4"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 4%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">4 %</div>
                            </div>
                        </div>
                        <div class="graph-star-rating-footer text-center mt-3">
                            <button type="button" class="btn btn-primary btn-block btn-sm">Rate and Review</button>
                        </div>
                    </div>
                    <div class="bg-white p-3 mb-3 restaurant-detailed-ratings-and-reviews shadow-sm rounded">
                        <a class="text-primary float-right" href="#">Top Rated</a>
                        <h6 class="mb-1">All Ratings and Reviews</h6>
                        <div class="reviews-members py-3">
                            <div class="media">
                                <a href="#"><img alt="#" src="{{ asset('image/Donald_Trump_official_portrait.jpg') }}"
                                                 class="mr-3 rounded-pill"
                                                 style="max-width: 50px; max-height: 50px"></a>
                                <div class="media-body">
                                    <div class="reviews-members-header">
                                        <div class="star-rating float-right">
                                            <div class="d-inline-block" style="font-size: 14px;"><i
                                                    class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star"></i>
                                            </div>
                                        </div>
                                        <h6 class="mb-0"><a class="text-dark" href="#">Đỗ Trung Nam</a></h6>
                                        <p class="text-muted small">Tue, 20 Mar 2020</p>
                                    </div>
                                    <div class="reviews-members-body">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classNameical Latin literature from 45 BC, making it
                                            over 2000 years old.</p>
                                    </div>
                                    <div class="reviews-members-footer"><a
                                            class="total-like btn btn-sm btn-outline-primary" href="#"><i
                                                class="feather-thumbs-up"></i> 856M</a> <a
                                            class="total-like btn btn-sm btn-outline-primary" href="#"><i
                                                class="feather-thumbs-down"></i> 158K</a>
                                        <span class="total-like-user-main ml-2" dir="rtl">
                                 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="reviews-members py-3">
                            <div class="media">
                                <a href="#"><img alt="#" src="{{ asset('image/huan-rose.jpg') }}"
                                                 class="mr-3 rounded-pill"
                                                 style="max-width: 50px; max-height: 50px"></a>
                                <div class="media-body">
                                    <div class="reviews-members-header">
                                        <div class="star-rating float-right">
                                            <div class="d-inline-block" style="font-size: 14px;"><i
                                                    class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star"></i>
                                            </div>
                                        </div>
                                        <h6 class="mb-0"><a class="text-dark" href="#">Huấn Rose</a></h6>
                                        <p class="text-muted small">Tue, 20 Mar 2020</p>
                                    </div>
                                    <div class="reviews-members-body">
                                        <p>Em có sai với ai đi nữa, có làm cái gì đi nữa. Nếu có phải trả giá thì em
                                            cũng xin chấp nhận.
                                            Bởi vì anh biết đấy. Ra xã hội làm ăn bươn chải, liều thì ăn nhiều, không
                                            liều thì ăn ít.
                                            Muốn thành công thì phải chấp nhận trải qua đắng cay ngọt bùi. Làm ăn muốn
                                            kiếm được tiền
                                            thì phải chấp nhận mạo hiểm, nguy hiểm một tí nhưng trong tầm kiểm soát.
                                            Xã hội này, chỉ có làm, chịu khó cần cù thì bù siêng năng..</p>
                                    </div>
                                    <div class="reviews-members-footer">
                                        <a class="total-like btn btn-sm btn-outline-primary" href="#">
                                            <i class="feather-thumbs-up"></i> 88K</a>
                                        <a class="total-like btn btn-sm btn-outline-primary" href="#">
                                            <i class="feather-thumbs-down"></i> 1K</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a class="text-center w-100 d-block mt-3 font-weight-bold" href="#">See All Reviews</a>
                    </div>
                    <div class="bg-white p-3 rating-review-select-page rounded shadow-sm">
                        <h6 class="mb-3">Leave Comment</h6>
                        <div class="d-flex align-items-center mb-3">
                            <p class="m-0 small">Rate the Place</p>
                            <div class="star-rating ml-auto">
                                <div class="d-inline-block"><i class="feather-star text-warning"></i>
                                    <i class="feather-star text-warning"></i>
                                    <i class="feather-star text-warning"></i>
                                    <i class="feather-star text-warning"></i>
                                    <i class="feather-star"></i>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="form-group"><label class="form-label small">Your Comment</label><textarea
                                    class="form-control"></textarea></div>
                            <div class="form-group mb-0">
                                <button type="button" class="btn btn-primary btn-block"> Submit Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                            <img alt="" src="{{ auth()->user()->avatar}}"
                                 class="mr-3 rounded-circle img-fluid">
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 font-weight-bold">{{ auth()->user()->name }}</h6>
                            </div>
                        </div>
                    @endif
                        <div id="inner"></div>
                        <div id="cart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

