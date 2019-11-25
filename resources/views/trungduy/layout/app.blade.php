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
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    @yield('css')
</head>
<body>
<header>
    <nav style="padding-top:3px">
        <div class="header">
{{--                logo --}}
            <a href="" title="Trang chu" style="margin-left: 5px">
                <img style="width: 50px;height: 50px" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt="">
            </a>
            {{--            menu-nav --}}
            <div class="menu-right">
                <div class="dropdown-bot dropdown">
                    <ul  data-toggle="dropdown" class="dropdown-user">
                        <li style="margin-top: 5px; cursor: pointer" class="dropdown-white">
                            <a href="" class="user">
                                <span style="font-size: 20px;margin-top: 5px; margin-right: 5px; vertical-align: middle">Tên người dùng</span>
                                <span style="margin-right: 5px" class="">
                                    <img style="width: 40px;height: 40px" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt="">
                                </span>
                                <span class="caret"></span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-nav dropdown-menu">
                        <li class="menu-user"><a href=""><i class="fas fa-home"></i> Trang cá nhân</a></li>
                        <li class="menu-user"><a href=""><i class="fas fa-user-cog"></i> Đổi mật khẩu</a></li>
                        <li class="menu-user"><a href=""><i class="fas fa-sign-out-alt"></i>  Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
            {{--            logo message--}}
            <div class="menu-right noti">
                <a href="" class="">
                    <i class="far fa-comments fa-2x noti-message"></i>
                </a>
            </div >
{{--            logo noti--}}
            <div class="menu-right noti">
                <a href="" class="">
                    <i class="far fa-bell fa-2x noti-message"></i>
                </a>
            </div>



        </div>
    </nav>

</header>
<main style="margin:20px">
    <h1 style="text-align: center">Website Môn học</h1>
    @yield('content')
</main>

<footer>

</footer>
<script>
    // var menuUser = document.querySelectorAll('.menu-user');
    // for (let i=0;i<menuUser.length;i++)
    // {
    //     menuUser[i].addEventListener('focus',function () {
    //         menuUser[i].style.backgroundColor = 'green';
    //     })
    // }
</script>


</body>
</html>
