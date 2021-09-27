<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <h2><b>Form</b> Login</h2>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>

    <form action="{{ route('postlogin') }}" method="post" onsubmit="return submitUserForm()">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="name" class="form-control" name="name" placeholder="Name">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LdJx5AcAAAAAIeJkKtq136wITkcMmtHCu1j2pjw" data-callback="recaptchaCallback"></div>
      </div>

      <div id="hiddenRecaptchaLoginError"></div>
      @if ($errors->any('grecaptcha'))
          <span class="text-danger">{{ $errors->first('grecaptcha') }}</span>
      @endif

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h2><b>Form</b> Login</h2>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>

            <form action="{{ route('postlogin') }}" method="post" onsubmit="return submitUserForm()">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-apple form-control-feedback"></span>
                </div>
                <div class="form-group pr-2">
                    <div class="g-recaptcha" data-sitekey="6LdJx5AcAAAAAIeJkKtq136wITkcMmtHCu1j2pjw"
                        data-callback="recaptchaCallback"></div>
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox ">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button id="submitBtn" type="submit" class="btn btn-main btn-block btn-flat" disabled>Masuk
                        </button>
                    </div>
                    <!-- /.col -->
                </div>

                <div id="hiddenRecaptchaLoginError"></div>
                @if ($errors->any('grecaptcha'))
                <span class="text-danger">{{ $errors->first('grecaptcha') }}</span>
                @endif
            </form>
            <!-- jQuery -->
            <script src="{{ asset('js/jquery.js') }}"></script>

            <!-- Bootstrap 3.3.6 -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>

            <!-- iCheck -->
            <script src="../../plugins/iCheck/icheck.min.js"></script>
            <!-- google recaptcha -->
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <script>
                $(function () {
                    $('input').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
                        increaseArea: '20%' // optional
                    });
                });

            </script>
            <script>
                function recaptchaCallback() {
                    $('#submitBtn').removeAttr('disabled');
                };

            </script>
</body>

</html>
