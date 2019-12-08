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
                <a href="" title="Trang chu" class="nav-home">
                    <img style="width: 40px;height: 40px" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt="">
                </a>
                <a href="" class="nav-home">Trang chủ</a>
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
                            <span>Nguyễn Trung Duy</span>
                            <span> <img style="width: 40px;height: 40px" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt=""></span>
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="dropdown-content"style="width: 100%">
                        <a href="#"><i class="fas fa-user-graduate"></i>Trang cá nhân</a>
                        <a href="#"><i class="fas fa-user-lock"></i>Đổi mật khẩu</a>
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
        <div>Trường Đại học Công Nghệ - ĐHQGHN</div>
        <div>Bạn đã đăng nhập với tên (<a href="">Nguyễn Trung Duy</a>)</div>
        <div><a href="">Trang chủ</a></div>
    </div>
</footer>
</body>
</html>