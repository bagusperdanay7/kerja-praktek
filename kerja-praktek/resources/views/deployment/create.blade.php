@extends('template.main')
@section('contain')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>Form NEW OLDER</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('dep.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="rekap_id">REKAP ID</label>
                        <select name="rekap_id" id="rekap_id" class="form-control">
                            <option value="">--Pilih--</option>
                            @foreach ($rekaps as $item)
                            <option value="{{ $item->id }}">{{ $item->olo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="olo">AO</label>
                        <input type="text" name="ao" id="olo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="SITE KRITERIA">TANGGAL</label>
                        <input type="date" name="tanggal" id="SITE KRITERIA" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="olo">OLO</label>
                        <select name="olo" id="olo" class="form-control">
                            <option value="">--Pilih--</option>
                            @foreach ($rekaps as $item)
                            <option value="{{ $item->olo }}">{{ $item->olo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="olo">WITEL</label>
                        <select name="witel" id="olo" class="form-control">
                            <option value="">--Pilih--</option>
                            @foreach ($db as $item)
                            <option value="{{ $item->witel }}">{{ $item->witel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="produk">PRODUK</label>
                        <input type="text" name="produk" id="produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status_ncx">STATUS NCX</label>
                        <input type="text" name="status_ncx" id="status_ncx" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="satuan">STATUS WFM</label>
                        <input type="text" name="status_wfm" id="satuan" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

