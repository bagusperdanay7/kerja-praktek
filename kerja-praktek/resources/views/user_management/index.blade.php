@extends('template.main')

@section('contain')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <h2 class="title-table">User Management</h2>
                    <a href="{{ route('management.create') }}" class="btn btn-main mb-3">Tambah User</a>
                    <table class="table table-responsive table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Role</th>
                                <th scope="col"><i class="las la-ellipsis-v"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($management as $item)
                            <tr>
                                <td class="text-center"> {{ $i; }} </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->password }}</td>
                                <td>{{ $item->role }}</td>
                                <td class="text-center">
                                    <div class="dropleft">
                                        <span class="las la-ellipsis-v" id="menuEdit" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></span>
                                        <div class="dropdown-menu" aria-labelledby="menuEdit">
                                            <a href="{{ route('management.edit',$item->id) }}" class="dropdown-item"
                                                type="button">
                                                <i class="fas fa-edit mr-2"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('management.destroy',$item->id) }}" method="POST"
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
                            </tr>
                            @php $i++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
