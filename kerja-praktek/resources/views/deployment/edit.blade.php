@extends('template.main')
@section('contain')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>Form NEW OLDER</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('dep.update',$dep->id) }}" method="POST">
                    @csrf
                    @method('put')
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
                        <input type="text" name="ao" id="olo" class="form-control" value="{{ $dep->ao }}">
                    </div>
                    <div class="form-group">
                        <label for="SITE KRITERIA">TANGGAL</label>
                        <input type="date" name="tanggal" id="SITE KRITERIA" class="form-control" value="{{ $dep->tanggal }}">
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
                        <input type="text" name="produk" id="produk" class="form-control" value="{{ $dep->produk }}">
                    </div>
                    <div class="form-group">
                        <label for="status_ncx">STATUS NCX</label>
                        <input type="text" name="status_ncx" id="status_ncx" class="form-control" value="{{ $dep->status_ncx }}">
                    </div>
                    <div class="form-group">
                        <label for="satuan">STATUS WFM</label>
                        <input type="text" name="status_wfm" id="satuan" class="form-control" value="{{ $dep->status_wfm }}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

