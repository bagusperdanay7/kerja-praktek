@extends('template.main')

@section('contain')

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            Halaman Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('dis.update',$dis->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="wfm_id">WFM ID</label>
                    <input type="text" name="wfm_id" id="wfm_id" value="{{ $dis->wfm_id }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="older">ORDER</label>
                    <input type="text" name="older" id="older" value="{{ $dis->older }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="customer">CUSTOMER</label>
                    <input type="text" name="customer" id="customer" value="{{ $dis->customer }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lokasi">LOKASI</label>
                    <input type="text" name="lokasi" id="lokasi" value="{{ $dis->lokasi }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kota">KOTA</label>
                    <input type="text" name="kota" id="kota" value="{{ $dis->kota }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jenis_ont">JENIS ONT</label>
                    <input type="text" name="jenis_ont" id="jenis_ont" value="{{ $dis->jenis_ont }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="status">STATUS</label>
                    <input type="status" name="status" id="status" value="{{ $dis->status }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="plan_cabut">PLAN CABUT</label>
                    <input type="text" name="plan_cabut" id="plan_cabut" value="{{ $dis->plan_cabut }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="wfm_id">PIC</label>
                    <input type="text" name="pic" id="wfm_id" value="{{ $dis->pic }}" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
