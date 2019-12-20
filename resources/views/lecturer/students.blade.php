@extends('lecturer.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    <link rel="stylesheet" href="{{ asset('css/liststudent.css') }}">
@endsection

@section('content')

    <div class="container">
        <h1 style="font-weight: 600">Tên môn</h1>
        <h2 style="font-weight: 600">Tên giảng viên</h2>
        <div class="row">
            <div class="col-lg-8">
                <div style="display: flex;justify-content: space-between">
                    <div>
                        <p class="text-list-student">Tổng sinh viên: <span>{{ $students->count() }}</span></p>
                    </div>
                    <div>
                        <img src="https://courses.uet.vnu.edu.vn/theme/image.php/clean/forum/1574132315/icon" alt="">
                        <span class="under-link-content-left"><a href=""> Diễn đàn tin tức</a></span>
                    </div>
                </div>
                <div>
                    <div style="text-align: center">
                        <p class="text-list-student">Danh sách sinh viên</p>
                    </div>
                    <div>
                        <table style="width: 100%;text-align: center" >
                            <tr>
                                <th>STT</th>
                                <th>MSSV</th>
                                <th>Họ tên</th>
                                <th>Ngày sinh</th>
                                <th>Email</th>
                            </tr>
                            @foreach($students as $student)
                            <tr>
                                <td>1</td>
                                <td>{{ $student->code }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>{{ $student->email }}</td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
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
