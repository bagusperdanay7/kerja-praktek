<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- login merah --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Line Awesome -->
    <link rel="stylesheet" href="{{ asset('line-awesome/css/line-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
    <!-- Favicon style -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo_favicon.png') }}">
    
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{ asset('img/logo_idola.png') }}" class="img-fluid" width="500" alt="">
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>
            <form action="/login" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username" required
                        value="{{ old('username') }}">
                    <span class="las la-user form-control-feedback login-icon"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="las la-lock form-control-feedback login-icon"></span>
                </div>
                @if (session()->has('loginError'))
                <div class="error-text" role="alert">
                    <i class="las la-exclamation-circle"></i> {{ session('loginError') }}
                </div>
                @endif
                <div class="form-group">
                    <button id="submitBtn" type="submit" class="btn btn-main form-control">Masuk
                    </button>
                </div>

            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
