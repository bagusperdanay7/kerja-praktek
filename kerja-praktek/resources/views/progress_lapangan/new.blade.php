@extends('template.main')
@section('contain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h4 class="form-title">Form New Progress</h4>
                    <form action="{{ route('progress.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="witel">Witel</label>
                            <select name="witel" id="witel" class="form-control">
                                <option value="">Pilih Witel</option>
                                @foreach ($database as $db)
                                <option value="{{ $db->witel }}">{{ $db->witel }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ao">No Ao</label>
                            <select name="ao" id="ao" class="form-control">
                                <option value="">Pilih AO</option>
                                @foreach ($wfm as $wfm)
                                <option value="{{ $wfm->no_ao }}">{{ $wfm->no_ao }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="olo">OLO</label>
                            <select name="olo" id="olo" class="form-control">
                                <option value="">Pilih OLO</option>
                                @foreach ($database as $db)
                                <option value="{{ $db->olo_isp }}">{{ $db->olo_isp }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="produk">Produk</label>
                            <select name="produk" id="produk" class="form-control">
                                <option value="">Pilih Produk</option>
                                @foreach ($database as $db)
                                <option value="{{ $db->produk }}">{{ $db->produk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="alamat_toko">Alamat / Nama Toko</label>
                                <textarea name="alamat_toko" id="alamat_toko" rows="3" class="form-control"></textarea>
                            </div>
                        </div>

                        <h5>Progress PT1</h5>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="tanggal_order_pt1">Tanggal Order</label>
                                    <input type="date" name="tanggal_order_pt1" id="tanggal_order_pt1"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="keterangan_pt1">Keterangan</label>
                                    <textarea class="form-control" name="keterangan_pt1" id="keterangan_pt1"
                                        rows="1"></textarea>
                                </div>
                            </div>
                        </div>

                        <h5>Progress PT2</h5>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="tanggal_order_pt2">Tanggal Order</label>
                                    <input type="date" name="tanggal_order_pt2" id="tanggal_order_pt2"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="keterangan_pt2">Keterangan</label>
                                    <textarea class="form-control" name="keterangan_pt2" id="keterangan_pt2"
                                        rows="1"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="datek_odp">Datek ODP</label>
                            <input type="text" name="datek_odp" id="datek_odp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="datek_gpon">Datek GPON</label>
                            <input type="text" name="datek_gpon" id="datek_gpon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="progress">Progress</label>
                            <select name="progress" id="progress" class="form-control">
                                <option value="">Pilih Progress</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Done">Done</option>
                                <option value="Cancel">Cancel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="2" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <a href="{{ route('progress.index') }}" class="btn btn-white mr-2" type="reset">Cancel</a>
                            <button class="btn btn-main right-side" type="submit"
                                onclick="return validasiTambah();">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
