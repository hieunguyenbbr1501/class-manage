@extends('trungduy/layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
    <style>

    </style>
@endsection

@section('content')
<div class="container">
    <div>
        <h2 style="font-weight: 600">Thông tin người dùng: <span>Nguyễn Trung Duy</span></h2>
    </div>
</div>
<div class="container" style="border: 1px solid #ddd;border-radius: 4px">
    <div>
        <div class="col-lg-8">
            <div>
                <div class="user-info-general">
                    <div style="margin-bottom: 10px">
                        <h3 style="font-size: 20px;font-weight: 700"> <span><b class="caret"></b></span> Thông tin chung</h3>
                    </div>
                </div>
                <div>
                    <div class="form">
                        <label for="" class="label-info-fields">Họ và tên</label>
                        <input type="text" value="Nguyễn Trung Duy" readonly="readonly" size="30" class="input-info-general">
                    </div>
                    <div class="form">
                        <label for="" class="label-info-fields">Mã sinh viên</label>
                        <input type="text" value="17020648" readonly="readonly" size="30" class="input-info-general">
                    </div>
                    <div class="form">
                        <label for="" class="label-info-fields">Thư điện tử</label>
                        <input type="text" value="17020648@vnu.edu.vn" readonly="readonly" size="30" class="input-info-general">
                    </div>
                </div>
            </div>
            <div style="border-bottom: 1px solid #ddd">
                <div class="user-info-general">
                    <div style="margin-bottom: 10px">
                        <h3 style="font-size: 20px;font-weight: 700"> <span><b class="caret"></b></span> Thông tin cá nhân</h3>
                    </div>
                </div>
                <div>
                    <div class="form">
                        <label for="" class="label-info-fields">Ngày sinh</label>
                        <input type="date" size="30" class="input-info-detail">
                    </div>
                    <div class="form">
                        <label for="" class="label-info-fields">Giới tính</label>
{{--                        <input type="radio" name="gender" class="gradi-color"> Nam--}}
{{--                        <input type="radio" name="gender" class="gradi-color"> Nữ--}}
{{--                        <input type="radio" name="gender" class="gradi-color"> Khác--}}
                        <select name="" id="" class="input-info-detail">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Không xác định">Không xác định</option>
                        </select>
                    </div>
                    <div class="form">
                        <label for="" class="label-info-fields">Địa chỉ</label>
                        <input type="text" size="30" placeholder="Hanoi Vietnam" class="input-info-detail">
                    </div>
                    <div class="form">
                        <label for="" class="label-info-fields">Trường</label>
                        <input type="text" value="Đại học Công Nghệ - ĐHQGHN" readonly="readonly" size="30" class="input-info-general">
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin: 20px">
                <button type="button" class="btn btn-success" >Save</button>
            </div>
        </div>
        <div class="col-lg-4" style="border-left: 1px solid #ddd">
            <div>
                <div class="user-info-general">
                    <div style="margin-bottom: 10px">
                        <h3 style="font-size: 20px;font-weight: 700"> <span><b class="caret"></b></span> Avatar</h3>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="">
                        <div class="img-ava">
                            <img alt="" class="img-thumbnail" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg">
                        </div>
                        <div class="button-change-avatar">
                            <button type="button" class="btn btn-primary">Change avatar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>


</div>
@endsection