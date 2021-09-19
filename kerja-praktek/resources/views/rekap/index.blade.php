@extends('template.main')

@section('contain')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card mt-3 mx-3">
                <div class="card-header">
                    <div class="button-export mt-4">
                        <h1>Data Rekap</h1>
                        <a href="{{ route('rekap.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                        <a href="{{ route('rekap.export') }}" class="btn btn-success mb-3">Export Excel</a>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                            data-target="#exampleModal">
                            Import Excel
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered" id="table_id">
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
                                    <a href="{{ route('rekap.edit', $item->id) }}" class="btn btn-success">Edit</a> |
                                    <form action="{{ route('rekap.destroy',$item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin data akan dihapus ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
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
                        <form action="{{ route('rekap.import')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Pilih file</label>
                                <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1"
                                    required>
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
    </div>
</div>
@endsection
