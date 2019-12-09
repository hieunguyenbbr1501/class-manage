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
    <link rel="stylesheet" href="{{ asset('css/homes.css') }}">
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
            <div style="margin: auto 0;">Bạn chưa đăng nhập.(<a href="">Đăng nhập</a>)</div>
        </div>
    </nav>
</header>
<div class="main-body">
    <div>
        <h1 style="text-align: center">Website môn học</h1>
        <div style="text-align:center">
            <label style="">Tìm kiếm khóa học: </label>
            <input class="search" type="text" placeholder="Search" style="">
            <input type="button" value="Xem" class="Xem"  style="">
        </div>
    </div>
    <div class="container">
        <div class="col-lg-8">
            <div class="">
                <div class="block-courses-recently" >
                    <div class="header-courses">
                        <div>
                            <h3 style="margin: 0;padding: 0">RECENTLY ACCESSED COURSES</h3>
                        </div>
                        <div style="margin: auto 0" class="">
                            <i class="fas fa-angle-double-down"></i>
                        </div>
                    </div>
                    <div>
                        <div class="display-scroll">
                            <div class="card-deck dashboard-card-deck row" style="display: flex; overflow-x: scroll">

                                <div class="col-lg-4 card" >
                                    <div class="card text-white">
                                        <img class="card-img-top" width="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                        <div class="card-img-overlay">
                                            <div>
                                                <a href="" class="subs">Xác xuất thống kê</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 card" >
                                    <div class="card text-white">
                                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                        <div class="card-img-overlay">
                                            <div>
                                                <a href="" class="subs">Xác xuất thống kê</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 card" >
                                    <div class="card text-white">
                                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                        <div class="card-img-overlay">
                                            <div>
                                                <a href="" class="subs">Xác xuất thống kê</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 card" >
                                    <div class="card text-white">
                                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                        <div class="card-img-overlay">
                                            <div>
                                                <a href="" class="subs">Xác xuất thống kê</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="container">

            </div>
        </div>
        <div class="col-lg-4">
            <div style="" class="sidebar">
                <h2>Navigation</h2>
                <a href="" class="make-color gohome">Trang chủ</a>
                <div>
                    <ul>
                        <li>
                            <a href="">
                                <span><i class="far fa-newspaper"></i></span>
                                <span class="make-color">Tin tức chung</span>
                            </a>
                        </li>
                        <li>
                            <a href="" >
                                <span><i class="fas fa-home"></i></span>
                                <span class="make-color">Trang chủ hệ thống</span>
                            </a>
                        </li>
                        <li>
                            <span class="allsub">
                                <span class="sub-content"><i class="fas fa-caret-right"></i></span>
                                <span class="make-color sub-content">Các khóa học của tôi</span>
                            </span>
                            <ul class="display-sub">
                                <li>
                                    <a href="">
                                        <span><i class="fas fa-book-reader"></i></span>
                                        <span class="make-color">INT2202</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span><i class="fas fa-book-reader"></i></span>
                                        <span class="make-color">INT2202</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span><i class="fas fa-book-reader"></i></span>
                                        <span class="make-color">INT2202</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>