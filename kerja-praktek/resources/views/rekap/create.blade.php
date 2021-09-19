@extends('template.main')

@section('contain')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>Form Tambah Data</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rekap.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="no">NO</label>
                                <input type="text" name="no" id="no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no">OLO</label>
                                {{-- <input type="text" name="olo" id="no" class="form-control"> --}}
                                <select name="olo" id="no" class="form-control">
                                    @foreach($database as $item)
                                    <option value="{{$item->olo_isp}}">{{$item->olo_isp}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN AKTIVASI</label>
                                {{-- <input type="text" name="plan_aktivasi" id="no" class="form-control"> --}}
                                <select name="plan_aktivasi" id="no" class="form-control">
                                    <option value="">JKt</option>
                                    <option value="">BDG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN MODIFY</label>
                                {{-- <input type="text" name="plan_modify" id="no" class="form-control"> --}}
                                <select name="plan_modify" id="no" class="form-control">
                                    <option value="">JKt</option>
                                    <option value="">BDG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no">PLAN DISCONNECT</label>
                                {{-- <input type="text" name="plan_disconnect" id="no" class="form-control"> --}}
                                <select name="plan_disconnect" id="no" class="form-control">
                                    <option value="">JKt</option>
                                    <option value="">BDG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no">AKTIVASI</label>
                                {{-- <input type="text" name="aktivasi" id="no" class="form-control"> --}}
                                <select name="aktivasi" id="no" class="form-control">
                                    <option value="">JKt</option>
                                    <option value="">BDG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no">MODIFY</label>
                                {{-- <input type="text" name="modify" id="no" class="form-control"> --}}
                                <select name="modify" id="no" class="form-control">
                                    <option value="">JKt</option>
                                    <option value="">BDG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no">DISCONNECT</label>
                                {{-- <input type="text" name="disconnect" id="no" class="form-control"> --}}
                                <select name="disconnect" id="no" class="form-control">
                                    <option value="">JKt</option>
                                    <option value="">BDG</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="no">resume</label>
                                {{-- <input type="text" name="resume" id="no" class="form-control"> --}}
                                <select name="resume" id="no" class="form-control">
                                    <option value="">JKt</option>
                                    <option value="">BDG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no">SUSPEND</label>
                                {{-- <input type="text" name="suspend" id="no" class="form-control"> --}}
                                <select name="suspend" id="no" class="form-control">
                                    <option value="">JKt</option>
                                    <option value="">BDG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
