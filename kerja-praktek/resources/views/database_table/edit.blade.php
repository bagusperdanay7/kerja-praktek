@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="ml-4 mt-4 col-md-5 col-lg-5">
            <form action="{{ route('database.update',$database->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="witel">WITEL</label>
                    <input type="text" name="witel" id="witel" class="form-control" value="{{ $database->witel }}">
                </div>
                <div class="form-group">
                    <label for="olo">OLO / ISP</label>
                    <input type="text" name="olo_isp" id="olo" class="form-control" value="{{ $database->olo_isp }}">
                </div>
                <div class="form-group">
                    <label for="SITE KRITERIA">SITE KRITERIA</label>
                    <input type="text" name="site_kriteria" id="SITE KRITERIA" class="form-control"
                        value="{{ $database->site_kriteria }}">
                </div>
                <div class="form-group">
                    <label for="order_type">ORDER TYPE</label>
                    <input type="text" name="order_type" id="order_type" class="form-control"
                        value="{{ $database->order_type }}">
                </div>
                <div class="form-group">
                    <label for="produk">PRODUK</label>
                    <input type="text" name="produk" id="produk" class="form-control" value="{{ $database->produk }}">
                </div>
                <div class="form-group">
                    <label for="satuan">SATUAN</label>
                    <input type="text" name="satuan" id="satuan" class="form-control" value="{{ $database->satuan }}">
                </div>
                <div class="form-group">
                    <label for="status_ncx">STATUS NCX</label>
                    <input type="text" name="status_ncx" id="status_ncx" class="form-control"
                        value="{{ $database->status_ncx }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
