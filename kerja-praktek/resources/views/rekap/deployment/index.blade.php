@extends('template.main')

@section('contain')
<div class="container-fluid isi">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <ul class="nav tab-nav ml-n1 my-3">
                <li class="nav-item tab-rekap-item">
                    <a href="{{ route('rekap.index') }}#rekap-deployment" class="tab-rekap tab-active">Rekap Deployment</a>
                </li>
                <li class="nav-item tab-rekap-item">
                    <a href="{{ route('rekapProgress.index') }}#rekap-progress" class="tab-rekap">Rekap Progress</a>
                </li>
            </ul>

            <div class="card mt-2 mb-5 shadow-sm" id="rekap-deployment">
                <div class="card-body">
                    <h2 class="title-table">Rekap Deployment</h2>
                    <table class="table table-hover table-responsive-md" id="table_id">
                        <thead>
                            <tr>
                                <th class="text-center">NO</th>
                                <th>OLO</th>
                                <th class="text-center">AKTIVASI</th>
                                <th class="text-center">MODIFY</th>
                                <th class="text-center">DISCONNECT</th>
                                <th class="text-center">RESUME</th>
                                <th class="text-center">SUSPEND</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekap as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->olo }}</td>
                                <td class="text-center">{{ $item->aktivasi }}</td>
                                <td class="text-center">{{ $item->modif }}</td>
                                <td class="text-center">{{ $item->disconnect }}</td>
                                <td class="text-center">{{ $item->resum }}</td>
                                <td class="text-center">{{ $item->suspen }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th colspan="2" class="text-center">TOTAL</th>
                                <th class="text-center">{{ $total }}</th>
                                <th class="text-center">{{ $totalModify }}</th>
                                <th class="text-center">{{ $totalDc }}</th>
                                <th class="text-center">{{ $totalResume }}</th>
                                <th class="text-center">{{ $totalSuspend }}</th>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>

            {{-- <div class="button-export mt-4">
                        {{-- <a href="{{ route('rekap.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <a href="{{ route('rekap.export') }}" class="btn btn-success mb-3">Export Excel</a>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Import Excel
                {{-- </button> --}}

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
