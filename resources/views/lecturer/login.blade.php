<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/15d7aca2a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ccccc;
            height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
        .btn-md
        {
            width: 50%;
        }
        .form-control
        {
            border-radius: 1rem;
        }
    </style>
    {{--    @yield('css')--}}
</head>
<body>
<body>
<div id="login">
    {{--    <h3 class="text-center text-white pt-5">Login form</h3>--}}
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" method="POST" action="{{ route('lecturer.login.post') }}">
                        {{ csrf_field() }}
                        <h2 class="text-center text-info">Website môn học</h2>
                        <div class="form-group">
                            <label for="username" class="text-info">Email</label><br>
                            <input type="email" name="email" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <br>
                            <button type="submit" name="submit" style="position: relative;left: 25%" class="btn btn-info btn-md form-control text-center">Login</button>
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="#" class="text-info">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</body>
</html>
