@extends('trungduy/layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    <link rel="stylesheet" href="{{ asset('css/enrol.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Thiết kế giao diện người dùng</h1>
        <h2>Giảng viên: ABC</h2>
        <div>
            <div class="col-lg-8">
                <div>
                    <div class="news-study">
                        <div>
                            <div>
                                <img src="https://courses.uet.vnu.edu.vn/theme/image.php/clean/forum/1574132315/icon" alt="">
                                <span class="under-link-content-left"><a href=""> Diễn đàn tin tức</a></span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div>Quá trình học tập của bạn
                                    <span>
                                    <img src="https://courses.uet.vnu.edu.vn/theme/image.php/clean/core/1574132315/help" alt="">
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-sub">
                        <div >
                        <span>
                            <a href="" style="font-size: 16px" class="subject-enrol">
                            <i class="fas fa-book-reader"></i>
                            Phát triển ứng dụng web (<span>TS.Hoàng Xuân Tùng</span>)
                            </a>
                        </span>
                        </div>
                    </div>
                </div>

                <div style="text-align: center">
                    <button type="button" class="btn btn-primary">Enrol</button>
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
@endsection