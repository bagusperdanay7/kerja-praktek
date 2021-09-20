<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    {{-- CSS Custom --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Icon Line Awesome -->
    <link rel="stylesheet" href="{{ asset('line-awesome/css/line-awesome.min.css') }}">

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
    <title>{{ $title }}</title>
  </head>
  <body>

    @include('template.sidebar')

    <div class="main-content">

      <!-- Contain -->
      <div class="header d-flex justify-content-between">
        <span class="icon-bar" role="button">
          <i class="fas fa-bars" id="bar-icon"></i>
        </span>
        <div class="">
            <img src="{{ asset('img/user.png') }}" role="button" alt="user profile" class="user-pic rounded-circle dropdown-toggle" id="user-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 48px">
          </a>

          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="user-menu">
            <a class="dropdown-item" href="#">User Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('login') }}">Logout</a>
          </div>
        </div>
      </div>

      @yield('contain')
    </div>

    <!-- Font Awesome-->
    <script src="{{ asset('js/fontawesome.js') }}"></script>

    <!-- Bootstrap 4 JS -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Custom -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
  </body>
</html>
