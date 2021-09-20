@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card mt-3 mx-3">
                <div class="card-header">
                    <div class="button-export mt-4">
                        <h1>Database</h1>
                        <a href="{{ route('database.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                        <a href="{{ route('database.export') }}" class="btn btn-success mb-3">Export Excel</a>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                            data-target="#exampleModal">
                            Import Excel
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-hover" id="table_id">
                        <thead>
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

                            <?php $i = 1; ?>
                            @foreach ($datas as $item)
                            <tr>
                                <td>{{ $i; }}</td>
                                <td>{{ $item->witel }}</td>
                                <td>{{ $item->olo_isp }}</td>
                                <td>{{ $item->site_kriteria }}</td>
                                <td>{{ $item->order_type }}</td>
                                <td>{{ $item->produk }}</td>
                                <td>{{ $item->satuan }}</td>
                                <td>{{ $item->status_ncx }}</td>
                                <td>
                                    <a href="{{ route('database.edit', $item->id) }}" class="btn btn-success">Edit</a> |
                                    <form action="{{ route('database.destroy',$item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin data akan dihapus ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++ ?>
                            @endforeach
                        </tbody>
                    </table>
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
