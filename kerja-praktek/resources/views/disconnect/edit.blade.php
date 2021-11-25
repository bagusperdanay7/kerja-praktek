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
                            <label for="ao">TANGGAL</label>
                            <input type="date" name="tanggal" id="ao" value="{{ $dis->tanggal }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ao">AO</label>
                            <input type="text" name="no_ao" id="ao" value="{{ $dis->no_ao }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="older">WITEL</label>
                            <input type="text" name="witel" id="older" value="{{ $dis->witel }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="customer">OLO</label>
                            <input type="text" name="olo" id="customer" value="{{ $dis->olo }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lokasi">ALAMAT</label>
                            <input type="text" name="alamat" id="lokasi" value="{{ $dis->alamat }}"
                                class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label for="kota">KOTA</label>
                            <input type="text" name="kota" id="kota" value="{{ $dis->kota }}" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label for="jenis_ont">JENIS NTE</label>
                            <select name="jenis_nte" id="jenis_ont" class="form-control">
                                <option value="{{ $dis->jenis_nte }}">{{ $dis->jenis_nte }}</option>
                                <option value="L2SW">L2SW</option>
                                <option value="Big ONT Huawei">Big ONT Huawei</option>
                                <option value="Big ONT ZTE">Big ONT ZTE</option>
                                <option value="Big ONT Fiberhome">Big ONT Fiberhome</option>
                                <option value="ONT Premium Huawei">ONT Premium Huawei</option>
                                <option value="ONT Premium ZTE">ONT Premium ZTE</option>
                                <option value="ONT Premium Fiberhome">ONT Premium Fiberhome</option>
                                <option value="ONT Retail Huawei">ONT Retail Huawei</option>
                                <option value="ONT Retail ZTE">ONT Retail ZTE</option>
                                <option value="ONT Retail Fiberhome">ONT Retail Fiberhome</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_ont">JUMLAH NTE</label>
                            <select name="jumlah_nte" id="jumlah_ont" class="form-control">
                                <option value="{{ $dis->jumlah_nte }}">{{ $dis->jumlah_nte }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">STATUS</label>
                            <select name="status" id="status" class="form-control">
                                <option value="{{ $dis->status }}">{{ $dis->status }}</option>
                                <option value="Sudah dicabut">Sudah dicabut</option>
                                <option value="DOWN">DOWN</option>
                                <option value="ON">ON</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="plan_cabut">PLAN CABUT</label>
                            <input class="form-control" type="date" name="plan_cabut" id="plan_cabut" value="{{ $dis->plan_cabut }}">
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
