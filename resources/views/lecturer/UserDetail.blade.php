@extends('lecturer.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/head.css') }}">
<link rel="stylesheet" href="{{ asset('css/userdetail.css') }}">
<style>

</style>
@endsection

@section('content')


<div class="container">
    <div>
        <h2 style="font-weight: 600">Thông tin người dùng</h2>
    </div>
</div>
<div class="container" style="border: 1px solid #ddd;border-radius: 4px">
    <div class="col-lg-8">
        <div class="user-info-header">
            <div >
                <h3 style="font-size: 20px;font-weight: 700">Chi tiết người dùng</h3>
            </div>
            <div style="margin: auto 0">
                <a href="{{ route('lecturer.editprofile') }}">Sửa hồ sơ cá nhân</a>
            </div>
        </div>
        <div>
            <ul class="user-info-detail">
                <li>
                    <dl>
                        <dt>Ngày sinh</dt>
                        <dd>{{ auth()->user()->dob }}</dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>Giới tính</dt>
                        <dd>{{ auth()->user()->gender }}</dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>Địa chỉ</dt>
                        <dd>{{ auth()->user()->address }}</dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>Mã số sinh viên</dt>
                        <dd>{{ auth()->user()->code }}</dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>Thư điện tử</dt>
                        <dd>{{ auth()->user()->email }}</dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>Trường</dt>
                        <dd>Đại học Công Nghệ - ĐHQGHN</dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4" style="border-left: 1px solid #ddd">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="">
                <div class="img-ava">
                    <img alt="" style="width: 100%; height: auto" class="img-thumbnail" src="{{ auth()->user()->avatar ? asset(auth()->user()->avatar) : asset('default/default.png') }}">
                </div>
                <div class="button-change-avatar">
                    <h5 class="user-name">Nguyễn Trung Duy</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

@endsection
