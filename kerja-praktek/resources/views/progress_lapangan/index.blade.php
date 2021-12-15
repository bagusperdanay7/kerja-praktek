@extends('template.main')

@section('contain')
<div class="container-fluid isi">
    <div class="row">
        <div class="col">
            <div class="m-0 p-0" id="filterform">
                <h4 class="filter-title" title="Filter"><i class="las la-filter"></i> Filter</h4>
                <div class="clear-filter">
                    <a href="{{ route('progress.index') }}">Clear Filters</a>
                </div>
                <form action="{{ route('progress.index') }}">
                    {{-- filter field --}}
                    <div class="form-row">
                        <div class="col">
                            <label for="ao">NO AO</label>
                            <select class="form-control" id="ao" name="ao">
                                @if (request('ao'))
                                <option value="{{ request('ao') }}">{{ request('ao') }}</option>
                                @else
                                <option value="">Pilih No AO</option>
                                @endif

                                @foreach ($progress_all as $progress_a)
                                <option value="{{ $progress_a->ao }}">{{ $progress_a->ao }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" id="tanggal"
                                value="{{ request('tanggal') }}">
                        </div>

                        <div class="col">
                            <label for="witel">Witel</label>
                            <select class="form-control" id="witel" name="witel">
                                @if (request('witel'))
                                <option value="{{ request('witel') }}">{{ request('witel') }}</option>
                                @else
                                <option value="">Pilih Witel</option>
                                @endif

                                @foreach ($database as $dbs)
                                @if ($dbs->witel !== '')
                                <option value="{{ $dbs->witel }}">{{ $dbs->witel }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label for="olo">OLO</label>
                            <select class="form-control" id="olo" name="olo">
                                @if (request('olo'))
                                <option value="{{ request('olo') }}">{{ request('olo') }}</option>
                                @else
                                <option value="">Pilih OLO</option>
                                @endif

                                @foreach ($database as $dbs)
                                <option value="{{ $dbs->olo_isp }}">{{ $dbs->olo_isp }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label for="produk">Produk</label>
                            <select class="form-control" id="produk" name="produk">
                                @if (request('produk'))
                                <option value="{{ request('produk') }}">{{ request('produk') }}</option>
                                @else
                                <option value="">Pilih Produk</option>
                                @endif

                                @foreach ($database as $dbs)
                                @if ($dbs->produk !== '')
                                <option value="{{ $dbs->produk }}">{{ $dbs->produk }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label for="progress">Progress</label>
                            <select class="form-control" id="progress" name="progress">
                                @if (request('progress'))
                                <option value="{{ request('progress') }}">{{ request('progress') }}</option>
                                @else
                                <option value="">Pilih Progress</option>
                                @endif

                                <option value="In Progress">In Progress</option>
                                <option value="Done">Done</option>
                                <option value="Cancel">Cancel</option>
                            </select>
                        </div>
                    </div>

                    {{-- akhir filter field --}}

                    {{-- button filter --}}
                    <div class="mt-3 text-right">
                        <button class="btn btn-reset px-4 py-3/2" type="reset">Reset</button>
                        <button class="btn btn-filter px-4 py-3/2" type="submit">Filter</button>
                    </div>
                </form>
            </div>
            {{-- akhir form filter --}}

            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card mt-2 mb-5 shadow-sm">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <h2 class="">Progress Lapangan</h2>
                        </div>
                        <div class="col text-right">
                            <button type="button" class="btn btn-outline" data-toggle="modal"
                                data-target="#importButton">
                                <i class="las la-upload"></i> Import
                            </button>
                            <a href="{{ route('progress.export') }}" class="btn btn-second-thin ml-2">
                                <i class="las la-download"></i> Export
                            </a>
                        </div>
                    </div>
                    <table class="table table-responsive table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Witel</th>
                                <th scope="col" class="text-nowrap">No Ao</th>
                                <th scope="col">Olo</th>
                                <th scope="col">Produk</th>
                                <th scope="col" class="text-nowrap">Alamat</th>
                                <th scope="col" colspan="2" class="text-center">Progress PT1</th>
                                <th scope="col" colspan="2" class="text-center">Progress PT2</th>
                                <th scope="col" class="text-nowrap">Datek ODP</th>
                                <th scope="col" class="text-nowrap">Datek GPON</th>
                                <th scope="col">Progress</th>
                                <th scope="col">Keterangan</th>
                                @canany(['admin', 'editor'])
                                <th scope="col"><i class="las la-ellipsis-v"></i></th>
                                @endcanany
                            </tr>
                        </thead>

                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th scope="row" class="text-nowrap">Tanggal Order</th>
                                <th scope="row">Keterangan</th>
                                <th scope="row" class="text-nowrap">Tanggal Order</th>
                                <th>Keterangan</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                @canany(['admin', 'editor'])
                                <th></th>
                                @endcanany
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pro_lap as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->witel }}</td>
                                <td>{{ $item->ao }}</td>
                                <td>{{ $item->olo }}</td>
                                <td>{{ $item->produk }}</td>
                                <td>{{ $item->alamat_toko }}</td>
                                <td>{{ $item->tanggal_order_pt1 }}</td>
                                <td>{{ $item->keterangan_pt1 }}</td>
                                <td>{{ $item->tanggal_order_pt2 }}</td>
                                <td>{{ $item->keterangan_pt2 }}</td>
                                <td>{{ $item->datek_odp }}</td>
                                <td>{{ $item->datek_gpon }}</td>
                                <td>{{ $item->progress }}</td>
                                <td>{{ $item->keterangan }}</td>
                                @canany(['admin', 'editor'])
                                <td class="text-center">
                                    <div class="dropleft">
                                        <span class="las la-ellipsis-v" id="menuEdit" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></span>
                                        <div class="dropdown-menu" aria-labelledby="menuEdit">
                                            <a href="{{ route('progress.edit',$item->id) }}" class="dropdown-item"
                                                type="button">
                                                <i class="fas fa-edit mr-2"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('progress.destroy',$item->id) }}" method="POST"
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

        <!-- Modal Impor -->
        <div class="modal fade" id="importButton" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="importButtonLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="importButtonLabel">Import Excel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('progress.import')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p><i class="las la-info-circle"></i> Sebelum Import pastikan sesuai dengan template!</p>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04" required
                                        aria-describedby="inputGroupFileAddon04">
                                    <label class="custom-file-label" for="inputGroupFile04">Pilih File</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-second btn-block">Import</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-second-thin text-bold" data-toggle="modal"
                            data-target="#templateButton">Lihat Template</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Template -->
        <div class="modal fade" id="templateButton" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="templatelabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="templatelabel">Template Tabel Progress</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Pastikan urutan kolom file excel yang akan diupload sesuai seperti tabel template agar tidak
                            terjadi error!</p>
                        <table class="table table-sm table-responsive table-striped template-tabel">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Witel</th>
                                    <th scope="col" class="text-nowrap">No Ao</th>
                                    <th scope="col">Olo</th>
                                    <th scope="col">Produk</th>
                                    <th scope="col" class="text-nowrap">Alamat</th>
                                    <th scope="col" class="text-nowrap">Tanggal Order PT1</th>
                                    <th scope="col" class="text-nowrap">Keterangan PT1</th>
                                    <th scope="col" class="text-nowrap">Tanggal Order PT2</th>
                                    <th scope="col" class="text-nowrap">Keterangan PT2</th>
                                    <th scope="col" class="text-nowrap">Datek ODP</th>
                                    <th scope="col" class="text-nowrap">Datek GPON</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12-12-2021</td>
                                    <td>BANDUNG</td>
                                    <td>2-780564639</td>
                                    <td>PT. TELKOM INDONESIA</td>
                                    <td>METRO</td>
                                    <td>Jalan Dipatiukur 203, Coblong, Bandung</td>
                                    <td>10-12-2021</td>
                                    <td>-</td>
                                    <td>11-12-2021</td>
                                    <td>-</td>
                                    <td></td>
                                    <td></td>
                                    <td>In Progress</td>
                                    <td>Tidak Ada</td>
                                </tr>

                                <tr>
                                    <td>11-11-2021</td>
                                    <td>KARAWANG</td>
                                    <td>2-35647564</td>
                                    <td>PT. TELKOM INDONESIA</td>
                                    <td>ASTINET</td>
                                    <td>Jalan Mutiara No 20, Telukjambe Timur, Karawang</td>
                                    <td>01-11-2021</td>
                                    <td>-</td>
                                    <td>07-11-2021</td>
                                    <td>-</td>
                                    <td></td>
                                    <td></td>
                                    <td>In Progress</td>
                                    <td>Tidak Ada</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
