@extends('template.main')

@section('contain')
<div class="container-fluid isi">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card mt-2 mb-5 shadow-sm">
                <div class="card-body">
                    {{-- <div class="p-1 bd-highlight">
                    <a href="{{ route('pekerjaan_lapangan.export') }}" class="btn btn-success mb-4">
                    <i class="fas fa-file-excel mr-2"></i> Export Excel</a>
                    </div>
                    <div class="p-1 bd-highlight mr-2">
                    <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal"
                        data-target="#modalExcel">
                        <i class="fas fa-file-excel mr-2"></i>
                        Import Excel
                    </button>
                    </div> --}}

                <div class="title-table d-flex justify-content-between">
                    <h2>Pekerjaan Lapangan</h2>
                    <button type="button" class="btn btn-main mb-4" data-toggle="modal" data-target="#modalTambah">
                        <i class="fas fa-plus mr-2"></i> Tambah Data
                    </button>
                </div>

                <table class="table table-responsive table-hover" id="table_id">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Witel</th>
                            <th scope="col">Kegiatan</th>
                            <th scope="col" class="text-nowrap">NO AO</th>
                            <th scope="col">OLO</th>
                            <th scope="col">LOKASI</th>
                            <th scope="col">LAYANAN</th>
                            <th scope="col">BANDWIDTH</th>
                            <th scope="col" class="text-nowrap">DATEK GPON</th>
                            <th scope="col" class="text-nowrap">DATEK ODP</th>
                            <th scope="col">KETERANGAN</th>
                            @canany(['admin', 'editor'])
                            <th>
                                <span class="las la-ellipsis-v"></span>
                            </th>
                            @endcanany
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($isidata as $isi)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $isi->tanggal }}</td>
                            <td>{{ $isi->witel }}</td>
                            <td>{{ $isi->kegiatan }}</td>
                            <td>{{ $isi->no_ao }}</td>
                            <td>{{ $isi->olo }}</td>
                            <td>{{ $isi->lokasi }}</td>
                            <td>{{ $isi->layanan }}</td>
                            <td>{{ $isi->bandwidth }}</td>
                            <td>{{ $isi->datek_gpon }}</td>
                            <td>{{ $isi->datek_odp }}</td>
                            <td>{{ $isi->keterangan }}</td>
                            @canany(['admin', 'editor'])
                            <td class="text-center">
                                <div class="dropleft">
                                    <span class="las la-ellipsis-v" id="menuEdit" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"></span>
                                    <div class="dropdown-menu" aria-labelledby="menuEdit">
                                        <a href="{{ route('pekerjaan_lapangan.edit',$isi->id) }}" class="dropdown-item"
                                            type="button">
                                            <i class="fas fa-edit mr-2"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('pekerjaan_lapangan.destroy',$isi->id) }}" method="POST"
                                            class="d-inline" onsubmit="return validasiHapus()">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item" type="submit"
                                                onclick="return confirm('Apakah Anda Ingin Menghapusnya?')"><i
                                                    class="fas fa-trash mr-2"></i> Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            @endcanany
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Data Pekerjaan Lapangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pekerjaan_lapangan.store') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="witel">Witel</label>
                        <select name="witel" class="form-control" id="witel">
                            <option value="">Pilih WITEL</option>
                            @foreach ($database as $db)
                            <option value="{{ $db->witel }}">{{ $db->witel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kegiatan">Kegiatan</label>
                        <input type="text" name="kegiatan" id="kegiatan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_ao">No AO</label>
                        <select name="no_ao" class="form-control" id="no_ao">
                            <option value="">Pilih AO</option>
                            @foreach ($wfm as $wfm)
                            <option value="{{ $wfm->no_ao }}">{{ $wfm->no_ao }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="olo">OLO</label>
                        <select name="olo" class="form-control" id="olo">
                            <option value="">Pilih OLO</option>
                            @foreach ($database as $db)
                            <option value="{{ $db->olo_isp }}">{{ $db->olo_isp }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <textarea name="lokasi" class="form-control" id="lokasi" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="layanan">Layanan</label>
                        <select name="layanan" class="form-control" id="layanan">
                            <option value="">Pilih Layanan</option>
                            @foreach ($database as $db)
                            <option value="{{ $db->produk }}">{{ $db->produk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bandwidth">Bandwidth</label>
                        <input type="text" name="bandwidth" id="bandwidth" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="datek_gpon">DATEK GPON</label>
                        <input type="text" name="datek_gpon" id="datek_gpon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="datek_odp">DATEK ODP</label>
                        <input type="text" name="datek_odp" id="datek_odp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan" rows="2"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-main" onclick="return validasiTambah();">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Excel -->
<div class="modal fade" id="modalExcel" tabindex="-1" aria-labelledby="modalLabelExcel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelExcel">Import Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pekerjaan_lapangan.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="pilihFile">Pilih file</label>
                        <input type="file" name="file" class="form-control-file" id="pilihFile" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary">Import</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection
