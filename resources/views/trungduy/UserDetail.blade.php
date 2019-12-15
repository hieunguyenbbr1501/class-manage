@extends('trungduy/layout.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/head.css') }}">
<link rel="stylesheet" href="{{ asset('css/userdetail.css') }}">
<style>

</style>
@endsection

@section('content')


<div class="container">
    <div>
        <h2>Thông tin người dùng</h2>
    </div>
</div>
<div class="container" style="border: 1px solid">
    <div class="col-lg-4" style="border-right: 1px solid #ddd">
        <div class="col-lg-9">
            <div class="">
                <div class="img-ava">
                    <img alt="" class="img-thumbnail" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg">
                </div>
                <div class="button-change-avatar">
                    <button type="button" class="btn btn-info">Change Avatar</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <div class="col-lg-8">
        <div style="display: flex;justify-content: space-between;">
            <div >
                <h3>Chi tiết người dùng</h3>
            </div>
            <div style="margin: auto 0">
                <a href="">Sửa hồ sơ cá nhân</a>
            </div>
        </div>
    </div>
</div>

@endsection