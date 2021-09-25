@extends('template.main')
@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h4 class="form-title">Form Update Order</h4>
                    <form name="deploymentEdit" action="{{ route('dep.update',$dep->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="rekap_id">Rekap Id</label>
                            <select name="rekap_id" id="rekap_id" class="form-control">
                                <option value="{{ $dep->rekap_id }}">{{ $dep->olo }}</option>
                                @foreach ($rekaps as $item)
                                <option value="{{ $item->id }}">{{ $item->olo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="olo">AO</label>
                            <input type="text" name="ao" id="ao" class="form-control" value="{{ $dep->ao }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">TANGGAL</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                                value="{{ $dep->tanggal }}">
                        </div>
                        <div class="form-group">
                            <label for="olo">OLO</label>
                            <select name="olo" id="olo" class="form-control">
                                <option value="{{ $dep->olo }}">{{ $dep->olo }}</option>
                                @foreach ($rekaps as $item)
                                <option value="{{ $item->olo }}">{{ $item->olo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="witel">WITEL</label>
                            <select name="witel" id="witel" class="form-control">
                                <option value="{{ $dep->witel }}">{{ $dep->witel }}</option>
                                @foreach ($db as $item)
                                <option value="{{ $item->witel }}">{{ $item->witel }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="produk">PRODUK</label>
                            <select name="produk" id="produk" class="form-control">
                                <option value="{{ $dep->produk }}">{{ $dep->produk }}</option>
                                @foreach ($db as $item)
                                <option value="{{ $item->produk }}">{{ $item->produk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_ncx">STATUS NCX</label>
                            <select name="status_ncx" id="status_ncx" class="form-control">
                                <option value="{{ $dep->status_ncx }}">{{ $dep->status_ncx }}</option>
                                @foreach ($db as $item)
                                <option value="{{ $item->status_ncx }}">{{ $item->status_ncx }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="satuan">STATUS WFM</label>
                            <input type="text" name="status_wfm" id="satuan" class="form-control"
                                value="{{ $dep->status_wfm }}">
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('dep.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button class="btn btn-main" type="submit" onclick="return validasiEdit();">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
