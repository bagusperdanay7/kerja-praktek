@extends('template.main')
@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h4 class="form-title">Form Update Pekerjaan Lapangan</h4>
                    <form action="{{ route('pekerjaan_lapangan.update',$pekerjaan_lapangan->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                                value="{{ $pekerjaan_lapangan->tanggal }}">
                        </div>
                        <div class="form-group">
                            <label for="witel">Witel</label>
                            <select name="witel" class="form-control" id="witel">
                                <option value="{{ $pekerjaan_lapangan->witel }}">{{ $pekerjaan_lapangan->witel }}
                                </option>
                                @foreach ($database as $db)
                                <option value="{{ $db->witel }}">{{ $db->witel }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kegiatan">Kegiatan</label>
                            <input type="text" name="kegiatan" id="kegiatan" class="form-control" value="{{ $pekerjaan_lapangan->kegiatan }}">
                        </div>
                        <div class="form-group">
                            <label for="no_ao">No AO</label>
                            <select name="no_ao" class="form-control" id="no_ao">
                                <option value="{{ $pekerjaan_lapangan->no_ao }}">{{ $pekerjaan_lapangan->no_ao }}</option>
                                @foreach ($wfm as $wfm)
                                <option value="{{ $wfm->no_ao }}">{{ $wfm->no_ao }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="olo">OLO</label>
                            <select name="olo" class="form-control" id="olo">
                                <option value="{{ $pekerjaan_lapangan->olo }}">{{ $pekerjaan_lapangan->olo }}</option>
                                @foreach ($database as $db)
                                <option value="{{ $db->olo_isp }}">{{ $db->olo_isp }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <textarea name="lokasi" class="form-control" id="lokasi"
                                rows="3">{{ $pekerjaan_lapangan->lokasi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="layanan">Layanan</label>
                            <select name="layanan" class="form-control" id="layanan">
                                <option value="{{ $pekerjaan_lapangan->layanan }}">{{ $pekerjaan_lapangan->layanan }}
                                </option>
                                @foreach ($database as $db)
                                <option value="{{ $db->produk }}">{{ $db->produk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bandwidth">Bandwidth</label>
                            <input type="text" name="bandwidth" id="bandwidth" class="form-control"
                                value="{{ $pekerjaan_lapangan->bandwidth }}">
                        </div>
                        <div class="form-group">
                            <label for="datek_gpon">DATEK GPON</label>
                            <input type="text" name="datek_gpon" id="datek_gpon" class="form-control"
                                value="{{ $pekerjaan_lapangan->datek_gpon }}">
                        </div>
                        <div class="form-group">
                            <label for="datek_odp">DATEK ODP</label>
                            <input type="text" name="datek_odp" id="datek_odp" class="form-control"
                                value="{{ $pekerjaan_lapangan->datek_odp }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="keterangan"
                                rows="2">{{ $pekerjaan_lapangan->keterangan }}</textarea>
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('pekerjaan_lapangan.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button type="submit" class="btn btn-main" onclick="return validasiEdit();">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
