@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-5">Pekerjaan Lapangan</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#modalTambah">
                <i class="fas fa-plus mr-2"></i> Tambah Data
            </button>
            <a href="{{ route('pekerjaan_lapangan.export') }}" class="btn btn-success mb-4">
              <i class="fas fa-file-excel mr-2"></i> Export Excel</a>
            <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#modalExcel">
              <i class="fas fa-file-excel mr-2"></i> 
                Import Excel
            </button>
            <table class="table table-responsive table-hover" id="table_id">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Witel</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">NO AO</th>
                        <th scope="col">OLO</th>
                        <th scope="col">LOKASI</th>
                        <th scope="col">LAYANAN</th>
                        <th scope="col">BANDWIDTH</th>
                        <th scope="col">DATEK GPON</th>
                        <th scope="col">DATEK ODP</th>
                        <th scope="col">KETERANGAN</th>
                        <th>
                            <span class="las la-ellipsis-v"></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($isidata as $isi)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
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
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" type="submit"
                                            onclick="return confirm('Apakah Anda Ingin Menghapusnya?')"><i
                                                class="fas fa-trash mr-2"></i> Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
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
                                    <option value="">Bandung</option>
                                    <option value="">Bandung Barat</option>
                                    <option value="">Purwakarta</option>
                                    <option value="">Karawang</option>
                                    <option value="">Bekasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kegiatan">Kegiatan</label>
                                <select name="kegiatan" class="form-control" id="kegiatan">
                                    <option value="">Instalasi PT1</option>
                                    <option value="">Preventiv</option>
                                    <option value="">Survey</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_ao">No AO</label>
                                <input type="text" name="no_ao" id="no_ao" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="olo">OLO</label>
                                <select name="olo" class="form-control" id="olo">
                                    <option value="">PT MORA TELEMATIKA INDONESIA</option>
                                    <option value="">PT TELEKOMUNIKASI SELULAR</option>
                                    <option value="">PT HIPERNET INDODATA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <textarea name="lokasi" class="form-control" id="lokasi" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="layanan">Layanan</label>
                                <select name="layanan" class="form-control" id="layanan">
                                    <option value="">METRO</option>
                                    <option value="">ASTRINET</option>
                                    <option value="">NODE B</option>
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
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save mr-2"></i> Simpan Perubahan
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
                              <input type="file" name="file" class="form-control-file" id="pilihFile"
                                  required>
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
