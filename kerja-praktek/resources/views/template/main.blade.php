<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <!-- Icon Line Awesome -->
    <link rel="stylesheet" href="{{ asset('line-awesome/css/line-awesome.min.css') }}">

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">

    {{-- CSS Custom --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Sweet Alert -->
    <script src="{{ asset('sweet-alert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('sweet-alert/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('sweet-alert/sweetalert2.min.css') }}">

    <title>{{ $title }}</title>
  </head>
  <body>

    @include('template.navbar')

    <div class="main-content">

      <!-- Contain -->

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
