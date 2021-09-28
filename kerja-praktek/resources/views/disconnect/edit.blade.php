@extends('template.main')

@section('contain')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="form-title">Form Update Disconnect</h4>
                    <form action="{{ route('dis.update',$diconnect->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="wfm_id">WFM ID</label>
                            <input type="hidden" name="wfm_id" id="wfm_id" value="{{ $diconnect->wfm_id }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="older">AO</label>
                            <input type="text" name="older" id="older" value="{{ $diconnect->older }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="customer">OLO</label>
                            <input type="text" name="customer" id="customer" value="{{ $diconnect->customer }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lokasi">ALAMAT</label>
                            <input type="text" name="lokasi" id="lokasi" value="{{ $diconnect->lokasi }}"
                                class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label for="kota">KOTA</label>
                            <input type="text" name="kota" id="kota" value="{{ $diconnect->kota }}" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label for="jenis_ont">JENIS ONT</label>
                            <select name="jenis_ont" id="jenis_ont" class="form-control">
                                <option value="{{ $diconnect->jenis_ont }}">{{ $diconnect->jenis_ont }}</option>
                                <option value="L2SW">L2SW</option>
                                <option value="DO LOGIC, REVISI BAKES">DO LOGIC, REVISI BAKES</option>
                                <option value="HG6243C">HG6243C</option>
                                <option value="HG6145F">HG6145F</option>
                                <option value="HG8245H">HG8245H</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">STATUS</label>
                            <select name="status" id="status" class="form-control">
                                <option value="{{ $diconnect->status }}">{{ $diconnect->status }}</option>
                                <option value="Sudah dicabut">Sudah dicabut</option>
                                <option value="DOWN">DOWN</option>
                                <option value="ON">ON</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Plan Cabut</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                            value="{{ $diconnect->plan_cabut }}">
                        </div>
                        <div class="form-group">
                            <label for="wfm_id">PIC</label>
                            <input type="text" name="pic" id="wfm_id" value="{{ $diconnect->pic }}" class="form-control">
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('dis.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button class="btn btn-main" type="submit" onclick="return validasiEdit();">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
