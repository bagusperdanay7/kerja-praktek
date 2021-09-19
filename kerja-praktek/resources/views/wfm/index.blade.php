@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card mt-3 mx-3">
                <div class="card-header">
                    <h1>DATA WFM</h1>
                    <a href="{{ route('wfm.create') }}" class="btn btn-primary">Tambah data</a>
                    <a href="{{ route('wfm.export') }}" class="btn btn-success">Export to excel</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Import Excel
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered" id="table_id">
                        <thead class="thead-dark">
                            <th>NO</th>
                            <th>TGL/BLN/THN</th>
                            <th>NO. AO</th>
                            <th>WITEL</th>
                            <th>OLO / ISP</th>
                            <th>SITE KRITERIA</th>
                            <th>SID</th>
                            <th>SITE ID</th>
                            <th>ORDER TYPE</th>
                            <th>PRODUK</th>
                            <th>SATUAN</th>
                            <th>KAPASITAS [BW]</th>
                            <th>LONGITUDE</th>
                            <th>LATITUDE</th>
                            <th>ALAMAT ASAL</th>
                            <th>ALAMAT TUJUAN</th>
                            <th>STATUS NCX</th>
                            <th>BERITA ACARA</th>
                            <th>TGL COMPLETE WFM</th>
                            <th>STATUS WFM</th>
                            <th>ALASAN CANCEL</th>
                            <th>CANCEL By</th>
                            <th>START CANCEL DATE</th>
                            <th>READY AFTER CANCEL</th>
                            <th>INTEGRASI</th>
                            <th>METRO</th>
                            <th>IP</th>
                            <th>PORT</th>
                            <th>METRO</th>
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
                            <th>NAMA</th>
                            <th>IP</th>
                            <th>DOWNLINK</th>
                            <th>TYPE</th>
                            <th>CAPTURE DONE</th>
                            <th>PIC</th>
                            <th>AKSI</th>
                        </thead>
                        <tbody>
                            @foreach ($wfms as $wfm)
                            <tr>
                                <td>{{$wfm->no }}</td>
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
                                <td>{{$wfm->nama }}</td>
                                <td>{{$wfm->ip4 }}</td>
                                <td>{{$wfm->downlink }}</td>
                                <td>{{$wfm->type2 }}</td>
                                <td>{{$wfm->capture_done }}</td>
                                <td>{{$wfm->pic }}</td>
                                <td>
                                    <a href="{{ route('wfm.edit',$wfm->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('wfm.delete',$wfm->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin anda delete ? ')">Delete</button>
                                    </form>
                                </td>
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
