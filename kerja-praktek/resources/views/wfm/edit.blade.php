@extends('template.main')
@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body ">
                    <h4 class="form-title">Form Update Deployment</h4>
                    <form action="{{ route('wfm.update',$wfm->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="tgl_bulan_th">TGL/BLN/THN</label>
                            <input type="date" name="tgl_bulan_th" id="tgl_bulan_th" class="form-control"
                                value="{{ $wfm->tgl_bulan_th }}">
                        </div>
                        <div class="form-group">
                            <label for="no_ao">NO. AO</label>
                            <input type="text" name="no_ao" id="no_ao" class="form-control" value="{{ $wfm->no_ao }}">
                        </div>
                        <div class="form-group">
                            <label for="witel">WITEL</label>
                            <select name="witel" id="witel" class="form-control">
                                <option value="{{ $wfm->witel }}">{{ $wfm->witel }}</option>
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
                                <option value="{{ $wfm->olo_isp }}">{{ $wfm->olo_isp }}</option>
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
                            <input type="text" name="sid" id="sid" class="form-control" value="{{ $wfm->sid }}">
                        </div>
                        <div class="form-group">
                            <label for="site_id">SITE ID</label>
                            <input type="text" name="site_id" id="site_id" class="form-control" value="{{ $wfm->site_id }}">
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
                            <input type="text" name="kapasitas_bw" id="kapasitas_bw" class="form-control"
                                value="{{ $wfm->kapasitas_bw }}">
                        </div>
                        <div class="form-group">
                            <label for="longitude">LONGITUDE</label>
                            <input type="text" name="longitude" id="longitude" class="form-control"
                                value="{{ $wfm->longitude }}">
                        </div>
                        <div class="form-group">
                            <label for="latitude">LATITUDE</label>
                            <input type="text" name="latitude" id="latitude" class="form-control"
                                value="{{ $wfm->latitude }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_asal">ALAMAT ASAL</label>
                            <textarea class="form-control" name="alamat_asal" id="alamat_asal" rows="3">{{ $wfm->alamat_asal }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="alamat_tujuan">ALAMAT TUJUAN</label>
                            <textarea class="form-control" name="alamat_tujuan" id="alamat_tujuan" rows="3">{{ $wfm->alamat_tujuan }}</textarea>
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
                            <input type="text" name="berita_acara" id="berita_acara" class="form-control"
                                value="{{ $wfm->berita_acara }}">
                        </div>
                        <div class="form-group">
                            <label for="tgl_complete">TGL COMPLETE WFM</label>
                            <input type="date" name="tgl_complete" id="tgl_complete" class="form-control"
                                value="{{ $wfm->tgl_complete }}">
                        </div>
                        <div class="form-group">
                            <label for="status_wfm">STATUS WFM</label>
                            <input type="text" name="status_wfm" id="status_wfm" class="form-control"
                                value="{{ $wfm->status_wfm }}">
                        </div>
                        <div class="form-group">
                            <label for="alasan_cancel">ALASAN CANCEL</label>
                            <input type="text" name="alasan_cancel" id="alasan_cancel" class="form-control"
                                value="{{ $wfm->alasan_cancel }}">
                        </div>
                        <div class="form-group">
                            <label for="cancel_by">CANCEL By</label>
                            <input type="text" name="cancel_by" id="cancel_by" class="form-control"
                                value="{{ $wfm->cancel_by }}">
                        </div>
                        <div class="form-group">
                            <label for="start_cancel">START CANCEL DATE</label>
                            <input type="date" name="start_cancel" id="start_cancel" class="form-control"
                                value="{{ $wfm->start_cancel }}">
                        </div>
                        <div class="form-group">
                            <label for="ready_after_cancel">READY AFTER CANCEL</label>
                            <input type="date" name="ready_after_cancel" id="ready_after_cancel" class="form-control"
                                value="{{ $wfm->ready_after_cancel }}">
                        </div>
                        <div class="form-group">
                            <label for="integrasi">INTEGRASI</label>
                            <input type="date" name="integrasi" id="integrasi" class="form-control"
                                value="{{ $wfm->integrasi }}">
                        </div>
                        <div class="form-group">
                            <label for="nometro">METRO</label>
                            <input type="text" name="metro" id="metro" class="form-control" value="{{ $wfm->metro }}">
                        </div>
                        <div class="form-group">
                            <label for="ip">IP</label>
                            <input type="text" name="ip" id="ip" class="form-control" value="{{ $wfm->ip }}">
                        </div>
                        <div class="form-group">
                            <label for="port">PORT</label>
                            <input type="text" name="port" id="port" class="form-control" value="{{ $wfm->port }}">
                        </div>
                        <div class="form-group">
                            <label for="metro2">METRO</label>
                            <input type="text" name="metro2" id="metro2" class="form-control" value="{{ $wfm->metro2 }}">
                        </div>
                        <div class="form-group">
                            <label for="ip2">IP</label>
                            <input type="text" name="ip2" id="ip2" class="form-control" value="{{ $wfm->ip2 }}">
                        </div>
                        <div class="form-group">
                            <label for="port2">PORT</label>
                            <input type="text" name="port2" id="port2" class="form-control" value="{{ $wfm->port2 }}">
                        </div>
                        <div class="form-group">
                            <label for="vlan">VLAN</label>
                            <input type="text" name="vlan" id="vlan" class="form-control" value="{{ $wfm->vlan }}">
                        </div>
                        <div class="form-group">
                            <label for="vcid">VCID</label>
                            <input type="text" name="vcid" id="vcid" class="form-control" value="{{ $wfm->vcid }}">
                        </div>
                        <div class="form-group">
                            <label for="gpon">GPON</label>
                            <input type="text" name="gpon" id="gpon" class="form-control" value="{{ $wfm->gpon }}">
                        </div>
                        <div class="form-group">
                            <label for="ip3">IP</label>
                            <input type="text" name="ip3" id="ip3" class="form-control" value="{{ $wfm->ip3 }}">
                        </div>
                        <div class="form-group">
                            <label for="port3">PORT</label>
                            <input type="text" name="port3" id="port3" class="form-control" value="{{ $wfm->port3 }}">
                        </div>
                        <div class="form-group">
                            <label for="sn">SN</label>
                            <input type="text" name="sn" id="sn" class="form-control" value="{{ $wfm->sn }}">
                        </div>
                        <div class="form-group">
                            <label for="port4">PORT</label>
                            <input type="text" name="port4" id="port4" class="form-control" value="{{ $wfm->port4 }}">
                        </div>
                        <div class="form-group">
                            <label for="type">TYPE</label>
                            <input type="text" name="type" id="type" class="form-control" value="{{ $wfm->type }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">NAMA SWITCH</label>
                            <textarea class="form-control" name="nama" id="nama" rows="3" value="{{ $wfm->nama }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ip4">IP SWITCH</label>
                            <textarea class="form-control" name="ip4" id="ip4" rows="3" value="{{ $wfm->ip4 }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="downlink">DOWNLINK</label>
                            <textarea class="form-control" name="downlink" id="downlink" rows="3" value="{{ $wfm->downlink }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="type_switch">TYPE SWITCH</label>
                            <textarea class="form-control" name="type_switch" id="type_switch" rows="3" value="{{ $wfm->type_switch }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="capture_metro_backhaul">CAPTURE METRO BACKHAUL</label>
                            <textarea class="form-control" name="capture_metro_backhaul" id="capture_metro_backhaul" rows="3">{{ $wfm->capture_metro_backhaul }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="capture_metro_access">CAPTURE METRO ACCESS</label>
                            <textarea class="form-control" name="capture_metro_access" id="capture_metro_access" rows="3">{{ $wfm->capture_metro_access }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="capture_gpon">CAPTURE GPON</label>
                            <textarea class="form-control" name="capture_gpon" id="capture_gpon" rows="3">{{ $wfm->capture_gpon }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="pic">PIC</label>
                            <input type="text" name="pic" id="pic" class="form-control" value="{{ $wfm->pic }}">
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('wfm.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button type="submit" class="btn btn-main" onclick="return validasiEdit();">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- asc --}}
