@extends('template.main')

@section('contain')
<div class="container-fluid isi">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <ul class="nav tab-nav ml-n1 my-3">
                <li class="nav-item tab-rekap-item">
                    <a href="{{ route('rekap.index') }}#rekap-deployment" class="tab-rekap">Rekap Deployment</a>
                </li>
                <li class="nav-item tab-rekap-item">
                    <a href="{{ route('rekapProgress.index') }}#rekap-progress" class="tab-rekap tab-active">Rekap
                        Progress</a>
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
    </div>
</div>
@endsection
