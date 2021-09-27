@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card my-5 shadow-sm">
                {{-- <div class="button-export mt-4">
                        {{-- <a href="{{ route('rekap.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                <a href="{{ route('rekap.export') }}" class="btn btn-success mb-3">Export Excel</a>
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Import Excel
                </button>
            </div> --}}
            <div class="card-body">
                <h2 class="title-table">Rekap</h2>
                <table class="table table-responsive table-hover" id="table_id">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">OLO</th>
                            <th scope="col" class="text-nowrap">PLAN AKTIVASI</th>
                            <th scope="col" class="text-nowrap">PLAN MODIFY</th>
                            <th scope="col" class="text-nowrap">PLAN DISCONNECT</th>
                            <th scope="col">AKTIVASI</th>
                            <th scope="col">MODIFY</th>
                            <th scope="col">DISCONNECT</th>
                            <th scope="col">RESUME</th>
                            <th scope="col">SUSPEND</th>
                            <th scope="col"><span class="las la-ellipsis-v"></span></th>
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
                            <td class="text-center">
                                <div class="dropleft">
                                    <span class="las la-ellipsis-v" id="menuEdit" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"></span>
                                    <div class="dropdown-menu" aria-labelledby="menuEdit">
                                        <a href="{{ route('rekap.edit',$item->id) }}" class="dropdown-item"
                                            type="button">
                                            <i class="fas fa-edit mr-2"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('rekap.destroy',$item->id) }}" method="POST"
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
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-center">TOTAL</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <td></td>
                        </tr>
                    </tfoot>
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
</div>
@endsection
