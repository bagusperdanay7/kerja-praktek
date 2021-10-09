@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-deployment-tab" data-toggle="pill" href="#pills-deployment"
                        role="tab" aria-controls="pills-deployment" aria-selected="true">Rekap Deployment</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-progress-tab" data-toggle="pill" href="#pills-progress" role="tab"
                        aria-controls="pills-progress" aria-selected="false">Rekap Progress</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                {{-- Table Rekap Deployment --}}
                <div class="tab-pane fade show active" id="pills-deployment" role="tabpanel"
                    aria-labelledby="pills-deployment-tab">
                    <div class="card mt-2 mb-5 shadow-sm">
                        <div class="card-body">
                            <h2 class="title-table">Rekap Deployment</h2>
                            <table class="table table-hover" id="table_id">
                                <thead>
                                    <tr>
                                        {{-- <th>WFM ID</th> --}}
                                        <th class="text-center">NO</th>
                                        <th>OLO</th>
                                        {{-- <th>PLAN AKTIVASI</th>
                                <th>PLAN MODIFY</th>
                                <th>PLAN DISCONNECT</th> --}}
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
                                        {{-- <td class="text-center">{{ $item->plan_aktivasi }}</td>
                                        <td class="text-center">{{ $item->plan_modify }}</td>
                                        <td class="text-center">{{ $item->plan_dc }}</td> --}}
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
                </div>

                {{-- Table Rekap Progress --}}
                <div class="tab-pane fade" id="pills-progress" role="tabpanel" aria-labelledby="pills-progress-tab">
                    <div class="card mt-2 mb-5 shadow-sm">
                        <div class="card-body">
                            <h2 class="title-table">Rekap Progress</h2>
                            <table class="table table-hover" id="table_id_2">
                                <thead>
                                    <tr>
                                        {{-- <th>WFM ID</th> --}}
                                        <th class="text-center">NO</th>
                                        <th>OLO</th>
                                        {{-- <th>PLAN AKTIVASI</th>
                                <th>PLAN MODIFY</th>
                                <th>PLAN DISCONNECT</th> --}}
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
                                        {{-- <td class="text-center">{{ $item->plan_aktivasi }}</td>
                                        <td class="text-center">{{ $item->plan_modify }}</td>
                                        <td class="text-center">{{ $item->plan_dc }}</td> --}}
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
