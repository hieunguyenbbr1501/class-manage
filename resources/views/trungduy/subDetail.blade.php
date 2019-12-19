@extends('trungduy/layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    <link rel="stylesheet" href="{{ asset('css/subdetail.css') }}">
    <style>

    </style>
@endsection
@section('content')
    <div class="container">
        <h1>Thiết kế giao diện người dùng</h1>
        <h2>Giảng viên: ABC</h2>
        <div class="row page-content">
            <div class="col-lg-8">
                <div class="sub-week">
                    <div>
                        <div class="news-study">
                            <div>
                                <div>
                                    <img
                                        src="https://courses.uet.vnu.edu.vn/theme/image.php/clean/forum/1574132315/icon"
                                        alt="">
                                    <span class="under-link-content-left"><a href=""> Diễn đàn tin tức</a></span>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div>Quá trình học tập của bạn
                                        <span>
                                    <img src="https://courses.uet.vnu.edu.vn/theme/image.php/clean/core/1574132315/help"
                                         alt="">
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--                tuan 1--}}
                    @foreach($lectures as $lecture)
                        <div class="sub-week">
                            <div>
                                <h3 class="timesub under-link-content-left"><a href="">Tuần {{ $lecture->week }}</a>
                                </h3>
                            </div>
                            <div>
                                <div class="news-study">
                                    <div>
                                        @if($lecture->path)
                                            <img
                                                src="https://courses.uet.vnu.edu.vn/theme/image.php/clean/core/1574132315/f/spreadsheet-24"
                                                alt="">
                                            <span class="under-link-content-left">
                                                <a href="{{ asset($lecture->path) }}">Giáo trình môn học</a>
                                </span>
                                        @endif

                                    </div>
                                    <div>
                                        <button style="height: 16px;width: 16px">
                                            {{--                                    <img src="https://courses.uet.vnu.edu.vn/theme/image.php/clean/core/1574132315/i/completion-manual-n" alt="">--}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4">

                    <div style="" class="sidebar">
                        <h2>Navigation</h2>
                        <a href="{{ route('student.dashboard') }}" class="make-color gohome">Trang chủ</a>
                        <div>
                            <ul>
                                <li>
                                    <a href="">
                                        <span><i class="far fa-newspaper"></i></span>
                                        <span class="make-color">Tin tức chung</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
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
                                        @foreach(auth()->user()->courses as $course)
                                        <li>
                                            <a href="{{ route('student.course.detail',['id' => $course->id]) }}">
                                                <span><i class="fas fa-book-reader"></i></span>
                                                <span class="make-color">{{ $course->code }}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
@endsection
