@extends('template.main')

@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h4 class="form-title">Form New Deployment</h4>
                    <form action="{{ route('wfm.store') }}" method="POST" name="deploymentAdd">
                        @csrf
                        <div class="form-group">
                            <label for="rekap_id">REKAP ID</label>
                            <select name="rekap_id" id="rekap_id" class="form-control" required>
                                <option value="">Pilih Rekap ID</option>
                                @foreach ($rekap as $item)
                                <option value="{{ $item->id }}">{{ $item->olo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_bulan_th">TGL/BLN/THN</label>
                            <input type="date" name="tgl_bulan_th" id="tgl_bulan_th" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="NO. AO">NO. AO</label>
                            <input type="text" name="no_ao" id="NO. AO" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="witel">WITEL</label>
                            <select name="witel" id="witel" class="form-control">
                                @foreach ($database as $item)
                                @if ($item->witel !== '')
                                <option value="{{ $item->witel }}">{{ $item->witel }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="olo_isp">OLO / ISP</label>
                            <select name="olo_isp" id="olo_isp" class="form-control">
                                @foreach ($database as $item)
                                <option value="{{ $item->olo_isp }}">{{ $item->olo_isp }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="site_kriteria">SITE KRITERIA</label>
                            <select name="site_kriteria" id="site_kriteria" class="form-control">
                                @foreach ($database as $item)
                                @if ($item->site_kriteria !== '')
                                <option value="{{ $item->site_kriteria }}">{{ $item->site_kriteria }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sid">SID</label>
                            <input type="text" name="sid" id="sid" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="site_id">SITE ID</label>
                            <input type="text" name="site_id" id="site_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="order_type">ORDER TYPE</label>
                            <select name="order_type" id="order_type" class="form-control">
                                @foreach ($database as $item)
                                @if ($item->order_type !== '')
                                <option value="{{ $item->order_type }}">{{ $item->order_type }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="produk">PRODUK</label>
                            <select name="produk" id="produk" class="form-control">
                                @foreach ($database as $item)
                                @if ($item->produk !== '')
                                <option value="{{ $item->produk }}">{{ $item->produk }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="satuan">SATUAN</label>
                            <select name="satuan" id="satuan" class="form-control">
                                @foreach ($database as $item)
                                @if ($item->satuan !== '')
                                <option value="{{ $item->satuan }}">{{ $item->satuan }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kapasitas_bw">KAPASITAS [BW]</label>
                            <input type="text" name="kapasitas_bw" id="kapasitas_bw" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="longitude">LONGITUDE</label>
                            <input type="text" name="longitude" id="longitude" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="latitude">LATITUDE</label>
                            <input type="text" name="latitude" id="latitude" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat asal">ALAMAT ASAL</label>
                            <input type="text" name="alamat_asal" id="alamat asal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat_tujuan">ALAMAT TUJUAN</label>
                            <input type="text" name="alamat_tujuan" id="alamat_tujuan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status_ncx">STATUS NCX</label>
                            <select name="status_ncx" id="status_ncx" class="form-control">
                                @foreach ($database as $item)
                                @if ($item->status_ncx !== '')
                                <option value="{{ $item->status_ncx }}">{{ $item->status_ncx }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="berita_acara">BERITA ACARA</label>
                            <input type="text" name="berita_acara" id="berita_acara" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tgl_complete">TGL COMPLETE WFM</label>
                            <input type="date" name="tgl_complete" id="tgl_complete" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status_nfm">STATUS WFM</label>
                            <input type="text" name="status_wfm" id="status_nfm" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alasan_cancel">ALASAN CANCEL</label>
                            <input type="text" name="alasan_cancel" id="alasan_cancel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cancel_by">CANCEL By</label>
                            <input type="text" name="cancel_by" id="cancel_by" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="start_cancel">START CANCEL DATE</label>
                            <input type="date" name="start_cancel" id="start_cancel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ready_after_cancel">READY AFTER CANCEL</label>
                            <input type="date" name="ready_after_cancel" id="ready_after_cancel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="no">INTEGRASI</label>
                            <input type="date" name="integrasi" id="no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="metro">METRO BACKHAUL</label>
                            <input type="text" name="metro" id="metro" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ip">IP</label>
                            <input type="text" name="ip" id="ip" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="port">PORT</label>
                            <input type="text" name="port" id="port" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="metro2">METRO ACCESS</label>
                            <input type="text" name="metro2" id="metro2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ip2">IP</label>
                            <input type="text" name="ip2" id="ip2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="port2">PORT</label>
                            <input type="text" name="port2" id="port2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="vlan">VLAN</label>
                            <input type="text" name="vlan" id="vlan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="vcid">VCID</label>
                            <input type="text" name="vcid" id="vcid" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gpon">GPON</label>
                            <input type="text" name="gpon" id="gpon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ip3">IP</label>
                            <input type="text" name="ip3" id="ip3" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="port3">PORT</label>
                            <input type="text" name="port3" id="port3" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sn">SN</label>
                            <input type="text" name="sn" id="sn" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="port4">PORT</label>
                            <input type="text" name="port4" id="port4" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="type">TYPE</label>
                            <input type="text" name="type" id="type" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="capture_metro">CAPTURE METRO</label>
                            <input type="text" name="capture_metro" id="capture_metro" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="capture_gpon">CAPTURE GPON</label>
                            <input type="text" name="capture_gpon" id="capture_gpon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pic">PIC</label>
                            <input type="text" name="pic" id="pic" class="form-control">
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('wfm.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button type="submit" class="btn btn-main"  onclick="return validasiTambahDeployment();">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
