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
            border:1px solid #CCCCCC;
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
    <div style="" class="container">
        <div class="searchSub col-lg-8" style="">
            <h2>Kết quả tìm kiếm: <span>{{ $courses->count() }}</span></h2>
            @foreach($courses as $course)
            <div class="search-content">
                <div class="search-result search-odd">
                    <div class="content-sub">
                        <div >
                            <span>
                                <a href="{{ route('student.course.detail',['id' => $course->id]) }}" style="font-size: 23px" class="">
                                <i class="fas fa-book-reader"></i>
                                {{ $course->subject->name }} - {{ $course->code }}
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
                        </div>
                        <div style="margin: auto 0">
                            <span>Mục: <a href="">Công Nghệ Thông Tin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div style="" class="navigati col-lg-4">
            <div style="background-color: #f8f8f8;" class="naviga">
                <h2>Navigation</h2>
                <div>
                    <a href="" class="make-color">Nhà của tôi</a>
                    <ul style="list-style: none">
                        <li>
                            <a href="" >
                                <span><i class="fas fa-home"></i></span>
                                <span class="make-color">Trang chủ hệ thống</span>
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
    <script>

        var listsub = document.querySelector(".allsub");
        var list = document.querySelector(".display-sub");
        listsub.addEventListener("click", () => {
            list.classList.toggle("show");
        });


    </script>
@endsection
