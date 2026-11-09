@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h2>Data User</h2>

    <a href="{{ url('/admin/users/create') }}" class="btn btn-primary mb-3">
        + Tambah User
    </a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>

    @foreach($users as $user)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>

            <td>
                <a href="{{ url('/admin/users/'.$user->id.'/edit') }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>
                <form action="{{ url('/admin/users/'.$user->id) }}"
                    method="POST"
                    class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>
        </tr>

    @endforeach

    </table>

</div>

@endsection