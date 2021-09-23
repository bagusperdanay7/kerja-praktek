@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1 class="title-head">Progress Lapangan</h1>
            <table class="table table-responsive hover-table" id="table_id">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Witel</th>
                        <th scope="col" class="text-nowrap">No Ao</th>
                        <th scope="col">Olo</th>
                        <th scope="col">Produk</th>
                        <th scope="col" class="text-nowrap">Alamat Toko</th>
                        <th scope="col" colspan="2" class="text-center">Progress PT1</th>
                        <th scope="col" colspan="2" class="text-center">Progress PT2</th>
                        <th scope="col" class="text-nowrap">Datek ODP</th>
                        <th scope="col" class="text-nowrap">Datek GPON</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col"><i class="las la-ellipsis-h"></i></th>
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
                        <th scope="row" class="text-nowrap">Tanggal Order</th>
                        <th scope="row">Keterangan</th>
                        <th scope="row" class="text-nowrap">Tanggal Order</th>
                        <th>Keterangan</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @php $i = 1;
                    @endphp
                    @foreach ($progress as $item)
                    <tr>
                        <td>@php echo $i; @endphp</td>
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
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="{{ route('progress.edit', $item->id) }}" class="btn btn-success">Edit</a> |
                            <form action="{{ route('progress.destroy',$item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin data akan dihapus ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @php
                    $i++;
                    @endphp
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
