@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card mt-3 mx-3">
                <div class="card-header">
                    <div class="button-export mt-4">
                        <h1>Progress Lapangan</h1>
                        <a href="{{ route('progress.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
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
                                <th scope="col">PRODUK</th>
                                <th scope="col">ALAMAT / NAMA TOKO</th>
                                <th scope="col">TANGGAL ORDER PT1</th>
                                <th scope="col">KETERANGAN PT1</th>
                                <th scope="col">TANGGAL ORDER PT2</th>
                                <th scope="col">KETERANGAN PT2</th>
                                <th scope="col">DATEK ODP</th>
                                <th scope="col">DATEK GPON</th>
                                <th scope="col">KETERANGAN</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $i = 1;
                            @endphp
                            @foreach ($progress as $item)
                            <tr>
                                <td>@php echo $i; @endphp</td>
                                <td>{{ $item->wilayah }}</td>
                                <td>{{ $item->ao }}</td>
                                <td>{{ $item->olo }}</td>
                                <td>{{ $item->produk }}</td>
                                <td>{{ $item->alamat_toko }}</td>
                                <td>{{ $item->tanggal_order_pt1 }}</td>
                                <td>{{ $item->keterangan_pt1 }}</td>
                                <td>{{ $item->tanggal_order_pt2 }}</td>
                                <td>{{ $item->keterangan_pt2 }}</td>
                                <td>{{ $item->datek_odp }}</td>
                                <td>{{ $item->datek_gpon }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <a href="{{ route('progress.edit', $item->id) }}" class="btn btn-success">Edit</a> |
                                    <form action="{{ route('progress.destroy',$item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin data akan dihapus ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @php
                                $i++;
                            @endphp 
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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
                                    <input type="file" name="file" class="form-control-file"
                                        id="exampleFormControlFile1" required>
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
</div>
@endsection
