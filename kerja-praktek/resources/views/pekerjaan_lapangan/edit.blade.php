@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mb-3">Edit Data Pekerjaan Lapangan</h1>
            <form action="{{ route('pekerjaan_lapangan.update',$pekerjaan_lapangan->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $pekerjaan_lapangan->tanggal }}">
                </div>
                <div class="form-group">
                    <label for="witel">Witel</label>
                    <select name="witel" class="form-control" id="witel">
                        <option value="{{ $pekerjaan_lapangan->witel }}">{{ $pekerjaan_lapangan->witel }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kegiatan">Kegiatan</label>
                    <select name="kegiatan" class="form-control" id="kegiatan">
                        <option value="{{ $pekerjaan_lapangan->kegiatan }}">{{ $pekerjaan_lapangan->kegiatan }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_ao">No AO</label>
                    <input type="text" name="no_ao" id="no_ao" class="form-control" value="{{ $pekerjaan_lapangan->no_ao }}">
                </div>
                <div class="form-group">
                    <label for="olo">OLO</label>
                    <select name="olo" class="form-control" id="olo">
                        <option value="{{ $pekerjaan_lapangan->olo }}">{{ $pekerjaan_lapangan->olo }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <textarea name="lokasi" class="form-control" id="lokasi" rows="3">{{ $pekerjaan_lapangan->lokasi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="layanan">Layanan</label>
                    <select name="layanan" class="form-control" id="layanan">
                        <option value="{{ $pekerjaan_lapangan->layanan }}">{{ $pekerjaan_lapangan->layanan }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bandwidth">Bandwidth</label>
                    <input type="text" name="bandwidth" id="bandwidth" class="form-control" value="{{ $pekerjaan_lapangan->bandwidth }}">
                </div>
                <div class="form-group">
                    <label for="datek_gpon">DATEK GPON</label>
                    <input type="text" name="datek_gpon" id="datek_gpon" class="form-control" value="{{ $pekerjaan_lapangan->datek_gpon }}">
                </div>
                <div class="form-group">
                    <label for="datek_odp">DATEK ODP</label>
                    <input type="text" name="datek_odp" id="datek_odp" class="form-control" value="{{ $pekerjaan_lapangan->datek_odp }}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="keterangan" rows="2">{{ $pekerjaan_lapangan->keterangan }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection