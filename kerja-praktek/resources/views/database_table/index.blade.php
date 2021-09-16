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


        <div class="row">
            <div class="ml-4 mt-4 col-md-6 col-lg-6">
                <div class="button-export">
                    <a href="" class="btn btn-success mb-3">Export Excel</a>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">WITEL</th>
                          <th scope="col">OLO / ISP</th>
                          <th scope="col">SITE KRITERIA</th>
                          <th scope="col">ORDER TYPE</th>
                          <th scope="col">PRODUK</th>
                          <th scope="col">SATUAN</th>
                          <th scope="col">STATUS NCX</th>
                          <th scope="col">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($datas as $item)
                         <tr>
                             <td>1</td>
                             <td>{{ $item->witel }}</td>
                             <td>{{ $item->olo_isp }}</td>
                             <td>{{ $item->site_kriteria }}</td>
                             <td>{{ $item->order_type }}</td>
                             <td>{{ $item->produk }}</td>
                             <td>{{ $item->satuan }}</td>
                             <td>{{ $item->status_ncx }}</td>
                             <td>
                                 <a href="/database/edit/{{ $item->id }}" class="btn btn-success">Edit</a> |
                                 <form action="{{ route('database.destroy',$item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin data akan dihapus ?')">Delete</button>
                                </form>
                             </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>

            <div class="ml-4 mt-4 col-md-5 col-lg-5">
                <form action="{{ route('database.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="witel">WITEL</label>
                        <input type="text" name="witel" id="witel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="olo">OLO / ISP</label>
                        <input type="text" name="olo_isp" id="olo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="SITE KRITERIA">SITE KRITERIA</label>
                        <input type="text" name="site_kriteria" id="SITE KRITERIA" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="order_type">ORDER TYPE</label>
                        <input type="text" name="order_type" id="order_type" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="produk">PRODUK</label>
                        <input type="text" name="produk" id="produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="satuan">SATUAN</label>
                        <input type="text" name="satuan" id="satuan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status_ncx">STATUS NCX</label>
                        <input type="text" name="status_ncx" id="status_ncx" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
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


