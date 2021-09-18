<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>Form Tambah Data</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rekap.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="no">NO</label>
                                <input type="text" name="no" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">OLO</label>
                                <input type="text" name="olo" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN AKTIVASI</label>
                                <input type="text" name="plan_aktivasi" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN MODIFY</label>
                                <input type="text" name="plan_modify" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN DISCONNECT</label>
                                <input type="text" name="plan_disconnect" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">AKTIVASI</label>
                                <input type="text" name="aktivasi" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">MODIFY</label>
                                <input type="text" name="modify" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">DISCONNECT</label>
                                <input type="text" name="disconnect" id="no" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="no">resume</label>
                                <input type="text" name="resume" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">SUSPEND</label>
                                <input type="text" name="suspend" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
