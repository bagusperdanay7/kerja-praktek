@extends('template.main')

@section('contain')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="form-title">Form Update Exe Summ</h4>
                    <form action="{{ route('xSumm.update',$exeSumm->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="olo">OLO</label>
                            <select name="olo" class="form-control" id="olo">
                                <option value="{{ $exeSumm->olo }}">{{ $exeSumm->olo }}</option>
                                @foreach ($database as $db)
                                <option value="{{ $db->olo_isp }}">{{ $db->olo_isp }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="plan_aktivasi">Plan Aktivasi</label>
                            <input type="number" name="plan_aktivasi" id="plan_aktivasi"
                                value="{{ $exeSumm->plan_aktivasi }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="plan_modify">Plan Modify</label>
                            <input type="number" name="plan_modify" id="plan_modify" value="{{ $exeSumm->plan_modify }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="plan_disconnect">Plan Disconnect</label>
                            <input type="number" name="plan_disconnect" id="plan_disconnect"
                                value="{{ $exeSumm->plan_disconnect }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="aktivasi">Aktivasi</label>
                            <input type="number" name="aktivasi" id="aktivasi" value="{{ $exeSumm->aktivasi }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="modify">Modify</label>
                            <input type="number" name="modify" id="modify" value="{{ $exeSumm->modify }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="disconnect">Disconnect</label>
                            <input type="number" name="disconnect" id="disconnect" value="{{ $exeSumm->disconnect }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="resume">resume</label>
                            <input type="number" name="resume" id="resume" value="{{ $exeSumm->resume }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="suspend">Suspend</label>
                            <input type="number" name="suspend" id="suspend" value="{{ $exeSumm->suspend }}"
                                class="form-control">
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('xSumm.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button class="btn btn-main" type="submit" onclick="return validasiEdit();">Update
                                Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
