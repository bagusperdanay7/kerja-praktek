@extends('template.main')

@section('contain')
<div class="container-fluid isi">
    @if (session()->has('success'))
        <div class="success-tambah align-items-center mt-3" id="success-tambah">
            <div class="d-flex">
                <div class="ml-3 p-2 align-self-center text-success">
                    <i class="las la-check display-4"></i>
                </div>
                <div class="p-2 flex-grow-1 border-right">
                    <h3 class="mt-2">Success</h3>
                    <p class="pesan-berhasil">{{ session('success') }}</p>
                </div>
                <div class="px-4 align-self-center">
                    <button id="close-flash" class="close" onclick="hideFlash()">
                        <span class="font-weight-normal">CLOSE</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

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
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Role</th>
                                <th scope="col"><i class="las la-ellipsis-v"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($management as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->username }}</td>
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
                                                    onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">
                                                    <i class="fas fa-trash mr-2"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
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
