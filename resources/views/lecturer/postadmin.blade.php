@extends('lecturer.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    <link rel="stylesheet" href="{{ asset('css/postadmin.css') }}">
@endsection

@section('content')
    <div>
        <h1 style="text-align: center">Website môn học</h1>
        <div style="text-align:center">
            <label style="">Tìm kiếm khóa học: </label>
            <input class="search" type="text" placeholder="Search" style="">
            <input type="button" value="Xem" class="Xem" style="">
        </div>
    </div>
    <div class="container">
        <div class="col-lg-8">
            <div style="display: flex;justify-content: space-between">
                <div>
                    <h2>Tin tức chung</h2>
                    <h3>{{ $post->title }}</h3>
                </div>
                <div style="margin: auto 0">
                    <img src="https://courses.uet.vnu.edu.vn/theme/image.php/clean/core/1574132315/help" alt="">
                </div>
            </div>
            <div>
                <article style="" class="article-news">
                    <div class="section">
                        <header class="header">
                            <div class="left-picture">
                                <a href="" class="pic-left"><img class="ava"
                                                                 src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg"
                                                                 alt=""></a>
                            </div>
                            <div>
                                <div>{{ $post->title }}</div>
                                <address style="margin-bottom: 20px">Bởi
                                    <a href="" style="color: #0B90C4">Quản trị viên</a> -
                                    <time>{{ $post->updated_at->diffForHumans() }}</time>
                                </address>
                            </div>
                        </header>
                        <div>
                            <div style="" class="left-picture"></div>
                            <div style="margin-left: 50px">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>

                </article>
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
                            <a href="{{ route('lecturer.dashboard') }}">
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
                                    @foreach(auth()->user()->courses as $course)
                                        <a href="">
                                            <span><i class="fas fa-book-reader"></i></span>
                                            <span class="make-color">INT2202</span>
                                        </a>
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
