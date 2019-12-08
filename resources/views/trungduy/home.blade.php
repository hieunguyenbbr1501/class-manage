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
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
<main>
    <div>
        <h1 style="text-align: center">Website môn học</h1>
        <div style="text-align:center">
            <label style="">Tìm kiếm khóa học: </label>
            <input class="search" type="text" placeholder="Search" style="">
            <input type="button" value="Xem" class="Xem"  style="">
        </div>
    </div>
    <div style="display: flex;margin-right: 10px;margin-left: 10px">
        <div class="news" style="width: 70%">
            <div class="block-courses-recently" >
                <div class="header-courses">
                    <div>
                        <h3 style="margin: 0;padding: 0">RECENTLY ACCESSED COURSES</h3>
                    </div>
                    <div style="margin: auto 0" class="allsubs">
                        <i class="fas fa-angle-double-down"></i>
                    </div>
                </div>
                <div>
                    <div class="display-scroll">
                        <div class="card-deck dashboard-card-deck row" style="display: flex; overflow-x: scroll">

                            <div class="col-sm-4 card" >
                                <div class="card text-white">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                    <div class="card-img-overlay">
                                        <div>
                                            <a href="" class="subs">Xác xuất thống kê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 card" >
                                <div class="card text-white">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                    <div class="card-img-overlay">
                                        <div>
                                            <a href="" class="subs">Xác xuất thống kê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 card" >
                                <div class="card text-white">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                    <div class="card-img-overlay">
                                        <div>
                                            <a href="" class="subs">Xác xuất thống kê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 card" >
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
            <div>
                <h2>Tin tức chung</h2>
                <article style="" class="article-news">
                    <div class="section">
                        <header class="header">
                            <div class="left-picture">
                                <a href="" class="pic-left"><img class="ava" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt=""></a>
                            </div>
                            <div>
                                <div>Triển khai giao diện tiếng Bồ Đào Nha</div>
                                <address style="margin-bottom: 20px">Bởi
                                    <a href="" style="color: #0B90C4">Quản trị viên</a> -
                                    <time> 12hAM</time>
                                </address>
                            </div>
                        </header>
                        <div>
                            <div style="" class="left-picture"></div>
                            <div style="margin-left: 50px">
                                <p style="margin-bottom: 10px">Chào các em,</p>
                                <p>
                                    Hôm nay tôi chỉ dạy đến đây thôi
                                </p>
                                <a href="" style="color: #0B90C4">Xem tiếp nội dung chủ đề này</a>
                            </div>
                        </div>
                    </div>

                </article>
                <article style="" class="article-news">
                    <div class="section">
                        <header class="header">
                            <div class="left-picture">
                                <a href="" class="pic-left"><img class="ava" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt=""></a>
                            </div>
                            <div>
                                <div>Triển khai giao diện tiếng Bồ Đào Nha</div>
                                <address style="margin-bottom: 20px">Bởi
                                    <a href="" style="color: #0B90C4">Quản trị viên</a> -
                                    <time> 12hAM</time>
                                </address>
                            </div>
                        </header>
                        <div>
                            <div style="" class="left-picture"></div>
                            <div style="margin-left: 50px">
                                <p style="margin-bottom: 10px">Chào các em,</p>
                                <p>
                                    Hôm nay tôi chỉ dạy đến đây thôi
                                </p>
                                <a href="" style="color: #0B90C4">Xem tiếp nội dung chủ đề này</a>
                            </div>
                        </div>
                    </div>

                </article>
                <article style="" class="article-news">
                    <div class="section">
                        <header class="header">
                            <div class="left-picture">
                                <a href="" class="pic-left"><img class="ava" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt=""></a>
                            </div>
                            <div>
                                <div>Triển khai giao diện tiếng Bồ Đào Nha</div>
                                <address style="margin-bottom: 20px">Bởi
                                    <a href="" style="color: #0B90C4">Quản trị viên</a> -
                                    <time> 12hAM</time>
                                </address>
                            </div>
                        </header>
                        <div>
                            <div style="" class="left-picture"></div>
                            <div style="margin-left: 50px">
                                <p style="margin-bottom: 10px">Chào các em,</p>
                                <p>
                                    Hôm nay tôi chỉ dạy đến đây thôi
                                </p>
                                <a href="" style="color: #0B90C4">Xem tiếp nội dung chủ đề này</a>
                            </div>
                        </div>
                    </div>

                </article>
            </div>

        </div>
        <div style="width: 30%" >
            <div style="background-color: #f8f8f8;" class="naviga">
                <h2>Navigation</h2>
                <a href="" class="make-color">Trang chủ</a>
                <div>
                    <ul>
                        <li>
                            <a href="" class="make-color">
                                <span><i class="far fa-newspaper"></i></span>
                                <span>Tin tức chung</span>
                            </a>
                        </li>
                        <li>
                            <span class="allsub">
                                <span ><i class="fas fa-caret-right"></i></span>
                                <span class="make-color">Các khóa học của tôi</span>
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
</main>

<footer class="page-footer">
    <div style="margin-top: 1em">
        <div>Trường Đại học Công Nghệ - ĐHQGHN</div>
        <div>Bạn chưa đăng nhập (<a href="">Đăng nhập</a>)</div>
        <div><a href="">Trang chủ</a></div>
    </div>
</footer>
<script>
    var listsub = document.querySelector(".allsub");
    var list = document.querySelector(".display-sub");
    listsub.addEventListener("click", () => {
        list.classList.toggle("show");
    });
    var listsubs = document.querySelector(".allsubs");
    var lists = document.querySelector(".display-scroll");
    listsubs.addEventListener("click", () => {
        lists.classList.toggle("shows");
    });
</script>
</body>
</html>