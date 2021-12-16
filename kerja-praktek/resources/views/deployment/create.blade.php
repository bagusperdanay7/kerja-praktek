@extends('template.main')
@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h4 class="form-title">Form New Order</h4>
                    <form name="deploymentAdd" action="{{ route('dep.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="rekap_id">Rekap Id</label>
                            <select name="rekap_id" id="rekap_id" class="form-control" required>
                                <option value="">Pilih Rekap ID</option>
                                @foreach ($rekaps as $item)
                                <option value="{{ $item->id }}">{{ $item->olo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ao">AO</label>
                            <input type="text" name="ao" id="ao" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="olo">OLO</label>
                            <select name="olo" id="olo" class="form-control">
                                <option value="">Pilih OLO</option>
                                @foreach ($rekaps as $item)
                                <option value="{{ $item->olo }}">{{ $item->olo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="witel">WITEL</label>
                            <select name="witel" id="witel" class="form-control">
                                <option value="">Pilih WITEL</option>
                                @foreach ($db as $item)
                                <option value="{{ $item->witel }}">{{ $item->witel }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="produk">Produk</label>
                            <select name="produk" id="olo" class="form-control">
                                <option value="">Pilih PRODUK</option>
                                @foreach ($db as $item)
                                <option value="{{ $item->produk }}">{{ $item->produk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_ncx">Status NCX</label>
                            <select name="produk" id="olo" class="form-control">
                                <option value="">Pilih Status NCX</option>
                                @foreach ($db as $item)
                                <option value="{{ $item->status_ncx }}">{{ $item->status_ncx }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_wfm">Status WFM</label>
                            <input type="text" name="status_wfm" id="status_wfm" class="form-control">
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('dep.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button class="btn btn-main" type="submit" onclick="return validasiTambahDeployment();">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
