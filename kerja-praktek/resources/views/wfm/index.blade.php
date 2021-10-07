@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="filter-title">Filter</h4>
            <form action="{{ route('wfm.index') }}">
                {{-- @if (request('no_ao'))
                    <input type="hidden" name="no_ao" value="{{ request('no_ao') }}">
                @endif
                @if (request('witel'))
                <input type="hidden" name="witel" value="{{ request('witel') }}">
                @endif --}}

                {{-- filter field --}}
                <div class="form-row">
                    <div class="col">
                        <label for="no_ao">NO AO</label>
                        <select class="form-control" id="no_ao" name="no_ao">
                            @if (request('no_ao'))
                            <option value="{{ request('no_ao') }}">{{ request('no_ao') }}</option>
                            @else
                            <option value="">Pilih No AO</option>
                            @endif

                            @foreach ($wfm as $wfm)
                            <option value="{{ $wfm->no_ao }}">{{ $wfm->no_ao }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="tgl_bulan_th">Tanggal</label>
                        <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_th"
                            id="tgl_bulan_th" value="{{ request('tgl_bulan_th') }}">
                    </div>
                    <div class="col">
                        <label for="witel">Witel</label>
                        <select class="form-control" id="witel" name="witel">
                            @if (request('witel'))
                            <option value="{{ request('witel') }}">{{ request('witel') }}</option>
                            @else
                            <option value="">Pilih Witel</option>
                            @endif

                            @foreach ($db as $db)
                            @if ($db->witel != '')
                            <option value="{{ $db->witel }}">{{ $db->witel }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- akhir filter field --}}
                <a href="{{ route('wfm.index') }}" class="btn btn-danger">Reset</a>
                <button class="btn btn-main mt-2 px-4 d-flex justify-content-end" type="submit">Filter</button>
            </form>

            <div class="filter row">
                
            </div>

            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card mt-2 mb-5 shadow-sm">
                {{-- <a href="{{ route('wfm.create') }}" class="btn btn-primary">Tambah data</a> --}}
                {{-- <a href="{{ route('wfm.export') }}" class="btn btn-success">Export to excel</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Import Excel
                </button> --}}
                <div class="card-body">
                    <h2 class="title-table">Deployment</h2>
                    <table class="table table-responsive table-hover" id="table_id">
                        <thead>
                            <th class="text-nowrap">REKAP ID</th>
                            <th>TGL/BLN/THN</th>
                            <th class="text-nowrap">NO. AO</th>
                            <th>WITEL</th>
                            <th class="text-nowrap">OLO / ISP</th>
                            <th class="text-nowrap">SITE KRITERIA</th>
                            <th>SID</th>
                            <th class="text-nowrap">SITE ID</th>
                            <th class="text-nowrap">ORDER TYPE</th>
                            <th>PRODUK</th>
                            <th>SATUAN</th>
                            <th class="text-nowrap">KAPASITAS [BW]</th>
                            <th>LONGITUDE</th>
                            <th>LATITUDE</th>
                            <th class="text-nowrap">ALAMAT ASAL</th>
                            <th class="text-nowrap">ALAMAT TUJUAN</th>
                            <th class="text-nowrap">STATUS NCX</th>
                            <th class="text-nowrap">BERITA ACARA</th>
                            <th class="text-nowrap">TGL COMPLETE WFM</th>
                            <th class="text-nowrap">STATUS WFM</th>
                            <th class="text-nowrap">ALASAN CANCEL</th>
                            <th class="text-nowrap">CANCEL By</th>
                            <th class="text-nowrap">START CANCEL DATE</th>
                            <th class="text-nowrap">READY AFTER CANCEL</th>
                            <th>INTEGRASI</th>
                            <th class="text-nowrap">METRO BACKHAUL</th>
                            <th>IP</th>
                            <th>PORT</th>
                            <th class="text-nowrap">METRO ACCESS</th>
                            <th>IP</th>
                            <th>PORT</th>
                            <th>VLAN</th>
                            <th>VCID</th>
                            <th>GPON</th>
                            <th>IP</th>
                            <th>PORT</th>
                            <th>SN</th>
                            <th>PORT</th>
                            <th>TYPE</th>
                            <th class="text-nowrap">CAPTURE METRO</th>
                            <th class="text-nowrap">CAPTURE GPON</th>
                            <th>PIC</th>
                            @canany(['admin', 'editor'])
                            <th scope="col"><span class="las la-ellipsis-v"></span></th>
                            @endcanany
                        </thead>
                        <tbody>
                            @foreach ($wfms as $wfm)
                            <tr>
<<<<<<< HEAD
=======
                                <td>{{$wfm->rekap_id }}</td>
>>>>>>> 63d53cc60ad77d0fa46ff50b9ee22dacf495d5a4
                                <td>{{$wfm->tgl_bulan_th }}</td>
                                <td>{{$wfm->no_ao }}</td>
                                <td>{{$wfm->witel }}</td>
                                <td>{{$wfm->olo_isp }}</td>
                                <td>{{$wfm->site_kriteria }}</td>
                                <td>{{$wfm->sid }}</td>
                                <td>{{$wfm->site_id }}</td>
                                <td>{{$wfm->order_type}}</td>
                                <td>{{$wfm->produk }}</td>
                                <td>{{$wfm->satuan }}</td>
                                <td>{{$wfm->kapasitas_bw }}</td>
                                <td>{{$wfm->longitude }}</td>
                                <td>{{$wfm->latitude }}</td>
                                <td>{{$wfm->alamat_asal }}</td>
                                <td>{{$wfm->alamat_tujuan}}</td>
                                <td>{{$wfm->status_ncx }}</td>
                                <td>{{$wfm->berita_acara }}</td>
                                <td>{{$wfm->tgl_complete}}</td>
                                <td>{{$wfm->status_wfm }}</td>
                                <td>{{$wfm->alasan_cancel }}</td>
                                <td>{{$wfm->cancel_by }}</td>
                                <td>{{$wfm->start_cancel }}</td>
                                <td>{{$wfm->ready_after_cancel }}</td>
                                <td>{{$wfm->integrasi }}</td>
                                <td>{{$wfm->metro }}</td>
                                <td>{{$wfm->ip }}</td>
                                <td>{{$wfm->port }}</td>
                                <td>{{$wfm->metro2 }}</td>
                                <td>{{$wfm->ip2  }}</td>
                                <td>{{$wfm->port2 }}</td>
                                <td>{{$wfm->vlan }}</td>
                                <td>{{$wfm->vcid }}</td>
                                <td>{{$wfm->gpon }}</td>
                                <td>{{$wfm->ip3 }}</td>
                                <td>{{$wfm->port3 }}</td>
                                <td>{{$wfm->sn }}</td>
                                <td>{{$wfm->port4 }}</td>
                                <td>{{$wfm->type }}</td>
                                <td>{{ $wfm->capture_metro }}</td>
                                <td>{{ $wfm->capture_gpon }}</td>
                                <td>{{$wfm->pic }}</td>
                                @canany(['admin', 'editor'])
                                <td class="text-center">
                                    <div class="dropleft">
                                        <span class="las la-ellipsis-v" id="menuEdit" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></span>
                                        <div class="dropdown-menu" aria-labelledby="menuEdit">
                                            <a href="{{ route('wfm.edit',$wfm->id) }}" class="dropdown-item"
                                                type="button">
                                                <i class="fas fa-edit mr-2"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('wfm.delete',$wfm->id) }}" method="POST"
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
                                @endcanany
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
                        <form action="{{ route('wfm.import')}}" method="POST" enctype="multipart/form-data">
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
