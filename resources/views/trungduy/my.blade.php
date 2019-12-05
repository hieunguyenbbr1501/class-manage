@extends('trungduy/layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
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
        <div class="news" style="width: 70%">
            <h3>Kết quả tìm kiếm: <span>1</span></h3>

        </div>
        <div style="width: 30%" >
            <div style="background-color: #f8f8f8;" class="naviga">
                <h2>Navigation</h2>
                <a href="" class="make-color">Trang chủ</a>
                <div>
                    <ul style="list-style: none">
                        <li>
                            <a href="" >
                                <span><i class="far fa-newspaper"></i></span>
                                <span class="make-color">Tin tức chung</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
