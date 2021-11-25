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
                    <div class="d-flex align-self-center justify-content-between title-head">
                        <h2 class="">Rekap Deployment</h2>
                        <a href="{{route('rekap.export')}}" class="btn btn-primary h-25">Export</a>
                    </div>
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
                            <?php
                                $aktivasi = 0;
                                $modify = 0;
                                $dc = 0;
                                $resume = 0;
                                $suspend = 0;
                            ?>
                            @foreach ($rekap as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->olo_isp }}</td>
                                <td class="text-center">{{ $item->AKTIVASI }}</td>
                                <td class="text-center">{{ $item->MODIF }}</td>
                                <td class="text-center">{{ $item->DISCONNECT }}</td>
                                <td class="text-center">{{ $item->RESUME }}</td>
                                <td class="text-center">{{ $item->SUSPEND }}</td>
                            </tr>
                            <?php

                                $aktivasi += $item->AKTIVASI;
                                $modify += $item->MODIF;
                                $dc += $item->DISCONNECT;
                                $resume += $item->RESUME;
                                $suspend += $item->SUSPEND;
                                ?>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th colspan="2" class="text-center">TOTAL</th>
                                <th class="text-center">{{ $aktivasi }}</th>
                                <th class="text-center">{{ $modify }}</th>
                                <th class="text-center">{{ $dc }}</th>
                                <th class="text-center">{{ $resume }}</th>
                                <th class="text-center">{{ $suspend }}</th>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
