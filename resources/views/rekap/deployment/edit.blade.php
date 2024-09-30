@extends('template.main')

@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h4 class="form-title">Form Update Rekap</h4>
                    <form action="{{ route('rekap.update',$rekap->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="olo">OLO</label>
                            <input type="text" name="olo" id="olo" class="form-control" value="{{ $rekap->olo }}">
                        </div>
                        <div class="form-group">
                            <label for="plan_aktivasi">PLAN AKTIVASI</label>
                            <input type="text" name="plan_aktivasi" id="plan_aktivasi" class="form-control"
                                value="{{ $rekap->plan_aktivasi }}">
                        </div>
                        <div class="form-group">
                            <label for="plan_modify">PLAN MODIFY</label>
                            <input type="text" name="plan_modify" id="plan_modify" class="form-control"
                                value="{{ $rekap->plan_modify }}">
                        </div>
                        <div class="form-group">
                            <label for="plan_disconnect">PLAN DISCONNECT</label>
                            <input type="text" name="plan_disconnect" id="plan_disconnect" class="form-control"
                                value="{{ $rekap->plan_disconnect }}">
                        </div>
                        <div class="form-group">
                            <label for="aktivasi">AKTIVASI</label>
                            <input type="text" name="aktivasi" id="aktivasi" class="form-control"
                                value="{{ $rekap->aktivasi }}">
                        </div>
                        <div class="form-group">
                            <label for="modify">MODIFY</label>
                            <input type="text" name="modify" id="modify" class="form-control"
                                value="{{ $rekap->modify }}">
                        </div>
                        <div class="form-group">
                            <label for="disconnect">DISCONNECT</label>
                            <input type="text" name="disconnect" id="disconnect" class="form-control"
                                value="{{ $rekap->disconnect }}">
                        </div>

                        <div class="form-group">
                            <label for="resume">resume</label>
                            <input type="text" name="resume" id="resume" class="form-control"
                                value="{{ $rekap->resume }}">
                        </div>
                        <div class="form-group">
                            <label for="suspend">SUSPEND</label>
                            <input type="text" name="suspend" id="suspend" class="form-control"
                                value="{{ $rekap->suspend }}">
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('rekap.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button type="submit" class="btn btn-main" onclick="return validasiEdit();">Update
                                Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
