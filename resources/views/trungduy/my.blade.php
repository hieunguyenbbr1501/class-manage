@extends('trungduy/layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
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

            <div>
                <div class="header"></div>
                <div>
                    <div>
                        <div class="card-deck" style="display: flex; overflow-x: scroll">
                            <div class="card text-white">
                                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">This is a Card example</p>
                                </div>
                            </div>
                            <div class="card text-white">
                                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">This is a Card example</p>
                                </div>
                            </div>
                            <div class="card text-white">
                                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">This is a Card example</p>
                                </div>
                            </div>
                            <div class="card text-white">
                                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV-XL-dvaC-cblm2rqA7am9z2-54v_mGnaLDokhZQqEJbXFduZng" alt="Card image top">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">This is a Card example</p>
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
