@extends('trungduy/layout.app')

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
        <input type="button" value="Xem" class="Xem"  style="">
    </div>
</div>
<div class="container">
    <div class="col-lg-8">
        <div style="display: flex;justify-content: space-between">
            <div>
                <h2>Tin tức chung</h2>
                <h3>Bật tính năng cho phép sinh viên quẩy edm</h3>
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
                            <a href="" class="pic-left"><img class="ava" src="https://www.upsieutoc.com/images/2019/11/23/Nancy-Momoland-MrCong.com-031.jpg" alt=""></a>
                        </div>
                        <div>
                            <div>Triển khai giao diện tiếng Bồ Đào Nha</div>
                            <address style="margin-bottom: 20px">Bởi
                                <a href="" style="color: #0B90C4">Quản trị viên</a> -
                                <time> 12hAM</time>
                            </address>
                        </div>
                    </header>
                    <div>
                        <div style="" class="left-picture"></div>
                        <div style="margin-left: 50px">
                            <p style="margin-bottom: 10px">Chào các em,</p>
                            <p>
                                Thông qua phản hồi của một số sinh viên nhất là các bạn sinh viên năm cuối (những người đã đăng ký nhiều môn học trên website) thì các bạn đó muốn rút tên khỏi các khoá học năm trước đó. Chính vì vậy, hiện tại hệ thống đã hỗ trợ các em tính năng này. Để rút tên khỏi khoá học đã kết thúc, các em vào môn học đó. Chuyển xuống hệ thống menu ở bên phải. Sẽ có liên kết để các em rút tên khỏi khoá học hiện tại.
                            </p>
                            <p>Trân trọng thông báo</p>
                            <p>Quản trị viên</p>
                        </div>
                    </div>
                </div>

            </article>
        </div>
    </div>
</div>

@endsection