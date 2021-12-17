@extends('template.main')

@section('contain')
<div class="container-fluid isi">
    <div class="row">
        <div class="col">
            <div class="m-0 p-0" id="filterform">
                <h4 class="filter-title" title="Filter"><i class="las la-filter"></i> Filter</h4>
                <div class="clear-filter">
                    <a href="{{ route('dis.index') }}" class="">Clear Filters</a>
                </div>
                <form action="{{ route('dis.index') }}">
                    {{-- filter field --}}
                    <div class="form-row">
                        <div class="col">
                            <label for="no_ao">No. AO</label>
                            @if (request('no_ao'))
                            <input list="no_aos" name="no_ao" id="no_ao" class="form-control"
                                value="{{ request('no_ao') }}" autocomplete="off">
                            @else
                            <input list="no_aos" name="no_ao" id="no_ao" class="form-control"
                                placeholder="Masukkan No. AO" autocomplete="off">
                            @endif

                            <datalist id="no_aos">
                                @foreach ($wfms as $wfm)
                                <option value="{{ $wfm->no_ao }}">{{ $wfm->no_ao }}</option>
                                @endforeach
                            </datalist>
                        </div>
                        <div class="col">
                            <label for="plan_cabut">Tanggal</label>
                            <input type="date" class="form-control" placeholder="Tanggal" name="plan_cabut"
                                id="plan_cabut" value="{{ request('plan_cabut') }}">
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
                            <label for="jenis_nte">Jenis NTE</label>
                            <select class="form-control" id="jenis_nte" name="jenis_nte">
                                @if (request('jenis_nte'))
                                <option value="{{ request('jenis_nte') }}">{{ request('jenis_nte') }}</option>
                                @else
                                <option value="">Pilih Jenis NTE</option>
                                @endif
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

                        <div class="col">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                @if (request('status'))
                                <option value="{{ request('status') }}">{{ request('status') }}</option>
                                @else
                                <option value="">Pilih Status NCX</option>
                                @endif
                                <option value="Sudah dicabut">Sudah dicabut</option>
                                <option value="DOWN">DOWN</option>
                                <option value="ON">ON</option>
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

                {{-- filter --}}
                @if (request('no_ao') || request('plan_cabut') || request('olo') || request('witel') ||
                request('jenis_nte') || request('status'))
                <div class="card-body">
                    <h2 class="title-table">Disconnect</h2>
                    <table class="table table-responsive-lg table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">NO</th>
                                <th scope="col">AO</th>
                                <th scope="col">WITEL</th>
                                <th scope="col">OLO</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">JENIS ONT</th>
                                <th scope="col">JUMLAH ONT</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">PLAN CABUT</th>
                                <th scope="col">PIC</th>
                                @canany(['admin', 'editor'])
                                <th scope="col"><span class="las la-ellipsis-v"></span></th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($disconnects as $items)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $items->tanggal }}</td>
                                <td>{{ $items->no_ao }}</td>
                                <td>{{ $items->witel }}</td>
                                <td>{{ $items->olo }}</td>
                                <td>{{ $items->alamat}}</td>
                                <td>{{ $items->jenis_nte }}</td>
                                <td>{{ $items->jumlah_nte }}</td>
                                <td>{{ $items->status }}</td>
                                <td>{{ $items->plan_cabut }}</td>
                                <td>{{ $items->pic }}</td>
                                @canany(['admin', 'editor'])
                                <td class="text-center">
                                    <div class="dropleft" title="Menu">
                                        <span class="las la-ellipsis-v" id="menuEdit" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></span>
                                        <div class="dropdown-menu" aria-labelledby="menuEdit">
                                            <a href="{{ route('dis.edit',$items->id) }}" class="dropdown-item"
                                                type="button">
                                                <i class="fas fa-edit mr-2"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('dis.destroy',$items->id) }}" method="POST"
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
                @else
                <div class="card-body">
                    <h2 class="title-table">Disconnect</h2>
                    <table class="table table-responsive-lg table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">TANGGAL</th>
                                <th scope="col">AO</th>
                                <th scope="col">WITEL</th>
                                <th scope="col">OLO</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">JENIS NTE</th>
                                <th scope="col">JUMLAH NTE</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">PLAN CABUT</th>
                                <th scope="col">PIC</th>
                                @canany(['admin', 'editor'])
                                <th scope="col"><span class="las la-ellipsis-v"></span></th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($disconnect as $item)
                            <tr>
                                {{-- <td>{{ $item->wfm_id; }}</td> --}}

                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->no_ao }}</td>
                                <td>{{ $item->witel }}</td>
                                <td>{{ $item->olo }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->jenis_nte }}</td>
                                <td class="text-center">{{ $item->jumlah_nte }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->plan_cabut }}</td>
                                <td>{{ $item->pic }}</td>
                                @canany(['admin', 'editor'])
                                <td class="text-center">
                                    <div class="dropleft" title="Menu">
                                        <span class="las la-ellipsis-v" id="menuEdit" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></span>
                                        <div class="dropdown-menu" aria-labelledby="menuEdit">
                                            <a href="{{ route('dis.edit',$item->id) }}" class="dropdown-item"
                                                type="button">
                                                <i class="fas fa-edit mr-2"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('dis.destroy',$item->id) }}" method="POST"
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
                @endif
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('database.import')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Pilih file</label>
                                <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1"
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
