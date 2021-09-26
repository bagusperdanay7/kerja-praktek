@extends('template.main')

@section('contain')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="form-title">Form Update Disconnect</h4>
                    <form action="{{ route('dis.update',$dis->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="wfm_id">WFM ID</label>
                            <input type="hidden" name="wfm_id" id="wfm_id" value="{{ $dis->wfm_id }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="older">AO</label>
                            <input type="text" name="older" id="older" value="{{ $dis->older }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="customer">OLO</label>
                            <input type="text" name="customer" id="customer" value="{{ $dis->customer }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lokasi">ALAMAT</label>
                            <input type="text" name="lokasi" id="lokasi" value="{{ $dis->lokasi }}"
                                class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label for="kota">KOTA</label>
                            <input type="text" name="kota" id="kota" value="{{ $dis->kota }}" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label for="jenis_ont">JENIS ONT</label>
                            <input type="text" name="jenis_ont" id="jenis_ont" value="{{ $dis->jenis_ont }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status">STATUS</label>
                            <input type="status" name="status" id="status" value="{{ $dis->status }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="plan_cabut">PLAN CABUT</label>
                            <input type="text" name="plan_cabut" id="plan_cabut" value="{{ $dis->plan_cabut }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="wfm_id">PIC</label>
                            <input type="text" name="pic" id="wfm_id" value="{{ $dis->pic }}" class="form-control">
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
