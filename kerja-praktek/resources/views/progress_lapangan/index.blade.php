@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1 class="title-head">Progress Lapangan</h1>
            <table class="table table-responsive table-hover" id="table_id">
                <thead class="">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Witel</th>
                        <th scope="col">No Ao</th>
                        <th scope="col">Olo</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Alamat Toko</th>
                        <th scope="col">TanggalOrderProgressPT1</th>
                        <th scope="col">Keterangan Progress PT1</th>
                        <th scope="col">Tanggal Order Progress PT2</th>
                        <th scope="col">Keterangan Progress PT2</th>
                        <th scope="col">Datek ODP</th>
                        <th scope="col">Datek GPON</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col"><i class="las la-ellipsis-h"></i></th>
                    </tr>
                </thead>
                <tbody>
    
                    @php $i = 1;
                    @endphp
                    @foreach ($progress as $item)
                    <tr>
                        <td>@php echo $i; @endphp</td>
                        <td>{{ $item->wilayah }}</td>
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
