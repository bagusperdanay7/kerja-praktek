@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card mt-2 mb-5 shadow-sm">
                {{-- <div class="button-export mt-4">
                        {{-- <a href="{{ route('rekap.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                <a href="{{ route('rekap.export') }}" class="btn btn-success mb-3">Export Excel</a>
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Import Excel
                </button>
            </div>
            {{-- judul rekap dihapus dihome --}}
            <div class="card-body">
                <h2 class="title-table">Rekap</h2>
<<<<<<< HEAD
                <table class="table table-striped">
                    <tr>
                        {{-- <th>WFM ID</th> --}}
                        <th>NO</th>
                        <th>OLO</th>
                        {{-- <th>PLAN AKTIVASI</th>
                        <th>PLAN MODIFY</th>
                        <th>PLAN DISCONNECT</th> --}}
                        <th>AKTIVASI</th>
                        <th>MODIFY</th>
                        <th>DISCONNECT</th>
                        <th>RESUME</th>
                        <th>SUSPEND</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($rekap as $item)
                    <tr>
                        <td>{{ $i; }}</td>
                        <td>{{ $item->olo }}</td>
                        {{-- <td>{{ $item->plan_aktivasi }}</td>
                        <td>{{ $item->plan_modify }}</td>
                        <td>{{ $item->plan_dc }}</td> --}}
                        <td>{{ $item->aktivasi }}</td>
                        <td>{{ $item->modif }}</td>
                        <td>{{ $item->disconnect }}</td>
                        <td>{{ $item->resum }}</td>
                        <td>{{ $item->suspen }}</td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach

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
@endsection
