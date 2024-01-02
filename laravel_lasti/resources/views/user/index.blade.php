@extends('template/admin')
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col">
    </div>
</div>
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Admin</h3>
        </div>
        <div class="card-body">

            <a href="{{ route('user.create') }}"><button type="submit" class="btn btn-primary"><i
                        class="fa fa-plus"></i> Tambah</button></a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $data)
                        <tr>
                            <td><img src="{{ Storage::url('user/' . $data->foto) }}" style="width:150px"
                                    class="img-thumbnail">

                            </td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('user.destroy', $data->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                            class="fa fa-trash"></i></button>
                                </form>

                                <a href="{{ route('user.edit', $data->id) }}" class="btn btn-outline-warning btn-sm"><i
                                        class="fa fa-edit"></i>Edit</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')

@endsection
