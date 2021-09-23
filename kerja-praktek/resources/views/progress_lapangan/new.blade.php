@extends('template.main')

@section('contain')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Form Tambah Data</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('progress.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="witel">Witel</label>
                    <select name="witel" id="witel" class="form-control">
                        <option value="">Pilih Witel</option>
                        @foreach ($database as $db)
                          <option value="{{ $db->witel }}">{{ $db->witel }}</option>                            
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="ao">No Ao</label>
                    <input type="text" name="ao" id="ao" class="form-control">
                </div>

                <div class="form-group">
                    <label for="olo">Olo</label>
                    <select name="olo" id="olo" class="form-control">
                        <option value="">Pilih Olo</option>
                        @foreach ($database as $db)                            
                        <option value="{{ $db->olo_isp }}">{{ $db->olo_isp }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="produk">Produk</label>
                    <select name="produk" id="produk" class="form-control">
                        <option value="">Pilih Produk</option>
                        @foreach ($database as $db) 
                        <option value="{{ $db->produk }}">{{ $db->produk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="alamat_toko">Alamat / Nama Toko</label>
                        <textarea name="alamat_toko" id="alamat_toko" rows="3" class="form-control"></textarea>
                    </div>
                </div>

                <h5>Progress PT1</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tanggal_order_pt1">Tanggal Order</label>
                            <input type="date" name="tanggal_order_pt1" id="tanggal_order_pt1" class="form-control">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="keterangan_pt1">Keterangan</label>
                            <textarea class="form-control" name="keterangan_pt1" id="keterangan_pt1" rows="1"></textarea>
                        </div>
                    </div>
                </div>

                <h5>Progress PT2</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tanggal_order_pt2">Tanggal Order</label>
                            <input type="date" name="tanggal_order_pt2" id="tanggal_order_pt2" class="form-control">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="keterangan_pt2">Keterangan</label>
                            <textarea class="form-control" name="keterangan_pt2" id="keterangan_pt2" rows="1"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datek_odp">Datek ODP</label>
                    <input type="text" name="datek_odp" id="datek_odp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="datek_gpon">Datek GPON</label>
                    <input type="text" name="datek_gpon" id="datek_gpon" class="form-control">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" rows="2" class="form-control"></textarea>
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-main right-side" type="submit">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
