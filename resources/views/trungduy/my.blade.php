@extends('trungduy/layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >--}}
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

    <div style="display: flex;margin-right: 10px;margin-left: 10px">
        <div class="news" style="width: 70%">

            <div class="block-courses-recently" >
                <div class="header-courses">
                    <div>
                        <h3 style="margin: 0;padding: 0">RECENTLY ACCESSED COURSES</h3>
                    </div>
                    <div style="margin: auto 0" class="allsub">
                        <i class="fas fa-angle-double-down"></i>
                    </div>
                </div>
                <div>
                    <div class="display-sub">
                        <div class="card-deck dashboard-card-deck row" style="display: flex; overflow-x: scroll">

                            <div class="col-sm-4 card" >
                                <div class="card text-white">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                    <div class="card-img-overlay">
                                        <div>
                                            <a href="" class="subs">Xác xuất thống kê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 card" >
                                <div class="card text-white">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                    <div class="card-img-overlay">
                                        <div>
                                            <a href="" class="subs">Xác xuất thống kê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 card" >
                                <div class="card text-white">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                    <div class="card-img-overlay">
                                        <div>
                                            <a href="" class="subs">Xác xuất thống kê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 card" >
                                <div class="card text-white">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                    <div class="card-img-overlay">
                                        <div>
                                            <a href="" class="subs">Xác xuất thống kê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="block-courses-recently">
                <div class="header-courses">
                    <div>
                        <h3 style="margin: 0;padding: 0">Tổng quan toàn bộ khóa học</h3>
                    </div>
                    <div style="margin: auto 0" class="allsub">
                        <i class="fas fa-angle-double-down"></i>
                    </div>
                </div>
                <div >
                    <div class="display-sub">
                        <div class="row">

                            <!-- single blog -->
                            <div class="col-md-6">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="blog-post.html">
                                            <img src="https://www.upsieutoc.com/images/2019/12/08/blog01.jpg" alt="">
                                        </a>
                                    </div>
                                    <h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
                                    <div class="blog-meta">
                                        <span class="blog-meta-author">By: <a href="#">John Doe</a></span>
                                        <div class="pull-right">
                                            <span>18 Oct, 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /single blog -->

                            <!-- single blog -->
                            <div class="col-md-6">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="blog-post.html">
                                            <img src="https://www.upsieutoc.com/images/2019/12/08/blog01.jpg" alt="">
                                        </a>
                                    </div>
                                    <h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
                                    <div class="blog-meta">
                                        <span class="blog-meta-author">By: <a href="#">John Doe</a></span>
                                        <div class="pull-right">
                                            <span>18 Oct, 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /single blog -->

                            <!-- single blog -->
                            <div class="col-md-6">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="blog-post.html">
                                            <img src="https://www.upsieutoc.com/images/2019/12/08/blog01.jpg" alt="">
                                        </a>
                                    </div>
                                    <h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
                                    <div class="blog-meta">
                                        <span class="blog-meta-author">By: <a href="#">John Doe</a></span>
                                        <div class="pull-right">
                                            <span>18 Oct, 2017</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /single blog -->

                            <!-- single blog -->
                            <div class="col-md-6">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="blog-post.html">
                                            <img src="https://www.upsieutoc.com/images/2019/12/08/blog01.jpg" alt="">
                                        </a>
                                    </div>
                                    <h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
                                    <div class="blog-meta">
                                        <span class="blog-meta-author">By: <a href="#">John Doe</a></span>
                                        <div class="pull-right">
                                            <span>18 Oct, 2017</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /single blog -->

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-pagination">
                                    <a href="#" class="pagination-back pull-left">Back</a>
                                    <ul class="pages">
                                        <li class="active">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                    </ul>
                                    <a href="#" class="pagination-next pull-right">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div style="width: 30%" >
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
                            <span class="allsub" style="border: none">
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
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        var listsub = document.querySelectorAll(".allsub");
        var list = document.querySelectorAll(".display-sub");
        for(let i=0;i<listsub.length;i++)
        {
            listsub[i].addEventListener("click", () => {
                list[i].classList.toggle("shows");
            });
        }

    </script>
@endsection





{{--nhap--}}
