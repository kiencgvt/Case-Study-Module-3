<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <link rel="icon" type="image/png" href="{{ asset('img/fav.png') }}">
    <title>Swiggiweb - Online Food Ordering Website Template</title>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick-theme.min.css') }}" />
    <!-- Feather Icon-->
    <link href="{{ asset('vendor/icons/feather.css') }}" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="{{ asset('vendor/sidebar/demo.css') }}" rel="stylesheet">
</head>

<body>
<div class="login-page vh-100">
    <video loop autoplay muted id="vid">
        <source src="{{ asset('image/bg.mp4') }}" type="video/mp4">
        <source src="{{ asset('image/bg.mp4') }}" type="video/ogg">
        Your browser does not support the video tag.
    </video>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="px-5 col-md-6 ml-auto">
            <div class="px-5 col-10 mx-auto">
                <h2 class="text-dark my-0">Đổi mật khẩu</h2>
                @if(session()->has('not-match'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('not-match') }}
                    </div>
                @endif

                @if(session()->has('wrong-password'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('wrong-password') }}
                    </div>
                @endif
                <form class="mt-5 mb-4" method="post" action="{{ route('profile.changePassword') }}">
                    @csrf
                    <input type="text" value="{{ auth()->user()->email }}" hidden name="email">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-dark">Mật khẩu cũ</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-dark">Mật khẩu mới</label>
                        <input type="password" name="newPassword" placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-dark">Nhập lại mật khẩu mới</label>
                        <input type="password" name="confirmPassword" placeholder="Enter Password" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Lưu thay đổi</button>
                </form>
                <div class="new-acc d-flex align-items-center justify-content-center">
                    <a href="{{ route('auth.login') }}">
                        <p class="text-center m-0">Bạn đã có tài khoản? Đăng nhập</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- slick Slider JS-->
<script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
<!-- Sidebar JS-->
<script type="text/javascript" src="{{ asset('vendor/sidebar/hc-offcanvas-nav.js') }}"></script>
<!-- Custom scripts for all pages-->
<script type="text/javascript" src="{{ asset('js/osahan.js') }}"></script>
</body>

</html>
