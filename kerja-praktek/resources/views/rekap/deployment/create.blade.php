@extends('template.main')
@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h4 class="form-title">Form New Rekap</h4>
                    <form action="{{ route('rekap.store') }}" method="POST">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="no">NO</label>
                            <input type="text" name="no" id="no" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label for="olo">OLO</label>
                            {{-- <input type="text" name="olo" id="no" class="form-control"> --}}
                            <select name="olo" id="olo" class="form-control">
                                @foreach($database as $item)
                                <option value="{{$item->olo_isp}}">{{$item->olo_isp}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="plan_aktivasi">PLAN AKTIVASI</label>
                            {{-- <input type="text" name="plan_aktivasi" id="plan_aktivasi" class="form-control"> --}}
                            <select name="plan_aktivasi" id="plan_aktivasi" class="form-control">
                                <option value="">JKt</option>
                                <option value="">BDG</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="plan_modify">PLAN MODIFY</label>
                            {{-- <input type="text" name="plan_modify" id="plan_modify" class="form-control"> --}}
                            <select name="plan_modify" id="plan_modify" class="form-control">
                                <option value="">JKt</option>
                                <option value="">BDG</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="plan_disconnect">PLAN DISCONNECT</label>
                            {{-- <input type="text" name="plan_disconnect" id="plan_disconnect" class="form-control"> --}}
                            <select name="plan_disconnect" id="plan_disconnect" class="form-control">
                                <option value="">JKt</option>
                                <option value="">BDG</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="aktivasi">AKTIVASI</label>
                            {{-- <input type="text" name="aktivasi" id="aktivasi" class="form-control"> --}}
                            <select name="aktivasi" id="aktivasi" class="form-control">
                                <option value="">JKt</option>
                                <option value="">BDG</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="modify">MODIFY</label>
                            {{-- <input type="text" name="modify" id="modify" class="form-control"> --}}
                            <select name="modify" id="modify" class="form-control">
                                <option value="">JKt</option>
                                <option value="">BDG</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="disconnect">DISCONNECT</label>
                            {{-- <input type="text" name="disconnect" id="disconnect" class="form-control"> --}}
                            <select name="disconnect" id="disconnect" class="form-control">
                                <option value="">JKt</option>
                                <option value="">BDG</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="resume">resume</label>
                            {{-- <input type="text" name="resume" id="resume" class="form-control"> --}}
                            <select name="resume" id="resume" class="form-control">
                                <option value="">JKt</option>
                                <option value="">BDG</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="suspend">SUSPEND</label>
                            {{-- <input type="text" name="suspend" id="suspend" class="form-control"> --}}
                            <select name="suspend" id="suspend" class="form-control">
                                <option value="">JKt</option>
                                <option value="">BDG</option>
                            </select>
                        </div>
                        <div class="form-group text-right mt-4">
                            <a href="{{ route('rekap.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button type="submit" class="btn btn-main" onclick="return validasiTambah();">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
