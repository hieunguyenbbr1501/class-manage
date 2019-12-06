@extends('trungduy/layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    <link rel="stylesheet" href="{{ asset('css/searchsub.css') }}">
    <style>
        .search
        {
            height: 30px;
            width: auto;
            border-radius: 4px;
            border:1px solid #CCCCCC
        }
        .Xem
        {
            height: 30px;
            width:50px;
            background-color: #f5f5f5;
            border: 1px solid #cccccc;
        }
    </style>
@endsection
@section('content')
    <div>
        <h1 style="text-align: center">Website môn học</h1>
        <div style="text-align:center">
            <label style="">Tìm kiếm khóa học: </label>
            <input class="search" type="text" placeholder="Search" style="">
            <input type="button" value="Xem" class="Xem"  style="">
        </div>
    </div>
    <div style="display: flex;margin-right: 10px;margin-left: 10px">
        <div class="searchSub" style="width: 70%">
            <h2>Kết quả tìm kiếm: <span>1</span></h2>
            <div class="search-content">
                <div class="search-result search-odd">
                    <div class="content-sub">
                        <div >
                            <span>
                                <a href="" style="font-size: 23px" class="">
                                <i class="fas fa-book-reader"></i>
                                Phát triển ứng dụng web
                                </a>
                            </span>
                        </div>
                        <div>
                            <i class="fas fa-reply-all"></i>
                        </div>

                    </div>
                    <div class="content-sub">
                        <div>
                            <div><span>Giáo viên: <a href="">Đào Minh Thư</a> </span></div>
                            <div><span>Giáo viên: <a href="">Đào Minh Thư</a> </span></div>
                        </div>
                        <div style="margin: auto 0">
                            <span>Mục: <a href="">Công Nghệ Thông Tin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-content">
                <div class="search-result ">
                    <div class="content-sub">
                        <div >
                            <span>
                                <a href="" style="font-size: 23px" class="">
                                <i class="fas fa-book-reader"></i>
                                Phát triển ứng dụng web
                                </a>
                            </span>
                        </div>
                        <div>
                            <i class="fas fa-reply-all"></i>
                        </div>

                    </div>
                    <div class="content-sub">
                        <div>
                            <div><span>Giáo viên: <a href="">Đào Minh Thư</a> </span></div>
{{--                            <div><span>Giáo viên: <a href="">Đào Minh Thư</a> </span></div>--}}
                        </div>
                        <div style="margin: auto 0">
                            <span>Mục: <a href="">Công Nghệ Thông Tin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-content">
                <div class="search-result search-odd">
                    <div class="content-sub">
                        <div >
                            <span>
                                <a href="" style="font-size: 23px" class="">
                                <i class="fas fa-book-reader"></i>
                                Phát triển ứng dụng web
                                </a>
                            </span>
                        </div>
                        <div>
                            <i class="fas fa-reply-all"></i>
                        </div>

                    </div>
                    <div>
                        <img style="width: 100px" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt="">
                    </div>
                    <div class="content-sub">
                        <div>
                            <div><span>Giáo viên: <a href="">Đào Minh Thư</a> </span></div>
                            {{--                            <div><span>Giáo viên: <a href="">Đào Minh Thư</a> </span></div>--}}
                        </div>
                        <div style="margin: auto 0">
                            <span>Mục: <a href="">Công Nghệ Thông Tin</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 30%" class="navigati">
            <div style="background-color: #f8f8f8;" class="naviga">
                <h2>Navigation</h2>
                <a href="" class="make-color">Nhà của tôi</a>
                <div>
                    <ul style="list-style: none">
                        <li>
                            <a href="" >
                                <span><i class="fas fa-home"></i></span>
                                <span class="make-color">Trang chủ hệ thống</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="allsub" >
                                <span><i class="fas fa-caret-down"></i></span>
                                <span class="make-color">Các khóa học của tôi</span>
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
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <script>
        var listSub = document.getElementsByClassName("display-sub");
        var allsub = document.getElementsByClassName("allsub");
        allsub.addEventListener("click", () => {
            listSub.parentElement.style.display= "block";
        })
    </script>
@endsection
