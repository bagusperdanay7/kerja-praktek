@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card mt-2 mb-5 shadow-sm">
                <div class="card-body">
                    <h2 class="title-table">Progress Lapangan</h2>
                    <table class="table table-responsive table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Witel</th>
                                <th scope="col" class="text-nowrap">No Ao</th>
                                <th scope="col">Olo</th>
                                <th scope="col">Produk</th>
                                <th scope="col" class="text-nowrap">Alamat Toko</th>
                                <th scope="col" colspan="2" class="text-center">Progress PT1</th>
                                <th scope="col" colspan="2" class="text-center">Progress PT2</th>
                                <th scope="col" class="text-nowrap">Datek ODP</th>
                                <th scope="col">Progress</th>
                                <th scope="col" class="text-nowrap">Datek GPON</th>
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
                            @foreach ($progress as $item)
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
                                <td>{{ $item->progress }}</td>
                                <td>{{ $item->datek_gpon }}</td>
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
    </div>
</div>
@endsection
