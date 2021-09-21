@extends('template.main')

@section('contain')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>Form Tambah Data</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('progres.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="witel">NO</label>
                        <input type="text" name="no" id="witel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="olo">WILAYAH</label>
                        {{-- <input type="text" name="wilayah" id="olo" class="form-control"> --}}
                        <select name="wilayah" id="olo" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ao">AO</label>
                        {{-- <input type="text" name="site_kriteria" id="SITE KRITERIA" class="form-control"> --}}
                        <select name="ao" id="ao" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="olo">OLO</label>
                        {{-- <input type="text" name="order_type" id="order_type" class="form-control"> --}}
                        <select name="olo" id="olo" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="produk">ORDER TYPE</label>
                        {{-- <input type="text" name="produk" id="produk" class="form-control"> --}}
                        <select name="order_type" id="produk" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="satuan">ALAMAT / NAMA TOKO</label>
                        {{-- <input type="text" name="satuan" id="satuan" class="form-control"> --}}
                        <select name="alamat_nama_toko" id="satuan" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="progres_pt1">PROGRES PT1</label>
                        {{-- <input type="text" name="status_ncx" id="status_ncx" class="form-control"> --}}
                        <select name="progres_pt1" id="progres_pt1" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="p_pt2_tgl_order">TANGGAL ORDER PT2(NDE)</label>
                        {{-- <input type="text" name="status_ncx" id="status_ncx" class="form-control"> --}}
                        <select name="p_pt2_tgl_order" id="p_pt2_tgl_order" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="p_pt2_close_order">CLOSE ORDER</label>
                        {{-- <input type="text" name="status_ncx" id="status_ncx" class="form-control"> --}}
                        <select name="p_pt2_close_order" id="p_pt2_close_order" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datek_odp">DATEK ODP</label>
                        {{-- <input type="text" name="status_ncx" id="status_ncx" class="form-control"> --}}
                        <select name="datek_odp" id="datek_odp" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gpon">DATEK GPON</label>
                        {{-- <input type="text" name="status_ncx" id="status_ncx" class="form-control"> --}}
                        <select name="gpon" id="gpon" class="form-control">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">KETERANGAN</label>
                        {{-- <input type="text" name="status_ncx" id="status_ncx" class="form-control"> --}}
                        {{-- <select name="keterangan" id="keterangan" class="form-control">
                            <option value="">1</option>
                        </select> --}}
                        <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

