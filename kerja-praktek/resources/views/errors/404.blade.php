<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    {{-- CSS Custom --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>404 Laman Yang Dicari Tidak Ada!</title>
  </head>
  <body>

    <div class="container">
        <div class="logo-brand mt-5">
          <img src="{{ asset('img/telkom.svg') }}" alt="telkom logo" width="200px">
        </div>
        <div class="row align-items-center">
            <div class="col d-flex justify-content-center">
                <div class="error-body text-center">
                        <h3 class="error-heading">Maaf, Halaman Tidak Ada</h3>
                        <p class="">Halaman Yang Anda Cari Tidak Ada</p>
                        <h1 class="error-404">404</h1>
                        <a href="{{ route('dashboard.index') }}" class="btn btn-main">Kembali Ke Dashboard</a>
                </div>
            </div>
    </div>

    <!-- Font Awesome-->
    <script src="{{ asset('js/fontawesome.js') }}"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>