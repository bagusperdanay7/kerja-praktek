@extends('template.main')

@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h4 class="form-title">Form New Database</h4>
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
                            <label for="site_kriteria">SITE KRITERIA</label>
                            <input type="text" name="site_kriteria" id="site_kriteria" class="form-control">
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
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('database.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button class="btn btn-main" type="submit" onclick="return validasiTambah();">Simpan
                                Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
