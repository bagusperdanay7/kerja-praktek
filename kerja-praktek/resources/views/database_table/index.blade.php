@extends('template.main')

@section('contain')
<div class="container-fluid isi">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card mt-2 mb-5 shadow-sm">
                <a href="{{ route('database.export') }}" class="btn btn-success mb-3">Export Excel</a>
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Import Excel
                </button>
                <div class="card-body">
                    <div class="title-table d-flex justify-content-between">
                        <h2>Database</h2>
                        <a href="{{ route('database.create') }}" class="btn btn-main mb-3">Tambah Data</a>
                    </div>
                    <table class="table table-responsive table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">WITEL</th>
                                <th scope="col">OLO / ISP</th>
                                <th scope="col" class="text-nowrap">SITE KRITERIA</th>
                                <th scope="col" class="text-nowrap">ORDER TYPE</th>
                                <th scope="col">PRODUK</th>
                                <th scope="col">SATUAN</th>
                                <th scope="col" class="text-nowrap">STATUS NCX</th>
                                <th scope="col"><span class="las la-ellipsis-v"></span></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->witel }}</td>
                                <td>{{ $item->olo_isp }}</td>
                                <td>{{ $item->site_kriteria }}</td>
                                <td>{{ $item->order_type }}</td>
                                <td>{{ $item->produk }}</td>
                                <td>{{ $item->satuan }}</td>
                                <td>{{ $item->status_ncx }}</td>
                                <td class="text-center">
                                    <div class="dropleft">
                                        <span class="las la-ellipsis-v" id="menuEdit" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></span>
                                        <div class="dropdown-menu" aria-labelledby="menuEdit">
                                            <a href="{{ route('database.edit',$item->id) }}" class="dropdown-item"
                                                type="button">
                                                <i class="fas fa-edit mr-2"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('database.destroy',$item->id) }}" method="POST"
                                                class="d-inline" onsubmit="return validasiHapus()">
                                                @csrf
                                                @method('delete')
                                                <button class="dropdown-item" type="submit"
                                                    onclick="return confirm('Apakah Anda Ingin Menghapusnya?')"><i
                                                        class="fas fa-trash mr-2"></i> Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
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
