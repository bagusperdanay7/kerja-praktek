@extends('template.main')

@section('contain')
<div class="container-fluid isi">
    @if (session()->has('success'))
    <div class="success-tambah align-items-center mt-3" id="success-tambah">
        <div class="d-flex">
            <div class="ml-3 p-2 align-self-center text-success">
                <i class="las la-check display-4"></i>
            </div>
            <div class="p-2 flex-grow-1 border-right">
                <h3 class="mt-2">Success</h3>
                <p class="pesan-berhasil">{{ session('success') }}</p>
            </div>
            <div class="px-4 align-self-center">
                <button id="close-flash" class="close" onclick="hideFlash()">
                    <span class="font-weight-normal">CLOSE</span>
                </button>
            </div>
        </div>
    </div>
    @endif


    <div class="row">
        <div class="col">
            <div class="m-0 p-0" id="filterform">
                <h4 class="filter-title" title="Filter"><i class="las la-filter"></i> Filter</h4>
                <div class="clear-filter">
                    <a href="{{ route('wfm.index') }}">Clear Filters</a>
                </div>
                <form action="{{ route('wfm.index') }}">
                    {{-- filter field --}}
                    <div class="form-row">
                        <div class="col">
                            <label for="no_ao">No. AO</label>
                            @if (request('no_ao'))
                            <input list="no_aos" name="no_ao" id="no_ao" class="form-control"
                                value="{{ request('no_ao') }}" autocomplete="off">
                            @else
                            <input list="no_aos" name="no_ao" id="no_ao" class="form-control"
                                placeholder="Masukkan No. AO" autocomplete="off">
                            @endif

                            <datalist id="no_aos">
                                @foreach ($wfm_all as $wfm_a)
                                <option value="{{ $wfm_a->no_ao }}">{{ $wfm_a->no_ao }}</option>
                                @endforeach
                            </datalist>
                        </div>
                        <div class="col">
                            <label for="tgl_bulan_th">Dari Tanggal</label>
                            <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_th"
                                id="tgl_bulan_th" value="{{ request('tgl_bulan_th') }}">
                        </div>
                        <div class="col">
                            <label for="tgl_bulan_th_sd">Sampai Tanggal</label>
                            <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_sd"
                                id="tgl_bulan_sd" value="{{ request('tgl_bulan_sd') }}">
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
                    </div>

                    <div class="form-row mt-3">
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
                    </div>

                    <div class="form-row mt-3">
                        <div class="col-3">
                            <label for="status_wfm">Status WFM</label>
                            <select class="form-control" id="status_wfm" name="status_wfm">
                                @if (request('status_wfm'))
                                <option value="{{ request('status_wfm') }}">{{ request('status_wfm') }}</option>
                                @else
                                <option value="">Pilih Status WFM</option>
                                @endif

                                @foreach ($wfm_all as $wfm_a)
                                @if ($wfm_a->status_wfm != '')
                                <option value="{{ $wfm_a->status_wfm }}">{{ $wfm_a->status_wfm }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- akhir filter field --}}

                    {{-- button filter --}}
                    <div class="mt-3 text-right">
                        <button class="btn btn-reset px-4 py-3/2" type="reset">Reset</button>
                        <button class="btn btn-filter px-4 py-3/2" type="submit">Filter</button>
                    </div>
                </form>
            </div>
            {{-- akhir form filter --}}

            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card mt-2 mb-5 shadow-sm">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <h2 class="">Deployment</h2>
                        </div>
                        <div class="col text-right">
                            <button type="button" class="btn btn-outline" data-toggle="modal"
                                data-target="#importButton">
                                <i class="las la-upload"></i> Import
                            </button>
                            <a href="{{ route('wfm.export') }}" class="btn btn-second-thin ml-2">
                                <i class="las la-download"></i> Export
                            </a>
                        </div>
                    </div>
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
                            <th>NAMA SWITCH</th>
                            <th>IP SWITCH</th>
                            <th>DOWNLINK</th>
                            <th>TYPE SWITCH</th>
                            <th class="text-nowrap">CAPTURE METRO BACKHAUL</th>
                            <th class="text-nowrap">CAPTURE METRO ACCESS</th>
                            <th class="text-nowrap">CAPTURE GPON</th>
                            <th>CAPTURE GPON IMAGE</th>
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
                                <td>{{ $wfm->nama }}</td>
                                <td>{{ $wfm->ip4 }}</td>
                                <td>{{ $wfm->downlink }}</td>
                                <td>{{ $wfm->type_switch }}</td>
                                <td class="text-nowrap">{{ $wfm->capture_metro_backhaul }}</td>
                                <td class="text-nowrap">{{ $wfm->capture_metro_access }}</td>
                                <td class="text-nowrap">{{ $wfm->capture_gpon }}</td>
                                <td>
                                    <img src="{{ asset('img/'. $wfm->capture_gpon_image) }}"
                                        style="width:100px;height:100px" alt="">
                                </td>
                                <td>{{$wfm->pic }}</td>
                                @canany(['admin', 'editor'])
                                <td class="text-center">
                                    <div class="dropleft" title="Menu">
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

        <!-- Modal Impor -->
        <div class="modal fade" id="importButton" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="importButtonLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="importButtonLabel">Import Excel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('wfm.import')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p><i class="las la-info-circle"></i> Sebelum Import pastikan sesuai dengan template!</p>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="importFile" required
                                        accept=".xlsx, .csv, .xls, .ods, .tsv">
                                    <label class="custom-file-label" for="importFile">Pilih File</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-second btn-block">Import</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-second-thin text-bold" data-toggle="modal"
                            data-target="#templateButton">Lihat Template</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Template -->
        <div class="modal fade" id="templateButton" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="templatelabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="templatelabel">Template Tabel Deployment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Pastikan urutan kolom file excel yang akan diupload sesuai seperti tabel template agar tidak
                            terjadi error!</p>
                        <table class="table table-sm table-responsive table-striped template-tabel">
                            <thead>
                                <tr>
                                    <th>Tgl/Bln/Thn</th>
                                    <th class="text-nowrap">No. ao</th>
                                    <th>Witel</th>
                                    <th class="text-nowrap">OLO / ISP</th>
                                    <th class="text-nowrap">Site kriteria</th>
                                    <th>SID</th>
                                    <th class="text-nowrap">Site ID</th>
                                    <th class="text-nowrap">Order type</th>
                                    <th>Produk</th>
                                    <th>Satuan</th>
                                    <th class="text-nowrap">Kapasitas [BW]</th>
                                    <th>Longitude</th>
                                    <th>Latitude</th>
                                    <th class="text-nowrap">Alamat asal</th>
                                    <th class="text-nowrap">Alamat tujuan</th>
                                    <th class="text-nowrap">Status NCX</th>
                                    <th class="text-nowrap">Berita acara</th>
                                    <th class="text-nowrap">Tgl Complete WFM</th>
                                    <th class="text-nowrap">Status WFM</th>
                                    <th class="text-nowrap">Alasan cancel</th>
                                    <th class="text-nowrap">Cancel by</th>
                                    <th class="text-nowrap">Start cancel date</th>
                                    <th class="text-nowrap">Ready after cancel</th>
                                    <th>Integrasi</th>
                                    <th class="text-nowrap">Metro backhaull</th>
                                    <th>IP</th>
                                    <th>PORT</th>
                                    <th class="text-nowrap">Metro access</th>
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
                                    <th class="text-nowrap">Nama switch</th>
                                    <th class="text-nowrap">IP switch</th>
                                    <th>Downlink</th>
                                    <th class="text-nowrap">Type SWITCH</th>
                                    <th class="text-nowrap">CAPTURE METRO BACKHAUL</th>
                                    <th class="text-nowrap">CAPTURE METRO ACCESS</th>
                                    <th class="text-nowrap">CAPTURE GPON</th>
                                    <th class="text-nowrap">CAPTURE GPON IMAGE</th>
                                    <th>PIC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12-12-2021</td>
                                    <td>2-780564639</td>
                                    <td>TASIKMALAYA</td>
                                    <td>CITRA JELAJAH INFORMATIKA (CIFO)</td>
                                    <td>SINGLE</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>NEW INSTALL</td>
                                    <td>METRO</td>
                                    <td>MBps</td>
                                    <td>100</td>
                                    <td>107,895</td>
                                    <td>-7,484347</td>
                                    <td>Singajaya, Kabupaten Garut, Jawa Barat Garut Indonesia CIFO KEC SINGAJAYA</td>
                                    <td>-</td>
                                    <td>Fulfill Billing Completed</td>
                                    <td></td>
                                    <td>15-12-2021</td>
                                    <td>CLOSE</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>16-12-2021</td>
                                    <td>ME9-D3-LBG</td>
                                    <td>172.30.193.1</td>
                                    <td>3/2/2</td>
                                    <td>ME-B-JWB-CKG</td>
                                    <td>172.30.193.1</td>
                                    <td>3/2/2</td>
                                    <td>2080</td>
                                    <td>1934412080</td>
                                    <td>GPON02-D3-CKJ-2</td>
                                    <td>172.30.193.1</td>
                                    <td>1/2/2</td>
                                    <td>48575443E09915A3</td>
                                    <td>1</td>
                                    <td></td>
                                    <td>Huawei</td>
                                    <td>199.202.93.2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>11-11-2021</td>
                                    <td>2-780564639</td>
                                    <td>BANDUNG</td>
                                    <td>PT. TELKOM INDONESIA</td>
                                    <td>SINGLE</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>NEW INSTALL</td>
                                    <td>METRO</td>
                                    <td>MBps</td>
                                    <td>100</td>
                                    <td>107,895</td>
                                    <td>-7,484347</td>
                                    <td>Coblong, Bandung</td>
                                    <td>-</td>
                                    <td>Fulfill Billing Completed</td>
                                    <td></td>
                                    <td>15-12-2021</td>
                                    <td>CLOSE</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>16-12-2021</td>
                                    <td>ME9-D3-LBG</td>
                                    <td>172.30.193.1</td>
                                    <td>3/2/2</td>
                                    <td>ME-B-JWB-CKG</td>
                                    <td>172.30.193.1</td>
                                    <td>3/2/2</td>
                                    <td>2080</td>
                                    <td>1934412080</td>
                                    <td>GPON02-D3-CKJ-2</td>
                                    <td>172.30.193.1</td>
                                    <td>1/2/2</td>
                                    <td>48575443E09915A3</td>
                                    <td>1</td>
                                    <td></td>
                                    <td>Huawei</td>
                                    <td>199.202.93.2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
