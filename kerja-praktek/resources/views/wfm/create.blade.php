@extends('template.main')

@section('contain')
<div class="container">
    <h1>Form Tambah Data</h1>
    <div class="card">
        <div class="card-body mb-5">
            <form action="{{ route('wfm.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="no">NO</label>
                    <input type="text" name="no" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="TGL/BLN/THN">TGL/BLN/THN</label>
                    <input type="date" name="tgl_bulan_th" id="TGL/BLN/THN" class="form-control">
                </div>
                <div class="form-group">
                    <label for="NO. AO">NO. AO</label>
                    <input type="text" name="no_ao" id="NO. AO" class="form-control">
                </div>
                <div class="form-group">
                    <label for="witel">WITEL</label>
                    <select name="witel" id="witel" class="form-control">
                        @foreach ($database as $item)
                        <option value="{{ $item->witel }}">{{ $item->witel }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="olo">OLO / ISP</label>
                    <select name="olo_isp" id="olo" class="form-control">
                        @foreach ($database as $item)
                        <option value="{{ $item->olo_isp }}">{{ $item->olo_isp }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="site">SITE KRITERIA</label>
                    <select name="site_kriteria" id="site" class="form-control">
                        @foreach ($database as $item)
                        <option value="{{ $item->site_kriteria }}">{{ $item->site_kriteria }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="no">SID</label>
                    <input type="text" name="sid" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">SITE ID</label>
                    <input type="text" name="site_id" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="site">ORDER TYPE</label>
                    <select name="order_type" id="site" class="form-control">
                        @foreach ($database as $item)
                        <option value="{{ $item->order_type }}">{{ $item->order_type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="site">PRODUK</label>
                    <select name="produk" id="site" class="form-control">
                        @foreach ($database as $item)
                        <option value="{{ $item->produk }}">{{ $item->produk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="site">SATUAN</label>
                    <select name="satuan" id="site" class="form-control">
                        @foreach ($database as $item)
                        <option value="{{ $item->satuan }}">{{ $item->satuan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="no">KAPASITAS [BW]</label>
                    <input type="text" name="kapasitas_bw" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">LONGITUDE</label>
                    <input type="text" name="longitude" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">LATITUDE</label>
                    <input type="text" name="latitude" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">ALAMAT ASAL</label>
                    <input type="text" name="alamat_asal" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">ALAMAT TUJUAN</label>
                    <input type="text" name="alamat_tujuan" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="site">STATUS NCX</label>
                    <select name="status_ncx" id="site" class="form-control">
                        @foreach ($database as $item)
                        <option value="{{ $item->status_ncx }}">{{ $item->status_ncx }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="no">BERITA ACARA</label>
                    <input type="text" name="berita_acara" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">TGL COMPLETE WFM</label>
                    <input type="date" name="tgl_complete" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">STATUS WFM</label>
                    <input type="text" name="status_wfm" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">ALASAN CANCEL</label>
                    <input type="text" name="alasan_cancel" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">CANCEL By</label>
                    <input type="text" name="cancel_by" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">START CANCEL DATE</label>
                    <input type="date" name="start_cancel" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">READY AFTER CANCEL</label>
                    <input type="date" name="ready_after_cancel" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">INTEGRASI</label>
                    <input type="date" name="integrasi" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">METRO</label>
                    <input type="text" name="metro" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">IP</label>
                    <input type="text" name="ip" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">PORT</label>
                    <input type="text" name="port" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">METRO</label>
                    <input type="text" name="metro2" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">IP</label>
                    <input type="text" name="ip2" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">PORT</label>
                    <input type="text" name="port2" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">VLAN</label>
                    <input type="text" name="vlan" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">VCID</label>
                    <input type="text" name="vcid" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">GPON</label>
                    <input type="text" name="gpon" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">IP</label>
                    <input type="text" name="ip3" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">PORT</label>
                    <input type="text" name="port3" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">SN</label>
                    <input type="text" name="sn" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">PORT</label>
                    <input type="text" name="port4" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">TYPE</label>
                    <input type="text" name="type" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">NAMA</label>
                    <input type="text" name="nama" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">IP</label>
                    <input type="text" name="ip4" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">DOWNLINK</label>
                    <input type="text" name="downlink" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">TYPE</label>
                    <input type="text" name="type2" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">CAPTURE DONE</label>
                    <input type="text" name="capture_done" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no">PIC</label>
                    <input type="text" name="pic" id="no" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection