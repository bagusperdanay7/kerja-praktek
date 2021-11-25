@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <ul class="nav tab-nav ml-n1 my-3">
                <li class="nav-item tab-rekap-item">
                    <a href="{{ route('rekap.index') }}#rekap-deployment" class="tab-rekap">Rekap Deployment</a>
                </li>
                <li class="nav-item tab-rekap-item">
                    <a href="{{ route('rekapProgress.index') }}#rekap-progress" class="tab-rekap tab-active">Rekap Progress</a>
                </li>
            </ul>

                {{-- Table Rekap Progress --}}
                <a href="{{ route('rekapProgress.export') }}" class="btn btn-primary">Export Excel</a>
                    <div class="card mt-2 mb-5 shadow-sm" id="rekap-progress">
                        <div class="card-body">
                            <h2 class="title-table">Rekap Progress</h2>
                            <table class="table table-hover" id="table_id_2">
                                <thead>
                                    <tr>
                                        <th class="text-center">NO</th>
                                        <th>OLO</th>
                                        <th class="text-center">PLAN AKTIVASI</th>
                                        <th class="text-center">PLAN MODIFY</th>
                                        <th class="text-center">PLAN DISCONNECT</th>
                                        {{-- <th class="text-center">PLAN MODIFY</th>
                                        <th class="text-center">PLAN DISCONNECT</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rekap_pro as $item_repro)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item_repro->olo }}</td>
                                        <td class="text-center">{{ $item_repro->plan_aktivasi }}</td>
                                        <td class="text-center">{{ $item_repro->plant_modify }}</td>
                                        <td class="text-center">{{ $item_repro->plant_dc }}</td>
                                        {{-- <td class="text-center">{{ $item->plan_modify }}</td>
                                        <td class="text-center">{{ $item->plan_dc }}</td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th colspan="2" class="text-center">TOTAL</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        {{-- <th class="text-center">{{ $totalPlanModify }}</th>
                                        <th class="text-center">{{ $totalPlanDc }}</th> --}}
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
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
