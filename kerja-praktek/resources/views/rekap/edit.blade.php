@extends('template.main')

@section('contain')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>Form Edit Data</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rekap.update',$rekap->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="no">NO</label>
                                <input type="text" name="no" id="no" class="form-control" value="{{ $rekap->no }}">
                            </div>
                            <div class="form-group">
                                <label for="no">OLO</label>
                                <input type="text" name="olo" id="no" class="form-control" value="{{ $rekap->olo }}">
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN AKTIVASI</label>
                                <input type="text" name="plan_aktivasi" id="no" class="form-control" value="{{ $rekap->plan_aktivasi }}">
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN MODIFY</label>
                                <input type="text" name="plan_modify" id="no" class="form-control" value="{{ $rekap->plan_modify }}">
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN DISCONNECT</label>
                                <input type="text" name="plan_disconnect" id="no" class="form-control" value="{{ $rekap->plan_disconnect }}">
                            </div>
                            <div class="form-group">
                                <label for="no">AKTIVASI</label>
                                <input type="text" name="aktivasi" id="no" class="form-control" value="{{ $rekap->aktivasi }}">
                            </div>
                            <div class="form-group">
                                <label for="no">MODIFY</label>
                                <input type="text" name="modify" id="no" class="form-control" value="{{ $rekap->modify }}">
                            </div>
                            <div class="form-group">
                                <label for="no">DISCONNECT</label>
                                <input type="text" name="disconnect" id="no" class="form-control" value="{{ $rekap->disconnect }}">
                            </div>

                            <div class="form-group">
                                <label for="no">resume</label>
                                <input type="text" name="resume" id="no" class="form-control" value="{{ $rekap->resume }}">
                            </div>
                            <div class="form-group">
                                <label for="no">SUSPEND</label>
                                <input type="text" name="suspend" id="no" class="form-control" value="{{ $rekap->suspend }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection