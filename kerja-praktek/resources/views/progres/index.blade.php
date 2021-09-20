@extends('template.main')

@section('contain')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card mt-3 mx-3">
                <div class="card-header">
                    <div class="button-export mt-4">
                        <h1>Progres Lapangan</h1>
                        <a href="{{ route('progres.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                        <a href="{{ route('database.export') }}" class="btn btn-success mb-3">Export Excel</a>
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
                                <th scope="col">WILAYAH</th>
                                <th scope="col">AO</th>
                                <th scope="col">OLO</th>
                                <th scope="col">ORDER TYPE</th>
                                <th scope="col">ALAMAT / NAMA TOKO</th>
                                <th scope="col">PROGRES PT1</th>
                                <th scope="col">tanggal order PT2 ( NDE )</th>
                                <th scope="col">close order</th>
                                <th scope="col">DATEK ODP</th>
                                <th scope="col">DATEK GPON</th>
                                <th scope="col">KETERANGAN</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($progres as $item)
                            <tr>
                                <td>{{ $item->no }}</td>
                                <td>{{ $item->wilayah }}</td>
                                <td>{{ $item->ao }}</td>
                                <td>{{ $item->olo }}</td>
                                <td>{{ $item->order_type }}</td>
                                <td>{{ $item->alamat_nama_toko }}</td>
                                <td>{{ $item->progres_pt1 }}</td>
                                <td>{{ $item->p_pt2_tgl_order }}</td>
                                <td>{{ $item->p_pt2_close_order }}</td>
                                <td>{{ $item->datek_odp }}</td>
                                <td>{{ $item->gpon }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <a href="{{ route('progres.edit', $item->id) }}" class="btn btn-success">Edit</a> |
                                    <form action="{{ route('progres.destroy',$item->id) }}" method="POST"
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
                        <form action="{{ route('database.import')}}" method="POST" enctype="multipart/form-data">
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
