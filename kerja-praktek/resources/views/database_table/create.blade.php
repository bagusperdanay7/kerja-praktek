@extends('template.main')
@section('contain')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>Form Tambah Data</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('database.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="witel">WITEL</label>
                        <input type="text" name="witel" id="witel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="olo">OLO / ISP</label>
                        <input type="text" name="olo_isp" id="olo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="SITE KRITERIA">SITE KRITERIA</label>
                        <input type="text" name="site_kriteria" id="SITE KRITERIA" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="order_type">ORDER TYPE</label>
                        <input type="text" name="order_type" id="order_type" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="produk">PRODUK</label>
                        <input type="text" name="produk" id="produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="satuan">SATUAN</label>
                        <input type="text" name="satuan" id="satuan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status_ncx">STATUS NCX</label>
                        <input type="text" name="status_ncx" id="status_ncx" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection