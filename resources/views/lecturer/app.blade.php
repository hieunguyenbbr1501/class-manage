<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://kit.fontawesome.com/15d7aca2a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    @yield('css')
</head>
<body>
<header>
    <nav class="navbar-inner">
        <div class="head" style="display: flex;justify-content: space-between;">
            <div>
                <a href="{{ route('lecturer.dashboard') }}" title="Trang chu" class="nav-home">
                    <img style="width: 40px;height: 40px" src="{{ auth()->user()->avatar ? asset(auth()->user()->avatar) : asset('default/default.png') }}" alt="">
                </a>
                <a href="{{ route('lecturer.dashboard') }}" class="nav-home">Trang chủ</a>
            </div>
            <div style="margin: auto 0;display: flex">
                <div>
                    <a href="" class="bell-mess"><i class="fas fa-bullhorn fa-2x"></i></a>
                </div>
                <div>
                    <a href="" class="bell-mess"><i class="fas fa-comments fa-2x"></i></a>
                </div>
                <div style="" class="dropdown">
                    <a href="" class="dropbtn">
                        <span>
                            <span>{{ auth()->user()->name }}</span>
                            <span> <img style="width: 40px;height: 40px" src="{{ auth()->user()->avatar ? asset(auth()->user()->avatar) : asset('default/default.png') }}" alt=""></span>
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="dropdown-content"style="width: 100%">
                        <a href="{{ route('lecturer.detail') }}"><i class="fas fa-user-graduate"></i>Trang cá nhân</a>
                        <a href="{{ route('lecturer.password') }}"><i class="fas fa-user-lock"></i>Đổi mật khẩu</a>
                        <a href="#"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="page-footer">
    <div style="margin-top: 1em">
        <div>Trường Đại học 5</div>
        <div>Bạn đã đăng nhập với tên (<a href="">{{ auth()->user()->name }}</a>)</div>
        <div><a href="{{ route('lecturer.dashboard') }}">Trang chủ</a></div>
    </div>
</footer>
</body>
</html>
