@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <button class="btn btn-second mt-4" type="button" data-toggle="collapse" data-target="#filterform" aria-expanded="false" aria-controls="filterform">
                <i class="las la-filter"></i> Filter
            </button>
            <div class="collapse m-0 p-0" id="filterform">
                {{-- <h4 class="filter-title">Filter</h4> --}}
                <div class="clear-filter">
                    <a href="{{ route('wfm.index') }}" class="">Clear Filters</a>
                </div>
                <form action="{{ route('wfm.index') }}">
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

                                @foreach ($wfm_all as $wfm_a)
                                <option value="{{ $wfm_a->no_ao }}">{{ $wfm_a->no_ao }}</option>
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

                                @foreach ($database as $dbs)
                                @if ($dbs->witel !== '')
                                <option value="{{ $dbs->witel }}">{{ $dbs->witel }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label for="olo_isp">OLO</label>
                            <select class="form-control" id="olo_isp" name="olo_isp">
                                @if (request('olo_isp'))
                                <option value="{{ request('olo_isp') }}">{{ request('olo_isp') }}</option>
                                @else
                                <option value="">Pilih OLO</option>
                                @endif

                                @foreach ($database as $dbs)
                                <option value="{{ $dbs->olo_isp }}">{{ $dbs->olo_isp }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                            <label for="order_type">Order Type</label>
                            <select class="form-control" id="order_type" name="order_type">
                                @if (request('order_type'))
                                <option value="{{ request('order_type') }}">{{ request('order_type') }}</option>
                                @else
                                <option value="">Pilih Order Type</option>
                                @endif

                                @foreach ($database as $dbs)
                                @if ($dbs->order_type !== '')
                                <option value="{{ $dbs->order_type }}">{{ $dbs->order_type }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label for="produk">Produk</label>
                            <select class="form-control" id="produk" name="produk">
                                @if (request('produk'))
                                <option value="{{ request('produk') }}">{{ request('produk') }}</option>
                                @else
                                <option value="">Pilih Produk</option>
                                @endif

                                @foreach ($database as $dbs)
                                @if ($dbs->produk !== '')
                                <option value="{{ $dbs->produk }}">{{ $dbs->produk }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label for="status_ncx">Status NCX</label>
                            <select class="form-control" id="status_ncx" name="status_ncx">
                                @if (request('status_ncx'))
                                <option value="{{ request('status_ncx') }}">{{ request('status_ncx') }}</option>
                                @else
                                <option value="">Pilih Status NCX</option>
                                @endif

                                @foreach ($database as $dbs)
                                @if ($dbs->status_ncx !== '')
                                <option value="{{ $dbs->status_ncx }}">{{ $dbs->status_ncx }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label for="status_wfm">Status WFM</label>
                            <select class="form-control" id="status_wfm" name="status_wfm">
                                @if (request('status_wfm'))
                                <option value="{{ request('status_wfm') }}">{{ request('status_wfm') }}</option>
                                @else
                                <option value="">Pilih Status WFM</option>
                                @endif

                                @foreach ($wfm_all as $wfm_a)
                                <option value="{{ $wfm_a->status_wfm }}">{{ $wfm_a->status_wfm }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- akhir filter field --}}

                    {{-- button filter --}}
                    <div class="mt-3 text-right">
                        <button class="btn btn-reset px-3 py-3/2" type="reset">Reset</button>
                        <button class="btn btn-filter px-3 py-3/2" type="submit">Filter</button>
                    </div>
                </form>
            </div>
            {{-- akhir form filter --}}

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
                            <th>No</th>
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
                            <th class="text-nowrap">CAPTURE METRO BACKHAUL</th>
                            <th class="text-nowrap">CAPTURE METRO ACCESS</th>
                            <th class="text-nowrap">CAPTURE GPON</th>
                            <th>PIC</th>
                            @canany(['admin', 'editor'])
                            <th scope="col"><span class="las la-ellipsis-v"></span></th>
                            @endcanany
                        </thead>
                        <tbody>
                            @foreach ($wfms as $wfm)
                            <tr>
                                <td class="text-center">{{$loop->iteration }}</td>
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
                                <td class="text-nowrap">{{ $wfm->capture_metro_backhaul }}</td>
                                <td class="text-nowrap">{{ $wfm->capture_metro_access }}</td>
                                <td class="text-nowrap">{{ $wfm->capture_gpon }}</td>
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
