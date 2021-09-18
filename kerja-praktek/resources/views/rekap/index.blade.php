<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card px-4 py-4">
                <div class="card-header">
                    <div class="button-export mt-4">
                        <h1>Data Rekap</h1>
                        <a href="{{ route('rekap.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                        <a href="{{ route('rekap.export') }}" class="btn btn-success mb-3">Export Excel</a>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                            Import Excel
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="table_id">
                        <thead class="thead-dark">
                            <tr>
                              <th scope="col">NO</th>
                              <th scope="col">OLO</th>
                              <th scope="col">PLAN AKTIVASI</th>
                              <th scope="col">PLAN MODIFY</th>
                              <th scope="col">PLAN DISCONNECT</th>
                              <th scope="col">AKTIVASI</th>
                              <th scope="col">MODIFY</th>
                              <th scope="col">DISCONNECT</th>
                              <th scope="col">RESUME</th>
                              <th scope="col">SUSPEND</th>
                              <th scope="col">AKSI</th>
                            </tr>
                          </thead>
                          <tbody>


                            @foreach ($rekap as $item)
                             <tr>
                                 <td>{{ $item->no; }}</td>
                                 <td>{{ $item->olo }}</td>
                                 <td>{{ $item->plan_aktivasi }}</td>
                                 <td>{{ $item->plan_modify }}</td>
                                 <td>{{ $item->plan_disconnect }}</td>
                                 <td>{{ $item->aktivasi }}</td>
                                 <td>{{ $item->modify }}</td>
                                 <td>{{ $item->disconnect }}</td>
                                 <td>{{ $item->resume }}</td>
                                 <td>{{ $item->suspend }}</td>
                                 <td>
                                     <a href="/rekap/edit/{{ $item->id }}" class="btn btn-success">Edit</a> |
                                     <form action="{{ route('rekap.destroy',$item->id) }}" method="POST" class="d-inline">
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
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('database.import')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Pilih file</label>
                <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
              </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Import</button>
            </div>
        </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>
    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>


    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
  </body>
</html>
