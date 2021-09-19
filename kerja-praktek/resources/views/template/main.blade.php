<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    {{-- CSS Custom --}}
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
    <title>{{ $title }}</title>
  </head>
  <body>

    @include('template.sidebar')

    <div class="main-content">
      {{-- sidebar mobile --}}
      <nav>
        <div class="sidebar-mobile disable-mobile-sidebar shadow-sm">
          <span class="close-bar">
            <i class="fas fa-times"></i>
          </span>
            <div class="logo-brand">
                <img src="https://www.telkom.co.id/images/logo_horizontal.svg" alt="telkom logo" width="200px">
            </div>
            <ul class="menu">
                <li class="menu-list {{ ($title === "Dashboard") ? 'active-menu' : '' }}">
                    <a href="/dashboard" class="{{ ($title === "Dashboard") ? 'active' : '' }}">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="menu-list">
                    <a href="" id="navbarDropdown-mobile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-table"></i> Data Master
                        <i class="float-right mt-1 fas fa-caret-down" id="arrow-mobile"></i>
                    </a>
                    <ul class="datamaster-mobile disable-menu">
                        <li class="drop-menu {{ ($title === "Pekerjaan Lapangan") ? 'active-menu' : '' }}">
                            <a href="" class="{{ ($title === "Pekerjaan Lapangan") ? 'active' : '' }}"> Pekerjaan Lapangan</a>
                        </li>
                        <li class="drop-menu {{ ($title === "Pekerjaan Lapangan") ? 'active-menu' : '' }}">
                            <a href="" class="{{ ($title === "Pekerjaan Lapangan") ? 'active' : '' }}"> WFM</a>
                        </li>
                        <li class="drop-menu {{ ($title === "Pekerjaan Lapangan") ? 'active-menu' : '' }}">
                            <a href="" class="{{ ($title === "Pekerjaan Lapangan") ? 'active' : '' }}"> OSM</a>
                        </li>
                    </ul>
                </li>
                <li class="copyright-mobile">
                  <span class="copyright">&copy; 2021 Telkom Indonesia</span>
                 </li>
            </ul>
        </div>
      </nav>

      <!-- Contain -->
      <div class="header d-flex justify-content-between">
        <span class="icon-bar" role="button">
          <i class="fas fa-bars" id="bar-icon"></i>
        </span>
        <div class="">
            <img src="img/user.png" role="button" alt="user profile" class="user-pic rounded-circle dropdown-toggle" id="user-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 48px">
          </a>

          <div class="dropdown-menu" aria-labelledby="user-menu">
            <a class="dropdown-item" href="#">User Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/">Logout</a>
          </div>
        </div>
      </div>

      @yield('contain')
    </div>

    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/22172a4fcb.js" crossorigin="anonymous"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- JS Custom -->
    <script src="js/main.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
